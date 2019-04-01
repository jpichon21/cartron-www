<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\HomePageRepository;

class NewsController extends Controller
{

    /**
     * @var HomePageRepository
     */
    private $homePageRepository;

    public function __construct(
        HomePageRepository $homePageRepository
    ) {
        $this->homePageRepository = $homePageRepository;
    }

    /**
     * @Route("/get_news", name="get_news")
     *
     * @return View
     */
    public function getNewsAction(Request $request)
    {
        $idNews = $request->request->get('id');

        $articles = $this->homePageRepository->find($idNews);


        return $this->render(
            'news/getNews.html.twig',
            [
            'articles' => $articles
            ]
        );
    }
}
