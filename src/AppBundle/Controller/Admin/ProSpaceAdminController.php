<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\SousMenuProduitsRepository;
use AppBundle\Repository\DegustationProRepository;
use AppBundle\Repository\PageMenuRepository;
use AppBundle\Repository\ProduitsRepository;
use AppBundle\Entity\SousMenuProduits;
use AppBundle\Entity\DegustationPro;
use AppBundle\Entity\PageMenu;
use AppBundle\Entity\Produits;
use AppBundle\Form\DegustationProType;
use AppBundle\Form\SousMenuProduitsType;
use AppBundle\Form\ProduitsType;
use AppBundle\Form\PageMenuType;
use Doctrine\ORM\EntityManagerInterface as EntityManager;

class ProSpaceAdminController extends Controller
{
    /**
     * @var SousMenuProduitsRepository
     */
    private $sousMenuProduitsRepository;

    /**
     * @var DegustationProRepository
     */
    private $degustationProRepository;

    /**
     * @var PageMenuRepository
     */
    private $pageMenuRepository;

    /**
     * @var ProduitsRepository
     */
    private $produitsRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        SousMenuProduitsRepository $sousMenuProduitsRepository,
        DegustationProRepository $degustationProRepository,
        PageMenuRepository $pageMenuRepository,
        ProduitsRepository $produitsRepository,
        EntityManager $em
    ) {
        $this->sousMenuProduitsRepository = $sousMenuProduitsRepository;
        $this->degustationProRepository = $degustationProRepository;
        $this->pageMenuRepository = $pageMenuRepository;
        $this->produitsRepository = $produitsRepository;
        $this->em = $em;
    }

    /**
     * @Route("/espace_pro_sous_menu_produit", name="admin_sous_menu_produit_pro")
     *
     * @return View
     */
    public function sousMenuProduitAction()
    {
        $produits = $this->sousMenuProduitsRepository->findAll();
        return $this->render(
            'admin/prospace/degustation_pro.html.twig',
            ['produits' => $produits]
        );
    }

    /**
     * @Route("/espace_pro_degustation", name="admin_degustation_pro")
     *
     * @return View
     */
    public function degustationProAction()
    {
        $produits = $this->degustationProRepository->findAll();
        return $this->render(
            'admin/prospace/degustation_pro.html.twig',
            ['produits' => $produits]
        );
    }

    /**
     * @Route("/espace_pro_menu_pro", name="admin_menu_pro")
     *
     * @return View
     */
    public function autreMenuAction()
    {
        $collections = $this->pageMenuRepository->findAll();
        return $this->render(
            'admin/prospace/menu.html.twig',
            ['produits' => $collections]
        );
    }

    /**
     * @Route(
     *  "/espace_pro_manage_sous_menu_degustation_pro/{id}",
     *  name="admin_manage_sous_menu_degustation_pro",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function ajouterSousMenuDegustationProAction(Request $request, $id)
    {

        if ($id !== null) {
            $sousMenuDegustation = $this->degustationProRepository->findOneById($id);
        } else {
            $sousMenuDegustation = new DegustationPro();
        }

        $form = $this->createForm(DegustationProType::class, $sousMenuDegustation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $this->em->persist($sousMenuDegustation);
                $this->em->flush();
                return $this->redirectToRoute('admin_degustation_pro');
            }
        }

        return $this->render(
            'admin/prospace/ajouter_sous_menu_degustation_pro.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route(
     *  "/espace_pro_manage_sous_menu_produit/{id}",
     *  name="admin_manage_sous_menu_produit_pro",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function ajouterSousMenuProduitAction(Request $request, $id)
    {
        if ($id !== null) {
            $sousMenuProduit = $this->sousMenuProduitsRepository->findOneById($id);
        } else {
            $sousMenuProduit = new SousMenuProduits();
        }

        $form = $this->createForm(SousMenuProduitsType::class, $sousMenuProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $this->em->persist($sousMenuProduit);
                $this->em->flush();
                return $this->redirectToRoute('admin_sous_menu_produit_pro');
            }
        }

        return $this->render(
            'admin/prospace/ajouter_sous_menu_produit.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/{id}/{type}/espace_pro_produits", name="admin_produit_pro")
     *
     * @return View
     */
    public function produitAction($id, $type)
    {
        if ($type == 'produit') {
            $produits = $this->produitsRepository->findBy(['idSousMenu' => $id]);
        } else {
            $produits = $this->produitsRepository->findBy(['idDegustation' => $id]);
        }

        return $this->render(
            'admin/prospace/produit.html.twig',
            [
                'produits' => $produits,
                'type' => $type,
                'idc' => $id
            ]
        );
    }

    /**
     * @Route(
     *  "/espace_pro_manageProduits/{id}",
     *  name="admin_manage_produits_pro",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     * @Route(
     *  "/espace_pro_manageDegustation/{id}",
     *  name="admin_manage_degustation_pro",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function ajouterProduitAction(Request $request, $id)
    {
        if ($id !== null) {
            $produit = $this->produitsRepository->findOneById($id);

            $image = $produit->getImage();

            $ficheProduitFr = $produit->getFicheProduitFr();
            $ficheProduitEn = $produit->getFicheProduitEn();

            $packshotJpgFr = $produit->getPackshotJpgFr();
            $packshotJpgEn = $produit->getPackshotJpgEn();
            $packshotPdfEn = $produit->getPackshotPdfEn();
            $packshotPdfFr = $produit->getPackshotPdfFr();
            $packshotEpsFr = $produit->getPackshotEpsFr();
            $packshotEpsEn = $produit->getPackshotEpsEn();

            $ficheLogistiqueFr = $produit->getFicheLogistiqueFr();
            $ficheLogistiqueEn = $produit->getFicheLogistiqueEn();

            $medailles1En = $produit->getMedailles1En();
            $medailles1Fr = $produit->getMedailles1Fr();
            $medailles2En = $produit->getMedailles2En();
            $medailles2Fr = $produit->getMedailles2Fr();
            $medailles3En = $produit->getMedailles3En();
            $medailles3Fr = $produit->getMedailles3Fr();
            $medailles4En = $produit->getMedailles4En();
            $medailles4Fr = $produit->getMedailles4Fr();

            $recetteFr = $produit->getRecetteFr();
            $recetteEn = $produit->getRecetteEn();
        } else {
            $produit = new Produits();
        }

        $form = $this->createForm(ProduitsType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();
                $uploadFile = $data->getImage();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setImage($name);
                } else {
                    if (isset($image)) {
                        $produit->setImage($image);
                    }
                }

                $uploadFile = $data->getFicheProduitFr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setFicheProduitFr($name);
                } else {
                    if (isset($ficheProduitFr)) {
                        $produit->setFicheProduitFr($ficheProduitFr);
                    }
                }

                $uploadFile = $data->getFicheProduitEn();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setFicheProduitEn($name);
                } else {
                    if (isset($ficheProduitEn)) {
                        $produit->setFicheProduitEn($ficheProduitEn);
                    }
                }

                $uploadFile = $data->getPackshotJpgFr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setPackshotJpgFr($name);
                } else {
                    if (isset($packshotJpgFr)) {
                        $produit->setPackshotJpgFr($packshotJpgFr);
                    }
                }

                $uploadFile = $data->getPackshotJpgEn();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setPackshotJpgEn($name);
                } else {
                    if (isset($packshotJpgEn)) {
                        $produit->setPackshotJpgEn($packshotJpgEn);
                    }
                }

                $uploadFile = $data->getPackshotPdfEn();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setPackshotPdfEn($name);
                } else {
                    if (isset($packshotPdfEn)) {
                        $produit->setPackshotPdfEn($packshotPdfEn);
                    }
                }

                $uploadFile = $data->getPackshotPdfFr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setPackshotPdfFr($name);
                } else {
                    if (isset($packshotPdfFr)) {
                        $produit->setPackshotPdfFr($packshotPdfFr);
                    }
                }

                $uploadFile = $data->getPackshotEpsFr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setPackshotEpsFr($name);
                } else {
                    if (isset($packshotEpsFr)) {
                        $produit->setPackshotEpsFr($packshotEpsFr);
                    }
                }

                $uploadFile = $data->getPackshotEpsEn();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setPackshotEpsEn($name);
                } else {
                    if (isset($packshotEpsEn)) {
                        $produit->setPackshotEpsEn($packshotEpsEn);
                    }
                }

                $uploadFile = $data->getFicheLogistiqueFr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setFicheLogistiqueFr($name);
                } else {
                    if (isset($ficheLogistiqueFr)) {
                        $produit->setFicheLogistiqueFr($ficheLogistiqueFr);
                    }
                }

                $uploadFile = $data->getFicheLogistiqueEn();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setFicheLogistiqueEn($name);
                } else {
                    if (isset($ficheLogistiqueEn)) {
                        $produit->setFicheLogistiqueEn($ficheLogistiqueEn);
                    }
                }

                $uploadFile = $data->getMedailles1En();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setMedailles1En($name);
                } else {
                    if (isset($medailles1En)) {
                        $produit->setMedailles1En($medailles1En);
                    }
                }

                $uploadFile = $data->getMedailles1Fr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setMedailles1Fr($name);
                } else {
                    if (isset($medailles1Fr)) {
                        $produit->setMedailles1Fr($medailles1Fr);
                    }
                }

                $uploadFile = $data->getMedailles2Fr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setMedailles2Fr($name);
                } else {
                    if (isset($medailles2Fr)) {
                        $produit->setMedailles2Fr($medailles2Fr);
                    }
                }

                $uploadFile = $data->getMedailles2En();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setMedailles2En($name);
                } else {
                    if (isset($medailles2En)) {
                        $produit->setMedailles2En($medailles2En);
                    }
                }

                $uploadFile = $data->getMedailles3En();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setMedailles3En($name);
                } else {
                    if (isset($medailles3En)) {
                        $produit->setMedailles3En($medailles3En);
                    }
                }

                $uploadFile = $data->getMedailles3Fr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setMedailles3Fr($name);
                } else {
                    if (isset($medailles3Fr)) {
                        $produit->setMedailles3Fr($medailles3Fr);
                    }
                }

                $uploadFile = $data->getMedailles4En();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setMedailles4En($name);
                } else {
                    if (isset($medailles4En)) {
                        $produit->setMedailles4En($medailles4En);
                    }
                }

                $uploadFile = $data->getMedailles4Fr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setMedailles4Fr($name);
                } else {
                    if (isset($medailles4Fr)) {
                        $produit->setMedailles4Fr($medailles4Fr);
                    }
                }

                $uploadFile = $data->getRecetteFr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setRecetteFr($name);
                } else {
                    if (isset($recetteFr)) {
                        $produit->setRecetteFr($recetteFr);
                    }
                }

                $uploadFile = $data->getRecetteEn();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $produit->setRecetteEn($name);
                } else {
                    if (isset($recetteEn)) {
                        $produit->setRecetteEn($recetteEn);
                    }
                }

                $this->em->persist($produit);
                $this->em->flush();

                if ($produit->getIdSousMenu()) {
                    $id = $produit->getIdSousMenu()->getId();
                    $type = "produit";
                } else {
                    $id = $produit->getIdDegustation()->getId();
                    $type = "autres";
                }
                return $this->redirectToRoute('admin_produit_pro', ['id' => $id, 'type' => $type]);
            }
        }

        return $this->render(
            'admin/prospace/ajouter_produit.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route(
     *  "/espace_pro_manage_menu_pro/{id}",
     *  name="admin_manage_menu_pro",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function ajouterAutreMenuAction(Request $request, $id)
    {
        if ($id !== null) {
            $menu = $this->pageMenuRepository->findOneById($id);
        } else {
            $menu = new PageMenu();
        }

        $form = $this->createForm(PageMenuType::class, $menu);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();
                $uploadFile = $data->getFicheFr();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'pro_fich' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $menu->setFicheFr($name);
                }
                $uploadFile = $data->getFicheEn();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'pro_fich' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                    $menu->setFicheEn($name);
                }
                $this->em->persist($menu);
                $this->em->flush();
                return $this->redirectToRoute('admin_menu_pro');
            }
        }

        return $this->render(
            'admin/prospace/ajouter_menu.html.twig',
            ['form' => $form->createView()]
        );
    }
}
