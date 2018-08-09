<?php

namespace Site\CartronBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use \ZipArchive;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        if (!$this->get('session')->get('firstConnexion'))
            return $this->redirect($this->generateUrl('site_cartron_first_connexion'));
        $request->setLocale($this->get('session')->get('_locale'));

        $em = $this->getDoctrine()->getEntityManager();
        $articles = $em->getRepository('SiteCartronBundle:HomePage')->findAll();
        $video = $em->getRepository('SiteCartronBundle:VideoHp')->findAll();
        return $this->render('SiteCartronBundle:Default:index.html.twig', array('articles' => $articles, 'video' => $video));
    }

    public function collectionAction(Request $request) {
        if (!$this->get('session')->get('firstConnexion'))
            return $this->redirect($this->generateUrl('site_cartron_first_connexion'));
        $request->setLocale($this->get('session')->get('_locale'));

        $em = $this->getDoctrine()->getEntityManager();
        $articles = $em->getRepository('SiteCartronBundle:Collection')->findAll();
        $sousMenu = $em->getRepository('SiteCartronBundle:SousMenu')->findAll();
        return $this->render('SiteCartronBundle:Default:collection.html.twig', array('sousMenu' => $sousMenu, 'collections' => $articles));
    }

    public function collectionProduitAction($id, Request $request) {
        if (!$this->get('session')->get('firstConnexion'))
            return $this->redirect($this->generateUrl('site_cartron_first_connexion'));
        $request->setLocale($this->get('session')->get('_locale'));

        $em = $this->getDoctrine()->getEntityManager();
        $articles = $em->getRepository('SiteCartronBundle:Collection')->findAll();
        $articleDefault = $em->getRepository('SiteCartronBundle:SousMenu')->find($id);
        $idCollection = $articleDefault->getIdCollection()->getId();
        $sousMenu = $em->getRepository('SiteCartronBundle:SousMenu')->findBy(array('idCollection' => $idCollection));

        return $this->render('SiteCartronBundle:Default:collection_produit.html.twig', array('sousMenu' => $sousMenu, 'articleDefault' => $articleDefault, 'collections' => $articles));
    }

    public function degustationAction(Request $request) {
        if (!$this->get('session')->get('firstConnexion'))
            return $this->redirect($this->generateUrl('site_cartron_first_connexion'));
        $request->setLocale($this->get('session')->get('_locale'));

        $em = $this->getDoctrine()->getEntityManager();
        $degustation = $em->getRepository('SiteCartronBundle:Degustation')->findAll();
        $sousMenu = $em->getRepository('SiteCartronBundle:SousMenuDegustation')->findAll();
        return $this->render('SiteCartronBundle:Default:degustation.html.twig', array('sousMenu' => $sousMenu, 'degustation' => $degustation));
    }

    public function degustationProduitAction(Request $request, $id) {
        if (!$this->get('session')->get('firstConnexion'))
            return $this->redirect($this->generateUrl('site_cartron_first_connexion'));
        $request->setLocale($this->get('session')->get('_locale'));

        $em = $this->getDoctrine()->getEntityManager();

        $degustation = $em->getRepository('SiteCartronBundle:Degustation')->findBy(array(), array('titre'.ucfirst($this->get('session')->get('_locale')) => 'desc'));
        $articleDefault = $em->getRepository('SiteCartronBundle:SousMenuDegustation')->find($id);
        $idDegustation = $articleDefault->getIdDegustation()->getId();
        $sousMenu = $em->getRepository('SiteCartronBundle:SousMenuDegustation')->findAll();
        $article = $em->getRepository('SiteCartronBundle:SousMenuDegustation')->findBy(array('idDegustation' => $idDegustation));

		die();

        return $this->render('SiteCartronBundle:Default:degustation_produit.html.twig', array('sousMenu' => $sousMenu, 'degustation' => $degustation, 'articleDefault' => $articleDefault, 'article' => $article));
    }

    public function firstConnexionAction(Request $request) {

        if (!$this->get('session')->get('_locale'))
            $this->get('session')->set('_locale', 'fr');

        $request->setLocale($this->get('session')->get('_locale'));

        $form = $this->createFormBuilder()
                ->add('dateNaissance', 'date', array(
                    'years' => range(1920, date('Y')),
                    'label' => 'Date de naissance'
                ))
                ->add('pays', 'entity', array(
                    'label' => 'Pays',
                    'class' => 'Site\CartronBundle\Entity\Pays',
                    'empty_value' => 'Selectionnez votre pays',
                    'property' => 'Pays',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false
                ))
                ->add('sesevenire', 'checkbox', array(
                    'label' => 'Se sevenire',
                    'required' => false,
                ))
                ->getForm();

        if ($request->isMethod('POST')) {
            $this->get('session')->set('firstConnexion', true);
            return $this->redirect($this->generateUrl('site_cartron_homepage'));
            $form->bindRequest($request);
            $formData = $request->request->get('form');
            $dateNaissance = $formData['dateNaissance'];
            $date = $dateNaissance['month'] . '-' . $dateNaissance['day'] . '-' . $dateNaissance['year'];
            $pays = $formData['pays'];
            if ($date and $pays) {
                $this->get('session')->set('firstConnexion', true);
                return $this->redirect($this->generateUrl('site_cartron_homepage'));
            } else {
                $this->get('session')->set('firstConnexion', false);
            }
        }



        return $this->render('SiteCartronBundle:Default:premier_connexion.html.twig', array('form' => $form->createView()));
    }

    public function pageStatiqueAction($page, Request $request) {
        if (!$this->get('session')->get('firstConnexion'))
            return $this->redirect($this->generateUrl('site_cartron_first_connexion'));
        $request->setLocale($this->get('session')->get('_locale'));


        return $this->render('SiteCartronBundle:Statique:index.html.twig', array('page' => $page));
    }

    public function getNewsAction(Request $request) {
        if (!$this->get('session')->get('firstConnexion'))
            return $this->redirect($this->generateUrl('site_cartron_first_connexion'));

        $idNews = $request->request->get('id');
        $em = $this->getDoctrine()->getEntityManager();
        $articles = $em->getRepository('SiteCartronBundle:HomePage')->find($idNews);

        return $this->render('SiteCartronBundle:Default:getNews.html.twig', array('articles' => $articles));
    }

    public function creerCompteAction(Request $request) {

        if ($this->get('session')->get('auth'))
            return $this->redirect($this->generateUrl('site_cartron_hp_pro'));

        if ($request->isMethod('POST')) {
            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $email = strtolower($request->request->get('email'));
            $profil = $request->request->get('profil');
            $societe = $request->request->get('societe');
            $message = $request->request->get('message');

            $user = new \Site\CartronBundle\Entity\User();
            $user->setNom($nom);
            $user->setPrenom($prenom);
            $user->setProfil($profil);
            $user->setEmail($email);
            $user->setMessage($message);
            $user->setSociete($societe);




            $password = "";
            $chaine = "abcdefghijklmnpqrstuvwxy";
            srand((double) microtime() * 1000000);
            for ($i = 0; $i < 10; $i++) {
                $password .= $chaine[rand() % strlen($chaine)];
            }

            $message = 'Voici votre identifiant cartron ' . 'email = ' . $email . ' et ' . 'mot de passe = ' . $password;
            mail($email, 'Votre identifiants cartron', $message);

            $user->setPassword($password);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($user);
            $em->flush();
            $save = 'yes';
        }
        else
            $save = 'no';


        return $this->render('SiteCartronBundle:Default:new_compte.html.twig', array('save' => $save));
    }

    public function contactAction(Request $request) {

        if (!$this->get('session')->get('firstConnexion'))
            return $this->redirect($this->generateUrl('site_cartron_first_connexion'));

        if ($request->isMethod('POST')) {
            
            $nom = $request->request->get('nom');
            $prenom = $request->request->get('prenom');
            $email = strtolower($request->request->get('email'));
            $profil = $request->request->get('profil');
            $societe = $request->request->get('societe');
            $message = $request->request->get('message');
            

            mail("mustaphakabir@gmail.com", 'contact', $message);

            $save = 'yes';
        }
        else
            $save = 'no';


        return $this->render('SiteCartronBundle:Default:contact.html.twig', array('save' => $save));
    }

    public function loginAction(Request $request) {

        if ($request->isMethod('POST')) {

            $identification = strtolower($request->request->get('identification'));
            $password = strtolower($request->request->get('password'));

            $em = $this->getDoctrine()->getEntityManager();
            $user = $em->getRepository('SiteCartronBundle:User')->findBy(array('email' => $identification, 'password' => $password));
            if (count($user)) {
                $this->get('session')->set('auth', true);
                $this->get('session')->set('name', $user[0]->getPrenom() . ' ' . $user[0]->getNom());
                echo $this->generateUrl('site_cartron_hp_pro');
            }
            else
                echo "n";

            die();
        }
    }

    public function motPasseOublieAction(Request $request) {


        $identification = strtolower($request->request->get('identification'));

        $em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository('SiteCartronBundle:User')->findBy(array('email' => $identification));
        if (count($user)) {

            $password = "";
            $chaine = "abcdefghijklmnpqrstuvwxy";
            srand((double) microtime() * 1000000);
            for ($i = 0; $i < 10; $i++) {
                $password .= $chaine[rand() % strlen($chaine)];
            }
            $id = $user[0]->getId();


            $qb = $em->createQueryBuilder();
            $q = $qb->update('Site\CartronBundle\Entity\User', 'u')
                    ->set('u.password', '?1')
                    ->where('u.id = ?2')
                    ->setParameter(1, $password)
                    ->setParameter(2, $id)
                    ->getQuery();
            $p = $q->execute();

            $message = 'Voici votre identifiant cartron ' . 'email = ' . $identification . ' et ' . 'mot de passe = ' . $password;

            mail($identification, 'Votre identifiants cartron', $message);

            $save = 'yes';
        }
        else
            $save = 'no';

        die($save);
    }

    public function hpProAction(Request $request) {
        if (!$this->get('session')->get('auth'))
            return $this->redirect($this->generateUrl('site_cartron_creer_compte_pro'));

        return $this->render('SiteCartronBundle:Default:hp_pro.html.twig');
    }

    public function listProduitAction(Request $request, $id, $type) {
        if (!$this->get('session')->get('auth'))
            return $this->redirect($this->generateUrl('site_cartron_creer_compte_pro'));

        $em = $this->getDoctrine()->getEntityManager();
        if ($type == 'produit')
            $produits = $em->getRepository('SiteCartronBundle:Produits')->findBy(array('idSousMenu' => $id));
        else
            $produits = $em->getRepository('SiteCartronBundle:Produits')->findBy(array('idDegustation' => $id));
        return $this->render('SiteCartronBundle:Default:liste_produit.html.twig', array('produits' => $produits));
    }

    public function detailProduitAction($id) {
        if (!$this->get('session')->get('auth'))
            return $this->redirect($this->generateUrl('site_cartron_creer_compte_pro'));
        $em = $this->getDoctrine()->getEntityManager();
        $produit = $em->getRepository('SiteCartronBundle:Produits')->find($id);

        return $this->render('SiteCartronBundle:Default:detail_produit_pro.html.twig', array('article' => $produit));
    }

    public function zipArchiverAction($demande) {
        if (!$this->get('session')->get('auth'))
            return $this->redirect($this->generateUrl('site_cartron_creer_compte_pro'));
        $zip = new ZipArchive();
        $path = __DIR__ . '/../../../../web/zip/';
        $filename = $path . "sss.zip";


        if ($zip->open($filename, ZIPARCHIVE::CREATE) !== TRUE) {
            exit("Impossible d'ouvrir le fichier <$filename>\n");
        }
        if ($demande == 'packshots') {
            $zip->addFile("M:\zend\Apache2\htdocs\cartron_dev\web\upload\hp_1367321900_Desert.jpg");
        }

        die();
    }

    public function menuProAction(Request $request) {
        if (!$this->get('session')->get('auth'))
            return $this->redirect($this->generateUrl('site_cartron_creer_compte_pro'));

        $em = $this->getDoctrine()->getEntityManager();

        $produits1 = $em->createQuery("SELECT po.titreFr, po.titreEn  , IDENTITY(po.idSousMenu) as idSousMenu  FROM SiteCartronBundle:Produits po  WHERE po.idSousMenu IS NOT NULL");
        $produits = $produits1->getResult();

        $autreMenu = $em->getRepository('SiteCartronBundle:PageMenu')->findAll();
        $sousMenuProduits = $em->getRepository('SiteCartronBundle:SousMenuProduits')->findAll();


        $produits2 = $em->createQuery("SELECT po.titreFr, po.titreEn ,  IDENTITY(po.idDegustation) as idDegustation  FROM SiteCartronBundle:Produits po  WHERE po.idDegustation IS NOT NULL");
        $produits3 = $produits2->getResult();

        $sousMenuDegustationProduits = $em->getRepository('SiteCartronBundle:DegustationPro')->findAll();

        return $this->render('SiteCartronBundle:Default:menu_pro.html.twig', array('sousMenuProduits' => $sousMenuProduits, 'sousMenuDegustationProduits' => $sousMenuDegustationProduits, 'produits3' => $produits3, 'produits' => $produits, 'autreMenu' => $autreMenu));
    }

    public function choisirLangueAction($langue = null) {

        if ($langue != null)
            $this->get('session')->set('_locale', $langue);

        $url = $this->get('request')->headers->get('referer');
        if (empty($url)) {
            $url = $this->get('router')->generate('site_cartron_homepage');
        }
        return new RedirectResponse($url);
    }

}
