<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\CollectionRepository;
use AppBundle\Repository\SousMenuRepository;
use Symfony\Component\HttpFoundation\Request;

class CollectionController extends Controller
{

    /**
     * @var CollectionRepository
     */
    private $collectionRepository;

    /**
     * @var SousMenuRepository
     */
    private $sousMenuRepository;

    public function __construct(
        CollectionRepository $collectionRepository,
        SousMenuRepository $sousMenuRepository
    ) {
        $this->collectionRepository = $collectionRepository;
        $this->sousMenuRepository = $sousMenuRepository;
    }

    /**
     * @Route("/collection", name="collection")
     *
     * @return View
     */
    public function collectionAction(Request $request)
    {
        $collections = $this->collectionRepository->findBy([], ['id' => 'asc']);

        $collectionsArray = [];
        $collectionsArray[] = $collections[0];
        $collectionsArray[] = $collections[1];
        $collectionsArray[] = $collections[2];
        $collectionsArray[] = $collections[6];
        $collectionsArray[] = $collections[3];
        $collectionsArray[] = $collections[4];
        $collectionsArray[] = $collections[5];
        $collectionsArray[] = $collections[7];

        $sousMenus = $this->sousMenuRepository->findBy(
            [],
            [($request->getLocale()=="en"?'titreEn':'titreFr')=>'asc']
        );

        return $this->render(
            'collection/collection.html.twig',
            [
            'sousMenus' => $sousMenus,
            'collections' => $collectionsArray
            ]
        );
    }

    /**
     * @Route("/{id}/collection_produit", name="collection_product")
     *
     * @return View
     */
    public function collectionProduitAction(Request $request, $id)
    {
        $collections = $this->collectionRepository->findBy([], ['id' => 'asc']);

        $collectionsArray = [];
        $collectionsArray[] = $collections[0];
        $collectionsArray[] = $collections[1];
        $collectionsArray[] = $collections[2];
        $collectionsArray[] = $collections[6];
        $collectionsArray[] = $collections[3];
        $collectionsArray[] = $collections[4];
        $collectionsArray[] = $collections[5];
        $collectionsArray[] = $collections[7];
    


        $articleDefault = $this->sousMenuRepository->find($id);
        $idCollection = $articleDefault->getIdCollection()->getId();
        $colorCollection = $articleDefault->getIdCollection()->getColor();

        $sousMenusCollection =$this->sousMenuRepository->findBy(
            ['idCollection' => $idCollection],
            [($request->getLocale()=="en"?'titreEn':'titreFr')=>'asc']
        );
        
        $sousMenus = $this->sousMenuRepository->findBy(
            [],
            [($request->getLocale()=="en"?'titreEn':'titreFr')=>'asc']
        );
        
        foreach ($sousMenusCollection as $menu) {
            $recettes = $menu->getRecetteFr();
            if ($recettes) {
                $_recettes = explode(',', $recettes);
                if ($_recettes) {
                    $id = $_recettes[array_rand($_recettes)];
                    if (is_numeric($id)) {
                        $menu->setRecetteFr(
                            $this->generateUrl(
                                'tasting_product',
                                ['id' => $id]
                            )
                        );
                        $menu->setRecetteEn(
                            $this->generateUrl(
                                'tasting_product',
                                ['id' => $id]
                            )
                        );
                    }
                }
            }
        }
 
        return $this->render(
            'collection/collection_produit.html.twig',
            [
                'sousMenusCollection' => $sousMenusCollection,
                'articleDefault' => $articleDefault,
                'collections' => $collectionsArray,
                'rid' => $id, 'idCollection' => $idCollection,
                'defaultColor' => $colorCollection,
                'sousMenus' => $sousMenus
            ]
        );
    }
}
