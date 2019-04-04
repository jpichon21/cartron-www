<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Resource;
use AppBundle\Repository\ResourceRepository;
use AppBundle\Entity\Category;
use AppBundle\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface as EntityManager;

class AdminProController extends Controller
{

    /**
     * @var ResourceRepository
     */
    private $resourceRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        ResourceRepository $resourceRepository,
        CategoryRepository $categoryRepository,
        EntityManager $em
    ) {
        $this->resourceRepository = $resourceRepository;
        $this->categoryRepository = $categoryRepository;
        $this->em = $em;
    }

    /**
     * @Route("/accueilPro", name="accueil_pro")
     *
     * @return View
     */
    public function accueilAction(Request $request)
    {
        $categories = $this->categoryRepository->findAll();
        $resources = $this->resourceRepository->findAll();

        return $this->render(
            'admin-pro/accueil.html.twig',
            ['categories' => $categories, 'resources' => $resources]
        );
    }
}
