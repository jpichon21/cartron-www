<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Resource;
use AppBundle\Entity\Category;
use AppBundle\Repository\ResourceRepository;
use AppBundle\Form\ResourceType;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
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
     *  "/resource/{category}", name="admin_resource",
     *  requirements={"category" = "^\d+"},
     *  defaults={"category" = null}
     * )
     * @return View
     */
    public function indexResourceAction(Category $category = null)
    {
        if ($category !== null) {
            $resources = $category->getResources();
            $isSortable = true;
        } else {
            $resources = $this->resourceRepository->findAll();
            $isSortable = false;
        }

        return $this->render(
            'admin/resource/resource.html.twig',
            ['resources' => $resources, 'isSortable' => $isSortable, 'category' => $category]
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

            $data = $form->getData();
            $downloads = $data->getDownloads();
            foreach ($downloads as $download) {
                $download->setLocale('fr');
            }

            $uploadFile = $data->getPicture();
            if ($uploadFile instanceof UploadedFile) {
                $nameOriginalFile = $uploadFile->getClientOriginalName();
                $name = 'resourcePic' . time() . '_' . $nameOriginalFile;
                $uploadFile->move(
                    $this->getParameter('uploadDirectory'),
                    $name
                );
                $resource->setPicture($name);
            }

            $uploadFile = $data->getMiniature();
            if ($uploadFile instanceof UploadedFile) {
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

            return $this->redirectToRoute('admin_edit_resource', ['resource' => $resource->getId(), 'locale' => 'fr']);
        }

        return $this->render(
            'admin/resource/manage_resource.html.twig',
            ['form' => $form->createView(), 'isEdition' => false, 'idResource' => $resource->getId()]
        );
    }

    /**
     * @Route(
     *  "/resource/edit/{resource}/{locale}",
     *  name="admin_edit_resource",
     *  requirements={"id" = "^\d+", "locale" = "fr|en"}
     * )
     *
     * @return View
     */
    public function editResourceAction(Request $request, Resource $resource, $locale)
    {
        $resource->setTranslatableLocale($locale);
        $this->em->refresh($resource);

        $picture = $resource->getPicture();
        $miniature = $resource->getMiniature();

        $form = $this->createForm(ResourceType::class, $resource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            ($locale === 'fr') ?
            $resource->setTranslatableLocale('fr') :
            $resource->setTranslatableLocale('en');

            $data = $form->getData();
            $downloads = $data->getDownloads();
            foreach ($downloads as $download) {
                if ($download->getLocale() == null) {
                    ($locale === 'fr') ? $download->setLocale('fr') : $download->setLocale('en');
                }
            }

            $uploadFile = $data->getPicture();
            if ($uploadFile instanceof UploadedFile) {
                $nameOriginalFile = $uploadFile->getClientOriginalName();
                $name = 'resourcePic' . time() . '_' . $nameOriginalFile;
                $uploadFile->move(
                    $this->getParameter('uploadDirectory'),
                    $name
                );
                $resource->setPicture($name);

                // yolo
                if ($picture != null) {
                    if (file_exists('upload/'.$picture)) {
                        unlink('upload/'.$picture);
                    }
                }
            } else {
                if (isset($picture)) {
                    $resource->setPicture($picture);
                }
            }

            $uploadFile = $data->getMiniature();
            if ($uploadFile instanceof UploadedFile) {
                $nameOriginalFile = $uploadFile->getClientOriginalName();
                $name = 'resourceMin' . time() . '_' . $nameOriginalFile;
                $uploadFile->move(
                    $this->getParameter('uploadDirectory'),
                    $name
                );
                $resource->setMiniature($name);

                // yolo
                if ($miniature != null) {
                    if (file_exists('upload/'.$miniature)) {
                        unlink('upload/'.$miniature);
                    }
                }
            } else {
                if (isset($miniature)) {
                    $resource->setMiniature($miniature);
                }
            }

            $this->em->persist($resource);
            $this->em->flush();
            return $this->redirectToRoute(
                'admin_edit_resource',
                ['resource' => $resource->getId(), 'locale' => $locale]
            );
        }

        return $this->render(
            'admin/resource/manage_resource.html.twig',
            ['form' => $form->createView(), 'locale' => $locale, 'isEdition' => true, 'resource' => $resource]
        );
    }

    /**
     * @Route(
     *  "/resource/{resource}/{upOrDown}/{category}", name="admin_sort_resource",
     *  requirements={"idResource" = "^\d+","upOrDown" = "up|down", "idCategory" = "^\d+"},
     *  defaults={"idResource" = null}
     * )
     * @return View
     */
    public function sortResourceAction(Resource $resource, $upOrDown, Category $category)
    {
        $countResources = count($category->getResources());
        $actualPosition = $resource->getPosition();
        if ($upOrDown === 'up' && $actualPosition !== 0) {
                $resource->setPosition($actualPosition -1);
        } elseif ($upOrDown === 'down' && $actualPosition !== $countResources -1) {
                $resource->setPosition($actualPosition +1);
        }

        $this->em->persist($resource);
        $this->em->flush();

        return $this->redirectToRoute('admin_resource', ['category' => $category->getId()]);
    }
}
