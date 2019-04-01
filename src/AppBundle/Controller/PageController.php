<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends Controller
{
    /**
     * @Route("/{page}", name="static_page")
     *
     * @return View
     */
    public function staticPageAction($page)
    {
        return $this->render(
            'page/staticPage.html.twig',
            [
            'page' => $page
            ]
        );
    }
}
