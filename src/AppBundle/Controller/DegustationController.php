<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\DegustationRepository;
use AppBundle\Repository\SousMenuDegustationRepository;
use Symfony\Component\HttpFoundation\Request;

class DegustationController extends Controller
{
    /**
     * @var DegustationRepository
     */
    private $degustationRepository;

    /**
     * @var SousMenuDegustationRepository
     */
    private $sousMenuDegustationRepository;

    public function __construct(
        DegustationRepository $degustationRepository,
        SousMenuDegustationRepository $sousMenuDegustationRepository
    ) {
        $this->degustationRepository = $degustationRepository;
        $this->sousMenuDegustationRepository = $sousMenuDegustationRepository;
    }

    /**
     * @Route("/degustation", name="tasting")
     *
     * @return View
     */
    public function degustationAction(Request $request)
    {
        $degustations = $this->degustationRepository->findAll();
        $sousMenus = $this->sousMenuDegustationRepository->findBy(
            [],
            [($request->getLocale()=="en"?'titreEn':'titreFr')=>'asc']
        );

        return $this->render(
            'degustation/degustation.html.twig',
            [
            'sousMenus' => $sousMenus,
            'degustations' => $degustations
            ]
        );
    }
    
    /**
     * @Route("/{id}/degustation_produit", name="tasting_product")
     *
     * @return View
     */
    public function degustationProduitAction(Request $request, $id)
    {
        $degustations = $this->degustationRepository->findAll();
        $sousMenuDegustationDefault = $this->sousMenuDegustationRepository->find($id);
        
        $sousMenus = $this->sousMenuDegustationRepository->findBy(
            [],
            [($request->getLocale()=="en"?'titreEn':'titreFr')=>'asc']
        );

        $sousMenusDegustation = $this->sousMenuDegustationRepository->findBy(
            ['idDegustation' => $sousMenuDegustationDefault
                ->getIdDegustation()
                ->getId()],
            [($request->getLocale()=="en"?'titreEn':'titreFr')=>'asc']
        );

        $article = $this->sousMenuDegustationRepository->find(
            $sousMenuDegustationDefault
                ->getIdDegustation()
                ->getId()
        );
        
        return $this->render(
            'degustation/degustation_produit.html.twig',
            [
            'sousMenus' => $sousMenus,
            'sousMenusDegustation' => $sousMenusDegustation,
            'degustations' => $degustations,
            'sousMenuDegustationDefault' => $sousMenuDegustationDefault,
            'article' => $article,
            'backUrl' => $request->get('backUrl')
                ? sprintf('/%s#%s', $request->get('backUrl'), $request->get('backUrlHash'))
                : 'javascript:window.history.back()',
            ]
        );
    }
}
