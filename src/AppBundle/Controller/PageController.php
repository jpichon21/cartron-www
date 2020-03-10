<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PageController extends Controller
{
    /**
     * @Route("/{page}", name="static_page")
     *
     * @return View
     */
    public function staticPageAction($page)
    {
        $pages = [
            "Savoir-faire-fruits",
            "Savoir-faire-creation",
            "Savoir-faire-elaboration",
            "Savoir-faire",
            "savoir-faire-elaboration-creme",
            "savoir-faire-elaboration-eau",
            "Savoir-faire-elaboration",
            "Savoir-faire-creation",
            "Savoir-faire-fruits",
            "Savoir-faire-fruits",
            "Savoir-faire-esprit",
            "Patrimoine",
            "histoire",
            "la-bourgogne",
            "licornes",
            "joseph-cartron",
            "armand-cartron",
            "xavier-cartron",
            "judith-cartron",
            "la-bourgogne-histoire",
            "la-bourgogne-et-le-coeur"
        ];
        if (!in_array($page, $pages)) {
            throw new NotFoundHttpException(sprintf('"%s" page not found.'));
        }
        return $this->render(
            'page/staticPage.html.twig',
            [
            'page' => $page
            ]
        );
    }
}
//admin admin123456
//AGENT agentcartronpro