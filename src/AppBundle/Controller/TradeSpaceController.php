<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Download;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Repository\ResourceRepository;
use AppBundle\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use AppBundle\Entity\Category;
use AppBundle\Entity\Resource;
use Symfony\Component\HttpFoundation\Request;

class TradeSpaceController extends Controller
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
     * @Route("/pro", name="pro_accueil")
     *
     * @return View
     */
    public function indexAction(Request $request)
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $categoriesMenu = $this->filterCategoriesForLocale($request, $categoriesMenu);
        $resourcesMenu = $this->resourceRepository->findBy(
            [],
            ['position' => 'ASC']
        );
        $resourcesMenu = $this->filterResourcesForLocale($request, $resourcesMenu);


        return $this->render(
            'espace-pro/accueil.html.twig',
            ['categoriesMenu' => $categoriesMenu, 'resourcesMenu' => $resourcesMenu]
        );
    }

    /**
     * @Route("/pro/liste/{category}", name="pro_list_resources")
     *
     * @return View
     */
    public function listResourcesAction(Request $request, Category $category)
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $categoriesMenu = $this->filterCategoriesForLocale($request, $categoriesMenu);
        $resourcesMenu = $this->resourceRepository->findBy(
            [],
            ['position' => 'ASC']
        );
        $resourcesMenu = $this->filterResourcesForLocale($request, $resourcesMenu);

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
     * @Route("/pro/{resource}", name="pro_resource")
     *
     * @return View
     */
    public function resourceAction(Request $request, Resource $resource)
    {
        $categoriesMenu = $this->generateCategoriesTree();
        $categoriesMenu = $this->filterCategoriesForLocale($request, $categoriesMenu);
        $resourcesMenu = $this->resourceRepository->findBy(
            [],
            ['position' => 'ASC']
        );
        $resourcesMenu = $this->filterResourcesForLocale($request, $resourcesMenu);

        $category = $resource->getCategory();
        $position = $resource->getPosition();

        $resourcePrev = $this->resourceRepository->findOneBy(['position' => $position - 1, 'category' => $category->getId()]);
        $resourceNext = $this->resourceRepository->findOneBy(['position' => $position + 1, 'category' => $category->getId()]);

        $downloads = $resource->getDownloads()->toArray();
        $downloadsOrdered = [];
        $productInformation = [];
        $packshot = [];
        $productTransport = [];
        /** @var Download $download */
        foreach ($downloads as $key => $download) {
            if (!is_null($category->getParent()) && $category->getParent()->getIdentifiant() === 'produits') {
                if ($download->getLocale() === $request->getLocale()) {
                    if (strpos($download->getTitle(), 'FICHE PRODUIT') !== false) {
                        $productInformation[] = $download;
                        unset($downloads[$key]);
                    }

                    if (strpos($download->getTitle(), 'PACKSHOT') !== false) {
                        $packshot[] = $download;
                        unset($downloads[$key]);
                    }

                    if (strpos($download->getTitle(), 'FICHE LOGISTIQUE') !== false) {
                        $productTransport[] = $download;
                        unset($downloads[$key]);
                    }
                }
            } else if (!is_null($category->getParent()) && $category->getParent()->getIdentifiant() === 'products') {
                if (strpos($download->getTitle(), 'PRODUCT INFORMATION') !== false) {
                    $productInformation[] = $download;
                    unset($downloads[$key]);
                }

                if (strpos($download->getTitle(), 'PACKSHOT') !== false) {
                    $packshot[] = $download;
                    unset($downloads[$key]);
                }

                if (strpos($download->getTitle(), 'TECHNICAL INFORMATION') !== false) {
                    $productTransport[] = $download;
                    unset($downloads[$key]);
                }
            }
        }

        if (empty($productInformation)) {
            $productInformation = new Download();
        }

        if (empty($packshot)) {
            $packshot = new Download();
        }

        if (empty($productTransport)) {
            $productTransport = new Download();
        }

        foreach ($productInformation as $productInfo) {
            $downloadsOrdered[] = $productInfo;
        }

        foreach ($packshot as $packshotValue) {
            $downloadsOrdered[] = $packshotValue;
        }

        foreach ($productTransport as $productTransportValue) {
            $downloadsOrdered[] = $productTransportValue;
        }

        return $this->render(
            'espace-pro/resource.html.twig',
            [
                'category' => $category,
                'resource' => $resource,
                'downloads' => array_merge($downloadsOrdered, $downloads),
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
        $categories = $this->categoryRepository->findBy(['lvl' => 0], ['position' => 'ASC']);

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

    private function filterCategoriesForLocale(Request $request, array $categoriesMenu)
    {
        if ($request->getLocale() === 'en') {
            foreach ($categoriesMenu as $key => $categoryMenu) {
                if (array_key_exists('parent', $categoryMenu) && $categoryMenu['parent']->getIdentifiant() === 'others-brand') {
                    unset($categoriesMenu[$key]);
                }
            }
        }
        return $categoriesMenu;
    }

    private function filterResourcesForLocale(Request $request, array $resourcesMenu)
    {
        if ($request->getLocale() === 'en') {
            foreach ($resourcesMenu as $key => $resourceMenu) {
                if (in_array($resourceMenu->getId(), [763, 819, 795, 782, 700])) {
                    unset($resourcesMenu[$key]);
                }
            }
        }
        return $resourcesMenu;
    }
}
