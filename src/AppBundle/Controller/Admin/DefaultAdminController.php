<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface as EntityManager;

class DefaultAdminController extends Controller
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        CategoryRepository $categoryRepository,
        EntityManager $em
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->em = $em;
    }

    /**
     * @Route("/supprimer/{table}/{id}", name="delete")
     *
     * @return Route
     */
    public function deleteAction($table, $id, Request $request)
    {
        
        $tableBdd = $this->em->find('AppBundle:' . $table . '', $id);
        if (!$tableBdd) {
            throw new NotFoundHttpException($tableBdd . "non trouvé");
        } elseif ($table === 'Category') {
            $allCat = [];
            foreach ($this->categoryRepository->getChildren($tableBdd) as $category) {
                array_push($allCat, $category);
            }
            array_push($allCat, $tableBdd);
            foreach ($allCat as $category) {
                foreach ($category->getResources() as $resource) {
                    foreach ($resource->getDownloads() as $download) {
                        $name = $download->getFile();
                        $dir = $this->getParameter('uploadDirectory').'/';
                        if (file_exists($dir.$name) && $name != "") {
                            unlink($dir.$name);
                        }
                        $this->em->remove($download);
                    }
                    $dir = $this->getParameter('uploadDirectory').'/';
                    $picture = $resource->getPicture();
                    $miniature = $resource->getMiniature();
                    if (file_exists($dir.$picture) && $picture != "") {
                        unlink($dir.$picture);
                    }
                    if (file_exists($dir.$miniature) && $miniature != "") {
                        unlink($dir.$miniature);
                    }
                    $this->em->remove($resource);
                }
                $this->em->remove($category);
            }
        } elseif ($table === 'Resource') {
            foreach ($tableBdd->getDownloads() as $download) {
                $name = $download->getFile();
                $dir = $this->getParameter('uploadDirectory').'/';
                if (file_exists($dir.$name) && $name != "") {
                    unlink($dir.$name);
                }
                $this->em->remove($download);
            }
            $this->em->remove($tableBdd);
        } else {
            $this->em->remove($tableBdd);
        }
        $this->em->flush();
        switch ($table) {
            case 'HomePage':
                return $this->redirectToRoute('admin_homepage');
                break;
            case 'VideoHp':
                return $this->redirectToRoute('admin_videoHp');
                break;
            case 'Collection':
                return $this->redirectToRoute('admin_collection');
                break;
            case 'SousMenu':
                return $this->redirectToRoute('admin_sous_menu');
                break;
            case 'Degustation':
                return $this->redirectToRoute('admin_degustation');
                break;
            case 'SousMenuDegustation':
                return $this->redirectToRoute('admin_sous_menu_degustation');
                break;
            case 'DegustationPro':
                return $this->redirectToRoute('admin_degustation_pro');
                break;
            case 'SousMenuProduits':
                return $this->redirectToRoute('admin_sous_menu_produit_pro');
                break;
            case 'PageMenu':
                return $this->redirectToRoute('admin_menu_pro');
                break;
            case 'Produits':
                $type = $request->query->get('type');
                $id = $request->query->get('idc');
                return $this->redirectToRoute('admin_produit_pro', ['id' => $id, 'type' => $type]);
                break;
            case 'Pays':
                return $this->redirectToRoute('liste_pays');
                break;
            case 'Category':
                return $this->redirectToRoute('admin_category');
                break;
            case 'Resource':
                return $this->redirectToRoute('admin_resource');
                break;
            default:
                echo 'null';
        }
    }
}
