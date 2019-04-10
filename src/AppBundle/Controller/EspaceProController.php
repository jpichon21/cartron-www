<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Repository\ResourceRepository;
use AppBundle\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use AppBundle\Entity\Category;
use AppBundle\Entity\Resource;

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
    public function indexAction()
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $resourcesMenu = $this->resourceRepository->findBy(
            [],
            ['position' => 'ASC']
        );

        return $this->render(
            'espace-pro/accueil.html.twig',
            ['categoriesMenu' => $categoriesMenu, 'resourcesMenu' => $resourcesMenu]
        );
    }

    /**
     * @Route("/espace-pro-liste/{category}", name="pro_list_resources")
     *
     * @return View
     */
    public function listResourcesAction(Category $category)
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $resourcesMenu = $this->resourceRepository->findBy(
            [],
            ['position' => 'ASC']
        );

        $resources = $category->getResources();
        
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
     * @Route("/espace-pro/{resource}", name="pro_resource")
     *
     * @return View
     */
    public function resourceAction(Resource $resource)
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $resourcesMenu = $this->resourceRepository->findBy(
            [],
            ['position' => 'ASC']
        );

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
