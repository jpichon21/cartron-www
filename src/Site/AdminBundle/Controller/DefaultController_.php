<?php

namespace Site\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\CartronBundle\Entity\HomePage;
use Site\CartronBundle\Entity\VideoHp;
use Site\CartronBundle\Entity\Collection;
use Site\CartronBundle\Entity\SousMenu;
use Site\CartronBundle\Entity\Degustation;
use Site\CartronBundle\Entity\SousMenuDegustation;
use Site\CartronBundle\Entity\Produits;
use Site\CartronBundle\Entity\SousMenuProduits;
use Site\CartronBundle\Entity\DegustationPro;
use Site\CartronBundle\Entity\PageMenu;
use Site\CartronBundle\Entity\Pays;
use Site\CartronBundle\Form\VideoHpType;
use Site\CartronBundle\Form\HomePageType;
use Site\CartronBundle\Form\CollectionType;
use Site\CartronBundle\Form\SousMenuType;
use Site\CartronBundle\Form\DegustationType;
use Site\CartronBundle\Form\SousMenuDegustationType;
use Site\CartronBundle\Form\ProduitsType;
use Site\CartronBundle\Form\DegustationProType;
use Site\CartronBundle\Form\SousMenuProduitsType;
use Site\CartronBundle\Form\PageMenuType;
use Site\CartronBundle\Form\PaysType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultController extends Controller {

    public function loginAction(Request $request) {

        $error = 'n';
        if ($request->isMethod('POST')) {

            $identification = strtolower($request->request->get('identification'));
            $password = strtolower($request->request->get('password'));

            $em = $this->getDoctrine()->getEntityManager();
            $user = $em->getRepository('SiteCartronBundle:User')->findBy(array('email' => $identification, 'password' => $password));
            if (count($user)) {
                if ($user[0]->getProfil() == 'admin') {
                    $this->get('session')->set('auth_admin', true);
                    $this->get('session')->set('name', $user[0]->getPrenom() . ' ' . $user[0]->getNom());
                    return $this->redirect($this->generateUrl('site_admin_homepage'));
                }
            }
            else
                $error = 'y';
        }
        return $this->render('SiteAdminBundle:Default:login.html.twig', array('error' => $error));
    }

    public function logoutAction(Request $request) {
        $this->get('session')->set('auth_admin', false);
        $this->get('session')->set('name', false);
        return $this->redirect($this->generateUrl('login'));
    }

    public function indexAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        $articles = $em->getRepository('SiteCartronBundle:HomePage')->findAll();
        return $this->render('SiteAdminBundle:Default:index.html.twig', array('articles' => $articles));
    }

    public function ajouterArticleAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id)) {
            $homePage = $em->find('SiteCartronBundle:HomePage', $id);
            $image = $homePage->getImage();
        }
        else
            $homePage = new HomePage();

        $form = $this->get('form.factory')->create(new HomePageType(), $homePage);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $uploadFile = $form['image']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'hp_' . time() . '_' . $nameOriginalFile;
                    $homePage->setImage($name);
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                }
                else
                    $homePage->setImage($image);

                $em->persist($homePage);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_homepage'));
            }
        }

        return $this->render('SiteAdminBundle:Default:hp_ajouter_article.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function ajouterVideoHpAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id))
            $homePage = $em->find('SiteCartronBundle:VideoHp', $id);
        else
            $homePage = new VideoHp();
        $form = $this->get('form.factory')->create(new VideoHpType(), $homePage);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($homePage);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_homepage'));
            }
