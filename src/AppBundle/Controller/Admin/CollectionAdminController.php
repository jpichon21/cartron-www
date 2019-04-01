<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\CollectionRepository;
use AppBundle\Entity\Collection;
use AppBundle\Entity\SousMenu;
use AppBundle\Form\CollectionType;
use AppBundle\Form\SousMenuType;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use AppBundle\Repository\SousMenuRepository;

class CollectionAdminController extends Controller
{
    /**
     * @var CollectionRepository
     */
    private $collectionRepository;

    /**
     * @var SousMenuRepository
     */
    private $sousMenuRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        CollectionRepository $collectionRepository,
        SousMenuRepository $sousMenuRepository,
        EntityManager $em
    ) {
        $this->collectionRepository = $collectionRepository;
        $this->sousMenuRepository = $sousMenuRepository;
        $this->em = $em;
    }

    /**
     * @Route("/collection", name="admin_collection")
     *
     * @return View
     */
    public function indexCollectionAction()
    {
        $collections = $this->collectionRepository->findAll();
        return $this->render(
            'admin/collection/collection.html.twig',
            ['collections' => $collections]
        );
    }

    /**
     * @Route(
     *  "/manageCollection/{id}",
     *  name="admin_add_collection",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function addCollectionAction(Request $request, $id)
    {
        if ($id !== null) {
            $collection = $this->collectionRepository->findOneById($id);
            $image = $collection->getImage();
        } else {
            $collection = new Collection();
        }

        $form = $this->createForm(CollectionType::class, $collection);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();
                $uploadFile = $data->getImage();

                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'col_' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $collection->setImage($name);
                } else {
                    if (isset($image)) {
                        $collection->setImage($image);
                    }
                }

                $this->em->persist($collection);
                $this->em->flush();
                return $this->redirectToRoute('admin_collection');
            }
        }

        return $this->render(
            'admin/collection/ajouter_collection.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route(
     *  "/sousMenu/{idCollection}", name="admin_sous_menu",
     *  requirements={"idCollection" = "^\d+"},
     *  defaults={"idCollection" = null}
     * )
     * @return View
     */
    public function indexSubMenuAction($idCollection)
    {
        if ($idCollection !== null) {
            $sousMenu = $this->sousMenuRepository->findBy(
                ['idCollection' => $idCollection],
                ['idCollection' => 'ASC']
            );
        } else {
            $sousMenu = $this->sousMenuRepository->findAll();
        }

        return $this->render(
            'admin/collection/sous_menu.html.twig',
            ['sousMenu' => $sousMenu]
        );
    }

    /**
     * @Route(
     *  "/manageSousMenuCollection/{id}", name="admin_add_sous_menu",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     * @return View
     */
    public function addOrEditSubMenuAction(Request $request, $id)
    {
        if ($id !== null) {
            $sousMenu = $this->sousMenuRepository->findOneById($id);
            $icone = $sousMenu->getIcone();
            $image = $sousMenu->getImage();
        } else {
            $sousMenu = new SousMenu();
        }

        $form = $this->createForm(SousMenuType::class, $sousMenu);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();
                $uploadFile = $data->getImage();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'sm_' . time() . '_' . $nameOriginalFile;

                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );

                    $sousMenu->setImage($name);
                } else {
                    if (isset($image)) {
                        $sousMenu->setImage($image);
                    }
                }

                $uploadFile1 = $data->getIcone();
                if ($uploadFile1) {
                    $uploadFileIcone = $uploadFile1->getClientOriginalName();
                    $nameIcone = 'sm_' . time() . '_' . $uploadFileIcone;
                    $uploadFile1->move(
                        $this->getParameter('uploadDirectory'),
                        $nameIcone
                    );
                    $sousMenu->setIcone($nameIcone);
                } else {
                    if (isset($icone)) {
                        $sousMenu->setIcone($icone);
                    }
                }

                $this->em->persist($sousMenu);
                $this->em->flush();
                return $this->redirectToRoute('admin_sous_menu');
            }
        }

        return $this->render(
            'admin/collection/ajouter_sous_menu.html.twig',
            ['form' => $form->createView()]
        );
    }
}
