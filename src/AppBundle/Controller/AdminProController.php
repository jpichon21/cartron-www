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
     * @Route("/accueilPro", name="pro_accueil")
     *
     * @return View
     */
    public function accueilAction(Request $request)
    {
        $categoriesMenu = $this->categoryRepository->findAll();
        $resourcesMenu = $this->resourceRepository->findAll();

        return $this->render(
            'admin-pro/accueil.html.twig',
            ['categoriesMenu' => $categoriesMenu, 'resourcesMenu' => $resourcesMenu]
        );
    }

    /**
     * @Route("/espace-pro-liste/{id}", name="pro_list_resources")
     *
     * @return View
     */
    public function listResourcesAction(Request $request, $id)
    {
        $categoriesMenu = $this->categoryRepository->findAll();
        $resourcesMenu = $this->resourceRepository->findAll();

        $category = $this->categoryRepository->findOneById($id);
        $resources = $this->resourceRepository->findBy(['category' => $id]);
        
        return $this->render(
            'admin-pro/list_resources.html.twig',
            ['category' => $category, 'resources' => $resources, 'categoriesMenu' => $categoriesMenu, 'resourcesMenu' => $resourcesMenu]
        );
    }

    /**
     * @Route("/espace-pro/{id}", name="pro_resource")
     *
     * @return View
     */
    public function resourceAction(Request $request, $id)
    {
        $categoriesMenu = $this->categoryRepository->findAll();
        $resourcesMenu = $this->resourceRepository->findAll();

        $resource = $this->resourceRepository->findOneById($id);
        $category = $resource->getCategory();

        $position = $resource->getPosition();

        $resourcePrev = $this->resourceRepository->findOneByPosition($position - 1);

        $resourceNext = $this->resourceRepository->findOneByPosition($position + 1);

        return $this->render(
            'admin-pro/resource.html.twig',
            ['category' => $category, 'resource' => $resource, 'prev' => $resourcePrev, 'next' => $resourceNext, 'categoriesMenu' => $categoriesMenu, 'resourcesMenu' => $resourcesMenu]
        );
    }
}