//             else {
//                print_r($form->getErrors());
//                die();
//            }
        }

        return $this->render('SiteAdminBundle:Default:hp_ajouter_video.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* debut gestion collection ******** */

    public function collectionAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        $collections = $em->getRepository('SiteCartronBundle:Collection')->findAll();
        return $this->render('SiteAdminBundle:Default:collection.html.twig', array('collections' => $collections));
    }

    public function ajouterCollectionAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id)) {
            $collection = $em->find('SiteCartronBundle:Collection', $id);
            $image = $collection->getImage();
        }
        else
            $collection = new Collection();
        $form = $this->get('form.factory')->create(new CollectionType(), $collection);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {

                $uploadFile = $form['image']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'col_' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $collection->setImage($name);
                }
                else
                    $collection->setImage($image);

                $em->persist($collection);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_collection'));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_collection.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* fin gestion collection ******** */

        /*     * ******* debut gestion pays ******** */

    public function paysAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        $pays = $em->getRepository('SiteCartronBundle:Pays')->findAll();
        return $this->render('SiteAdminBundle:Default:pays.html.twig', array('pays' => $pays));
    }

    public function ajouterPaysAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id)) {
            $pays = $em->find('SiteCartronBundle:Pays', $id);
        }
        else
            $pays = new Pays();
        
        $form = $this->get('form.factory')->create(new PaysType(), $pays);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {

                $em->persist($pays);
                $em->flush();
                return $this->redirect($this->generateUrl('listes_pays'));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_pays.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* fin gestion pays ******** */
    
    /*     * ******* debut gestion sous_menu ******** */

    public function sousMenuAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        //$sousMenu = $em->getRepository('SiteCartronBundle:SousMenu')->findAll();
        $id = $request->query->get('id');
        if (isset($id))
            $sousMenu = $em->getRepository('SiteCartronBundle:SousMenu')->findBy(array('idCollection' => $id));
        else
            $sousMenu = $em->getRepository('SiteCartronBundle:SousMenu')->findAll();

        return $this->render('SiteAdminBundle:Default:sous_menu.html.twig', array('sousMenu' => $sousMenu));
    }

    public function ajouterSousMenuAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id)) {
            $sousMenu = $em->find('SiteCartronBundle:SousMenu', $id);
            $icone = $sousMenu->getIcone();
            $image = $sousMenu->getImage();
        }
        else
            $sousMenu = new SousMenu();

        $form = $this->get('form.factory')->create(new SousMenuType(), $sousMenu);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {

                $uploadFile = $form['image']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'sm_' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $sousMenu->setImage($name);
                }
                else
                    $sousMenu->setImage($image);

                $uploadFile1 = $form['icone']->getData();
                if ($uploadFile1) {
                    $uploadFileIcone = $uploadFile1->getClientOriginalName();
                    $nameIcone = 'sm_' . time() . '_' . $uploadFileIcone;
                    $uploadFile1->move(__DIR__ . '/../../../../web/upload', $nameIcone);
                    $sousMenu->setIcone($nameIcone);
                }
                else
                    $sousMenu->setIcone($icone);

                $em->persist($sousMenu);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_sous_menu'));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_sous_menu.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* fin gestion sous_menu ******** */

    /*     * ******* debut gestion degustation ******** */

    public function degustationAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        $degustation = $em->getRepository('SiteCartronBundle:Degustation')->findAll();
        return $this->render('SiteAdminBundle:Default:degustation.html.twig', array('degustations' => $degustation));
    }

    public function ajouterDegustationAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id))
            $degustation = $em->find('SiteCartronBundle:Degustation', $id);
        else
            $degustation = new Degustation();
        $form = $this->get('form.factory')->create(new DegustationType(), $degustation);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($degustation);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_degustation'));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_degustation.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* fin gestion degustation ******** */

    /*     * ******* debut gestion sous menu degustation ******** */

    public function sousMenuDegustationAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        $id = $request->query->get('id');
        if (isset($id))
            $sousMenuDegustation = $em->getRepository('SiteCartronBundle:SousMenuDegustation')->findBy(array('idDegustation' => $id));
        else
            $sousMenuDegustation = $em->getRepository('SiteCartronBundle:SousMenuDegustation')->findAll();

        return $this->render('SiteAdminBundle:Default:sous_menu_degustation.html.twig', array('sousMenuDegustation' => $sousMenuDegustation));
    }

    public function ajouterSousMenuDegustationAction(Request $request) {


        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id)){
            $sousMenuDegustation = $em->find('SiteCartronBundle:SousMenuDegustation', $id);
            $image = $sousMenuDegustation->getImage();
        }
        else
            $sousMenuDegustation = new SousMenuDegustation();

        $form = $this->get('form.factory')->create(new SousMenuDegustationType(), $sousMenuDegustation);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {

                $uploadFile = $form['image']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'sm_' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $sousMenuDegustation->setImage($name);
                }
                else
                    $sousMenuDegustation->setImage($image);
                
                $em->persist($sousMenuDegustation);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_sous_menu_degustation'));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_sous_menu_degustation.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* fin gestion sous menu degustation ******** */

    /*     * ******* debut gestion Produit pro ******** */

    public function ProduitAction(Request $request, $id, $type) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        if ($type == 'produit')
            $produits = $em->getRepository('SiteCartronBundle:Produits')->findBy(array('idSousMenu' => $id));
        else
            $produits = $em->getRepository('SiteCartronBundle:Produits')->findBy(array('idDegustation' => $id));

        return $this->render('SiteAdminBundle:Default:produit.html.twig', array('produits' => $produits, 'type' => $type, 'idc' => $id));
    }

    public function DegustationProAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $produits = $em->getRepository('SiteCartronBundle:DegustationPro')->findAll();
        return $this->render('SiteAdminBundle:Default:degustation_pro.html.twig', array('produits' => $produits));
    }

    public function SousMenuProduitAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        $produits = $em->getRepository('SiteCartronBundle:SousMenuProduits')->findAll();
        return $this->render('SiteAdminBundle:Default:degustation_pro.html.twig', array('produits' => $produits));
    }

    public function ajouterProduitAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id)) {
            $produit = $em->find('SiteCartronBundle:Produits', $id);
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
        }
        else
            $produit = new Produits();

        $form = $this->get('form.factory')->create(new ProduitsType(), $produit);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {

                $uploadFile = $form['image']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setImage($name);
                }
                else
                    $produit->setImage($image);


                $uploadFile = $form['ficheProduitFr']->getData();
                if ($uploadFile) {

                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setFicheProduitFr($name);
                }
                else
                    $produit->setFicheProduitFr($ficheProduitFr);

                $uploadFile = $form['ficheProduitEn']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setFicheProduitEn($name);
                }
                else
                    $produit->setFicheProduitEn($ficheProduitEn);

                $uploadFile = $form['packshotJpgFr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setPackshotJpgFr($name);
                }
                else
                    $produit->setPackshotJpgFr($packshotJpgFr);

                $uploadFile = $form['packshotJpgEn']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setPackshotJpgEn($name);
                }
                else
                    $produit->setPackshotJpgEn($packshotJpgEn);

                $uploadFile = $form['packshotPdfEn']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setPackshotPdfEn($name);
                }
                else
                    $produit->setPackshotPdfEn($packshotPdfEn);

                $uploadFile = $form['packshotPdfFr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setPackshotPdfFr($name);
                }
                else
                    $produit->setPackshotPdfFr($packshotPdfFr);

                $uploadFile = $form['packshotEpsFr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setPackshotEpsFr($name);
                }
                else
                    $produit->setPackshotEpsFr($packshotEpsFr);

                $uploadFile = $form['packshotEpsEn']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setPackshotEpsEn($name);
                }
                else
                    $produit->setPackshotEpsEn($packshotEpsEn);

                $uploadFile = $form['ficheLogistiqueFr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setFicheLogistiqueFr($name);
                }
                else
                    $produit->setFicheLogistiqueFr($ficheLogistiqueFr);

                $uploadFile = $form['ficheLogistiqueEn']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setFicheLogistiqueEn($name);
                }
                else
                    $produit->setFicheLogistiqueEn($ficheLogistiqueEn);

                $uploadFile = $form['medailles1En']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setMedailles1En($name);
                }
                else
                    $produit->setMedailles1En($medailles1En);

                $uploadFile = $form['medailles1Fr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setMedailles1Fr($name);
                }
                else
                    $produit->setMedailles1Fr($medailles1Fr);

                $uploadFile = $form['medailles2Fr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setMedailles2Fr($name);
                }
                else
                    $produit->setMedailles2Fr($medailles2Fr);

                $uploadFile = $form['medailles2En']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setMedailles2En($name);
                }
                else
                    $produit->setMedailles2En($medailles2En);

                $uploadFile = $form['medailles3En']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setMedailles3En($name);
                }
                else
                    $produit->setMedailles3En($medailles3En);

                $uploadFile = $form['medailles3Fr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setMedailles3Fr($name);
                }
                else
                    $produit->setMedailles3Fr($medailles3Fr);

                $uploadFile = $form['medailles4En']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setMedailles4En($name);
                }
                else
                    $produit->setMedailles4En($medailles4En);

                $uploadFile = $form['medailles4Fr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setMedailles4Fr($name);
                }
                else
                    $produit->setMedailles4Fr($medailles4Fr);

                $uploadFile = $form['recetteFr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setRecetteFr($name);
                }
                else
                    $produit->setRecetteFr($recetteFr);

                $uploadFile = $form['recetteEn']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'espace_pro' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $produit->setRecetteEn($name);
                }
                else
                    $produit->setRecetteEn($recetteEn);

                $em->persist($produit);
                $em->flush();

                if ($produit->getIdSousMenu()) {
                    $id = $produit->getIdSousMenu()->getId();
                    $type = "produit";
                } else {
                    $id = $produit->getIdDegustation()->getId();
                    $type = "autres";
                }
                return $this->redirect($this->generateUrl('site_admin_produit_pro', array('id' => $id, 'type' => $type)));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_produit.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* fin gestion sous menu degustation ******** */

    public function ajouterSousMenuProduitAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id))
            $sousMenuProduit = $em->find('SiteCartronBundle:SousMenuProduits', $id);
        else
            $sousMenuProduit = new SousMenuProduits();

        $form = $this->get('form.factory')->create(new SousMenuProduitsType(), $sousMenuProduit);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($sousMenuProduit);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_sous_menu_produit_pro'));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_sous_menu_produit.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function ajouterSousMenuDegustationProAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id))
            $sousMenuDegustation = $em->find('SiteCartronBundle:DegustationPro', $id);
        else
            $sousMenuDegustation = new DegustationPro();

        $form = $this->get('form.factory')->create(new DegustationProType(), $sousMenuDegustation);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($sousMenuDegustation);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_degustation_pro'));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_sous_menu_degustation_pro.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* debut gestion collection ******** */

    public function autreMenuAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getEntityManager();
        $collections = $em->getRepository('SiteCartronBundle:PageMenu')->findAll();
        return $this->render('SiteAdminBundle:Default:menu.html.twig', array('produits' => $collections));
    }

    public function ajouterAutreMenuAction(Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');

        if (isset($id))
            $menu = $em->find('SiteCartronBundle:PageMenu', $id);
        else
            $menu = new PageMenu();
        $form = $this->get('form.factory')->create(new PageMenuType(), $menu);
        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {

                $uploadFile = $form['ficheFr']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'pro_fich' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $menu->setFicheFr($name);
                }

                $uploadFile = $form['ficheEn']->getData();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'pro_fich' . time() . '_' . $nameOriginalFile;
                    $uploadFile->move(__DIR__ . '/../../../../web/upload', $name);
                    $menu->setFicheEn($name);
                }
                $em->persist($menu);
                $em->flush();
                return $this->redirect($this->generateUrl('site_admin_menu_pro'));
            }
        }

        return $this->render('SiteAdminBundle:Default:ajouter_menu.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /*     * ******* fin gestion collection ******** */

    public function supprimerAction($table, $id, Request $request) {

        if (!$this->get('session')->get('auth_admin'))
            return $this->redirect($this->generateUrl('login'));

        //echo $table; die();
        $em = $this->getDoctrine()->getEntityManager();
        $tableBdd = $em->find('SiteCartronBundle:' . $table . '', $id);
        if (!$tableBdd) {
            throw new NotFoundHttpException($tableBdd . "non trouvé");
        }
        $em->remove($tableBdd);
        $em->flush();
        if ($table == 'HomePage')
            return $this->redirect($this->generateUrl('site_admin_homepage'));
        if ($table == 'VideoHp')
            return $this->redirect($this->generateUrl('site_admin_video_hp'));

        if ($table == 'Collection')
            return $this->redirect($this->generateUrl('site_admin_collection'));
        if ($table == 'SousMenu')
            return $this->redirect($this->generateUrl('site_admin_sous_menu'));
        if ($table == 'Degustation')
            return $this->redirect($this->generateUrl('site_admin_degustation'));
        if ($table == 'SousMenuDegustation')
            return $this->redirect($this->generateUrl('site_admin_sous_menu_degustation'));

        if ($table == 'DegustationPro')
            return $this->redirect($this->generateUrl('site_admin_degustation_pro'));

        if ($table == 'SousMenuProduits')
            return $this->redirect($this->generateUrl('site_admin_sous_menu_produit_pro'));

        if ($table == 'PageMenu')
            return $this->redirect($this->generateUrl('site_admin_menu_pro'));

        if ($table == 'Produits') {
            $type = $request->query->get('type');
            $id = $request->query->get('idc');

            return $this->redirect($this->generateUrl('site_admin_produit_pro', array('id' => $id, 'type' => $type)));
        }
        
         if ($table == 'Pays')
            return $this->redirect($this->generateUrl('listes_pays'));
    }

}
