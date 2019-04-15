<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Repository\CategoryRepository;
use AppBundle\Form\CategoryType;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * CategoryAdmin controller.
 */
class CategoryAdminController extends Controller
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        CategoryRepository $categoryRepository,
        EntityManager $em
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->em = $em;
    }

    /**
     * @Route("/category", name="admin_category")
     *
     * @return View
     */
    public function indexCategoryAction()
    {
        $categories = $this->categoryRepository->findAll();
        
        return $this->render(
            'admin/category/category.html.twig',
            ['categories' => $categories]
        );
    }

    /**
     * @Route(
     *  "/category/add",
     *  name="admin_add_category"
     * )
     *
     * @return View
     */
    public function addCategoryAction(Request $request)
    {
        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category, [
            'category' => $category->getId()
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category->setTranslatableLocale('fr');
            $this->em->persist($category);
            $this->em->flush();
            return $this->redirectToRoute('admin_edit_category', ['category' => $category->getId(), 'locale' => 'fr']);
        }

        return $this->render(
            'admin/category/manage_category.html.twig',
            ['form' => $form->createView(), 'isEdit' => false, 'category' => $category]
        );
    }

    /**
     * @Route(
     *  "/category/edit/{category}/{locale}",
     *  name="admin_edit_category",
     *  requirements={"id" = "^\d+$", "locale" = "fr|en"},
     *  defaults={"locale" = "fr"}
     * )
     *
     * @return View
     */
    public function editCategoryAction(Request $request, Category $category, $locale)
    {
        $category->setTranslatableLocale($locale);
        $this->em->refresh($category);

        $form = $this->createForm(CategoryType::class, $category, [
            'category' => $category->getId()
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            ($locale === 'fr') ? $category->setTranslatableLocale('fr') : $category->setTranslatableLocale('en');

            $this->em->persist($category);
            $this->em->flush();
            return $this->redirectToRoute(
                'admin_edit_category',
                ['category' => $category->getId(), 'locale' => $locale]
            );
        }

        return $this->render(
            'admin/category/manage_category.html.twig',
            ['form' => $form->createView(), 'locale' => $locale, 'isEdit' => true, 'category' => $category]
        );
    }
}
