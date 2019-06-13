<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @var AuthenticationUtils
     */
    private $authenticationUtils;

    public function __construct(
        AuthenticationUtils $authenticationUtils
    ) {
        $this->authenticationUtils = $authenticationUtils;
    }

    /**
     * @Route("/login", name="login")
     *
     * @return View
     */
    public function loginAction()
    {
        $error = $this->authenticationUtils->getLastAuthenticationError();
        $lastUsername = $this->authenticationUtils->getLastUsername();

        return $this->render(
            'login.html.twig',
            [
                'last_username' => $lastUsername,
                'error' => $error
            ]
        );
    }

    
    /**
     * @Route("/request_access", name="request_access")
     *
     * @return View
     */
    public function requestAccessAction()
    {
        return $this->render(
            'request_access.html.twig',
            [
               
            ]
        );
    }

    /**
     * @Route("/logout", name="logout")
     *
    */
    public function logoutAction()
    {
        return $this->redirect($this->generateUrl('login'));
    }
}
