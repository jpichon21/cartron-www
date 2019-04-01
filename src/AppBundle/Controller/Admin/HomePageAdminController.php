<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\HomePageRepository;
use AppBundle\Form\HomePageType;
use AppBundle\Form\VideoHpType;
use AppBundle\Entity\HomePage;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use AppBundle\Repository\VideoHpRepository;

class HomePageAdminController extends Controller
{
    /**
     * @var HomePageRepository
     */
    private $homePageRepository;

    /**
     * @var VideoHpRepository
     */
    private $videoHpRepository;

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(
        HomePageRepository $homePageRepository,
        VideoHpRepository $videoHpRepository,
        EntityManager $em
    ) {
        $this->homePageRepository = $homePageRepository;
        $this->videoHpRepository = $videoHpRepository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="admin_homepage")
     *
     * @return View
     */
    public function indexHomePageAction()
    {
        $articles = $this->homePageRepository->findBy([], ['id' => 'desc']);

        return $this->render(
            'admin/homepage/index.html.twig',
            ['articles' => $articles]
        );
    }

    /**
     * @Route(
     *  "/manageArticle/{id}",
     *  name="admin_homepage_add_article",
     *  requirements={"id" = "^\d+"},
     *  defaults={"id" = null}
     * )
     *
     * @return View
     */
    public function addOrEditArticleAction(Request $request, $id)
    {
        if ($id !== null) {
            $homePage = $this->homePageRepository->findOneById($id);
            $image = $homePage->getImage();
        } else {
            $homePage = new HomePage();
        }

        $form = $this->createForm(HomePageType::class, $homePage);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $data = $form->getData();
                $uploadFile = $data->getImage();
                if ($uploadFile) {
                    $nameOriginalFile = $uploadFile->getClientOriginalName();
                    $name = 'hp_' . time() . '_' . $nameOriginalFile;
                    $homePage->setImage($name);
                    $uploadFile->move(
                        $this->getParameter('uploadDirectory'),
                        $name
                    );
                } else {
                    if (isset($image)) {
                        $homePage->setImage($image);
                    }
                }

                $this->em->persist($homePage);
                $this->em->flush();
                return $this->redirectToRoute('admin_homepage');
            }
        }

        return $this->render(
            'admin/homepage/hp_ajouter_article.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/manageVideoHp", name="admin_homepage_add_video")
     *
     * @return View
     */
    public function addOrEditVideoHpAction(Request $request)
    {
        $id = $request->query->get('id');

        if (isset($id)) {
            $videoHp = $this->videoHpRepository->findOneById($id);
        } else {
            $videoHp = new VideoHp();
        }

        $form = $this->createForm(VideoHpType::class, $videoHp);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $form->bind($request);
            
            if ($form->isValid()) {
                $this->em->persist($videoHp);
                $this->em->flush();
                return $this->redirectToRoute('admin_homepage');
            }
        }

        return $this->render(
            'admin/homepage/hp_ajouter_video.html.twig',
            ['form' => $form->createView()]
        );
    }
}
