<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Resource;
use AppBundle\Repository\ResourceRepository;
use AppBundle\Form\ResourceType;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * ResourceAdmin controller.
 */
class ResourceAdminController extends Controller
{
    /**
     * @var ResourceRepository
     */
    private $resourceRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        ResourceRepository $resourceRepository,
        EntityManager $em
    ) {
        $this->resourceRepository = $resourceRepository;
        $this->em = $em;
    }

    /**
     * @Route(
     *  "/resource/{idCategory}", name="admin_resource",
     *  requirements={"idCategory" = "^\d+"},
     *  defaults={"idCategory" = null}
     * )
     * @return View
     */
    public function indexResourceAction($idCategory)
    {
        if ($idCategory !== null) {
            // $resources = $this->resourceRepository->getBySortableGroupsQuery(
            //     ['category' => $idCategory]
            // )->getResult();
            $resources = $this->resourceRepository->findBy(
                ['category' => $idCategory]
            );
            $isSortable = true;
        } else {
            $resources = $this->resourceRepository->findAll();
            $isSortable = false;
        }

        return $this->render(
            'admin/resource/resource.html.twig',
            ['resources' => $resources, 'isSortable' => $isSortable, 'idCategory' => $idCategory]
        );
    }

    /**
     * @Route(
     *  "/resource/add",
     *  name="admin_add_resource"
     * )
     *
     * @return View
     */
    public function addResourceAction(Request $request)
    {
        $resource = new Resource();

        $form = $this->createForm(ResourceType::class, $resource);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $resource->setTranslatableLocale('fr_fr');
            $data = $form->getData();
            
            $uploadFile = $data->getPicture();
            if ($uploadFile) {
                $nameOriginalFile = $uploadFile->getClientOriginalName();
                $name = 'resourcePic' . time() . '_' . $nameOriginalFile;
                $uploadFile->move(
                    $this->getParameter('uploadDirectory'),
                    $name
                );
                $resource->setPicture($name);
            }

            $uploadFile = $data->getMiniature();
            if ($uploadFile) {
                $nameOriginalFile = $uploadFile->getClientOriginalName();
                $name = 'resourceMin' . time() . '_' . $nameOriginalFile;
                $uploadFile->move(
                    $this->getParameter('uploadDirectory'),
                    $name
                );
                $resource->setMiniature($name);
            }

            $this->em->persist($resource);
            $this->em->flush();

            return $this->redirectToRoute('admin_edit_resource', ['id' => $resource->getId(), 'locale' => 'fr']);
        }

        return $this->render(
            'admin/resource/manage_resource.html.twig',
            ['form' => $form->createView(), 'isEdition' => false]
        );
    }

    /**
     * @Route(
     *  "/resource/edit/{id}/{locale}",
     *  name="admin_edit_resource",
     *  requirements={"id" = "^\d+", "locale" = "fr|en"}
     * )
     *
     * @return View
     */
    public function editResourceAction(Request $request, $id, $locale)
    {
        $resource = $this->resourceRepository->findOneById($id);

        // $resource->setLocale($locale);
        // $this->em->refresh($resource);

        $photo = $resource->getPicture();
        $miniature = $resource->getMiniature();

        $originalDownloads = new ArrayCollection();

        foreach ($resource->getDownloads() as $download) {
            $originalDownloads->add($download);
        }

        $form = $this->createForm(ResourceType::class, $resource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ($locale === 'fr_fr') ?
            // $resource->setTranslatableLocale('fr_fr') :
            // $resource->setTranslatableLocale('en_us');

            $data = $form->getData();

            foreach ($originalDownloads as $download) {
                if (false === $resource->getDownloads()->contains($download)) {
                    $name = $download->getFile();
                    $dir = $this->getParameter('uploadDirectory').'/';
                    unlink($dir.$name);
                    $this->em->remove($download);
                }
            }

            $uploadFile = $data->getPicture();
            if ($uploadFile) {
                $nameOriginalFile = $uploadFile->getClientOriginalName();
                $name = 'resourcePic' . time() . '_' . $nameOriginalFile;
                $uploadFile->move(
                    $this->getParameter('uploadDirectory'),
                    $name
                );
                $resource->setPicture($name);
            } else {
                if (isset($photo)) {
                    $resource->setPicture($photo);
                }
            }

            $uploadFile = $data->getMiniature();
            if ($uploadFile) {
                $nameOriginalFile = $uploadFile->getClientOriginalName();
                $name = 'resourceMin' . time() . '_' . $nameOriginalFile;
                $uploadFile->move(
                    $this->getParameter('uploadDirectory'),
                    $name
                );
                $resource->setMiniature($name);
            } else {
                if (isset($miniature)) {
                    $resource->setMiniature($miniature);
                }
            }

            $this->em->persist($resource);
            $this->em->flush();
            return $this->redirectToRoute('admin_edit_resource', ['id' => $resource->getId(), 'locale' => $locale]);
        }

        return $this->render(
            'admin/resource/manage_resource.html.twig',
            ['form' => $form->createView(), 'locale' => $locale]
        );
    }

    /**
     * @Route(
     *  "/resource/{idResource}/{upOrDown}/{idCategory}", name="admin_sort_resource",
     *  requirements={"idResource" = "^\d+","upOrDown" = "up|down", "idCategory" = "^\d+"},
     *  defaults={"idResource" = null}
     * )
     * @return View
     */
    public function sortResourceAction($idResource, $upOrDown, $idCategory)
    {
        $resource = $this->resourceRepository->findOneById($idResource);
        $countResources = count($this->resourceRepository->findAll());
        $actualPosition = $resource->getPosition();
        if ($upOrDown === 'down' && $actualPosition !== 0) {
                $resource->setPosition($actualPosition -1);
        } else {
            if ($upOrDown === 'up' && $actualPosition !== $countResources -1) {
                $resource->setPosition($actualPosition +1);
            }
        }

        return $this->redirectToRoute('admin_resource', ['idCategory' => $idCategory]);
    }
}
