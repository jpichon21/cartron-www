<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\VideoHpRepository;
use AppBundle\Repository\HomePageRepository;
use Symfony\Component\HttpFoundation\Cookie;
use AppBundle\Form\FirstConnectionType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DefaultController extends Controller
{

    /**
     * @var VideoHpRepository
     */
    private $videoHpRepository;

    /**
     * @var HomePageRepository
     */
    private $homePageRepository;

    public function __construct(
        VideoHpRepository $videoHpRepository,
        HomePageRepository $homePageRepository
    ) {
        $this->videoHpRepository = $videoHpRepository;
        $this->homePageRepository = $homePageRepository;
    }

    /**
     * @Route("/", name="homepage")
     *
     * @return View
     */
    public function indexAction()
    {
        $video = $this->videoHpRepository->findAll();
        $articles = $this->homePageRepository->findBy([], ['id' => 'desc']);
        return $this->render(
            'default/index.html.twig',
            [
            'articles' => $articles,
            'video' => $video
            ]
        );
    }

    /**
     * @Route("/premier_connexion", name="first_connection")
     *
     * @return View
     */
    public function firstConnectionAction(Request $request)
    {
        $form = $this->createForm(FirstConnectionType::class);

        $targetRoute = $request->get('t');
        if ($request->get('t') == null) {
            $targetRoute = '/';
        }

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $data = $form->getData();
            $pays = $data['pays'];
            $seSouvenir = $data['sesouvenir'];
            $age = date_diff(new \DateTime(), $data['dateNaissance'], false)->y;
            $session = new Session();
            if ($age >= 18 && $pays) {
                $session->set('firstConnection', true);

                $response = new RedirectResponse($targetRoute);

                if ($seSouvenir === true) {
                    $cookie = new Cookie(
                        'firstConnection',
                        true,
                        strtotime('now + 30 days')
                    );
                    $response->headers->setCookie($cookie);
                }
                return $response;
            } else {
                $session->set('firstConnection', false);
            }
        }
        return $this->render(
            'default/firstConnection.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/{locale}/choisir-langue", name="choose_locale")
     *
     * @return RedirectResponse
     */
    public function chooseLocaleAction(Request $request, $locale = null)
    {
        $session= new Session();
        if ($locale != null) {
            $session->set('_locale', $locale);
        }
        $url = $request->headers->get('referer');
        if (empty($url)) {
            $url = $this->get('router')->generateUrl('homepage');
        }
        return new RedirectResponse($url);
    }

    /**
     * Create a pro account
     *
     * @return void
     *
     * @Route(path="/compte", name="create_pro_account")
     */
    public function createProAccountAction()
    {
    }

    /**
     * Reset pro password
     *
     * @return void
     *
     * @Route(path="/mot_passe_oublie", name="reset_pro_password")
     */
    public function resetProPasswordAction()
    {
    }

    /**
     * @Route(path="/privacy-policy", name="privacy_policy")
     */
    public function privacyPolicyAction()
    {
        return $this->render('privacy_policy.html.twig');
    }

    /**
     * @Route(path="/oneshot/crypt-passwords", name="crypt_passwords")
     */
    public function cryptPasswordsAction(UserPasswordEncoderInterface $encoder)
    {
        $users = $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();
        $accountsDoNotUpdate = array('export', 'agent', 'admin');

        /** @var User $user */
        foreach ($users as $user) {
            if (!empty($user->getPassword()) && !in_array($user->getLogin(), $accountsDoNotUpdate)) {
                $passwordEncoded = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($passwordEncoded);
            }
        }

        $this->getDoctrine()->getManager()->flush();
        return new Response('OK');
    }
}
