<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\DegustationRepository;
use AppBundle\Repository\SousMenuDegustationRepository;
use AppBundle\Entity\Degustation;
use AppBundle\Entity\SousMenuDegustation;
use AppBundle\Form\DegustationType;
use AppBundle\Form\SousMenuDegustationType;
use Doctrine\ORM\EntityManagerInterface as EntityManager;

class DegustationAdminController extends Controller
{
    /**
     * @var DegustationRepository
     */
    private $degustationRepository;

    /**
     * @var SousMenuDegustationRepository
     */
    private $sousMenuDegustationRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        DegustationRepository $degustationRepository,
        SousMenuDegustationRepository $sousMenuDegustationRepository,
        EntityManager $em
    ) {
        $this->degustationRepository = $degustationRepository;
        $this->sousMenuDegustationRepository = $sousMenuDegustationRepository;
        $this->em = $em;
    }

    /**
     * @Route("/degustation", name="admin_degustation")
     *
     * @return View
     */
    public function indexDegustationAction()
    {
        $degustations = $this->degustationRepository->findAll();
        return $this->render(
            'admin/degustation/degustation.html.twig',
            ['degustations' => $degustations]
        );
    }

    /**
     * @Route(
     *  "/manageDegustation/{id}",
     *  name="admin_add_degustation",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function ajouterDegustationAction(Request $request, $id)
    {
        if ($id !== null) {
            $degustation = $this->degustationRepository->findOneById($id);
        } else {
            $degustation = new Degustation();
        }

        $form = $this->createForm(DegustationType::class, $degustation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $this->em->persist($degustation);
                $this->em->flush();
                return $this->redirectToRoute('admin_degustation');
            }
        }

        return $this->render(
            'admin/degustation/ajouter_degustation.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route(
     *  "/sousMenuDegustation/{id}",
     *  name="admin_sous_menu_degustation",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function sousMenuDegustationAction($id)
    {
        if ($id !== null) {
            $sousMenuDegustation = $this->sousMenuDegustationRepository->findBy(['idDegustation' => $id]);
        } else {
            $sousMenuDegustation = $this->sousMenuDegustationRepository->findAll();
        }

        return $this->render(
            'admin/degustation/sous_menu_degustation.html.twig',
            ['sousMenuDegustation' => $sousMenuDegustation]
        );
    }

    /**
     * @Route(
     *  "/manageSousMenuDegustation/{id}",
     *  name="admin_add_sous_menu_degustation",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function ajouterSousMenuDegustationAction(Request $request, $id)
    {
        if ($id !== null) {
            $sousMenuDegustation = $this->sousMenuDegustationRepository->findOneById($id);
            $image = $sousMenuDegustation->getImage();
        } else {
            $sousMenuDegustation = new SousMenuDegustation();
        }

        $form = $this->createForm(SousMenuDegustationType::class, $sousMenuDegustation);
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
                    $sousMenuDegustation->setImage($name);
                } else {
                    if (isset($image)) {
                        $sousMenuDegustation->setImage($image);
                    }
                }
                
                $this->em->persist($sousMenuDegustation);
                $this->em->flush();
                return $this->redirectToRoute('admin_sous_menu_degustation');
            }
        }

        return $this->render(
            'admin/degustation/ajouter_sous_menu_degustation.html.twig',
            ['form' => $form->createView()]
        );
    }
}
