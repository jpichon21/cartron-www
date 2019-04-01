<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\PaysRepository;
use AppBundle\Entity\Pays;
use AppBundle\Form\PaysType;
use Doctrine\ORM\EntityManagerInterface as EntityManager;

class PaysAdminController extends Controller
{
    /**
     * @var PaysRepository
     */
    private $paysRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        PaysRepository $paysRepository,
        EntityManager $em
    ) {
        $this->paysRepository = $paysRepository;
        $this->em = $em;
    }

    /**
     * @Route("/pays", name="liste_pays")
     *
     * @return View
     */
    public function indexPaysAction()
    {
        $pays = $this->paysRepository->findAll();
        return $this->render(
            'admin/pays/pays.html.twig',
            ['pays' => $pays]
        );
    }

    /**
     * @Route(
     *  "/managePays/{id}",
     *  name="add_pays",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function ajouterPaysAction(Request $request, $id)
    {
        if ($id !== null) {
            $pays = $this->paysRepository->findOneById($id);
        } else {
            $pays = new Pays();
        }
        $form = $this->createForm(PaysType::class, $pays);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $this->em->persist($pays);
                $this->em->flush();
                return $this->redirectToRoute('liste_pays');
            }
        }

        return $this->render(
            'admin/pays/ajouter_pays.html.twig',
            ['form' => $form->createView()]
        );
    }
}
