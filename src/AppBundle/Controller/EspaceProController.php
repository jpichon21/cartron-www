<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Repository\ResourceRepository;
use AppBundle\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface as EntityManager;

class EspaceProController extends Controller
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
    public function accueilAction()
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $resourcesMenu = $this->resourceRepository->findAll();

        return $this->render(
            'espace-pro/accueil.html.twig',
            ['categoriesMenu' => $categoriesMenu, 'resourcesMenu' => $resourcesMenu]
        );
    }

    /**
     * @Route("/espace-pro-liste/{id}", name="pro_list_resources")
     *
     * @return View
     */
    public function listResourcesAction($id)
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $resourcesMenu = $this->resourceRepository->findAll();

        $category = $this->categoryRepository->findOneById($id);
        $resources = $this->resourceRepository->findBy(['category' => $id]);
        
        return $this->render(
            'espace-pro/list_resources.html.twig',
            [
                'category' => $category,
                'resources' => $resources,
                'categoriesMenu' => $categoriesMenu,
                'resourcesMenu' => $resourcesMenu
            ]
        );
    }

    /**
     * @Route("/espace-pro/{id}", name="pro_resource")
     *
     * @return View
     */
    public function resourceAction($id)
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $resourcesMenu = $this->resourceRepository->findBy(
            [],
            ['position' => 'ASC']
        );

        $resource = $this->resourceRepository->findOneById($id);
        $category = $resource->getCategory();

        $position = $resource->getPosition();

        $resourcePrev = $this->resourceRepository->findOneByPosition($position - 1);
        $resourceNext = $this->resourceRepository->findOneByPosition($position + 1);
        return $this->render(
            'espace-pro/resource.html.twig',
            [
                'category' => $category,
                'resource' => $resource,
                'prev' => $resourcePrev,
                'next' => $resourceNext,
                'categoriesMenu' => $categoriesMenu,
                'resourcesMenu' => $resourcesMenu
            ]
        );
    }
    private function generateCategoriesTree()
    {
        $ret = [];
        $categories = $this->categoryRepository->findBy(['lvl' => 0]);
        foreach ($categories as $category) {
            $cat = [];
            $cat['parent'] = $category;
            if ($this->categoryRepository->getChildren($category)) {
                $cat['children'] = $this->categoryRepository->getChildren($category);
            }
            array_push($ret, $cat);
        }
        return $ret;
    }
}
