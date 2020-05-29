<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
    public function loginAction(Request $request)
    {
        $error = $this->authenticationUtils->getLastAuthenticationError();
        $lastUsername = $this->authenticationUtils->getLastUsername();

        $access = 'admin';
        if ($request->getSession()->get('acces') == 'pro') {
            $access = 'pro';
        }

        return $this->render(
            'login.html.twig',
            [
                'last_username' => $lastUsername,
                'error' => $error,
                'access' => $access
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
            'contact/request_access.html.twig',
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
