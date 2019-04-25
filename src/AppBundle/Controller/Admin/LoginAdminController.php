<?php

namespace AppBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Repository\UserRepository;
use AppBundle\Form\LoginAdminType;

class LoginAdminController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(
        UserRepository $userRepository
    ) {
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("/login", name="login")
     *
     * @return View
     */
    public function loginAction(Request $request)
    {
        $error = 'n';
        $form = $this->createForm(LoginAdminType::class);
        
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();

            $identification = strtolower($data['username']);
            $password = strtolower($data['password']);

            $user = $this->userRepository->findOneBy(
                ['email' => $identification, 'password' => $password]
            );

            if ($user) {
                if ($user->getProfil() == 'admin') {
                    $this->get('session')->set('auth_admin', true);
                    $this->get('session')->set(
                        'name',
                        $user->getPrenom().
                         ' ' .
                        $user->getNom()
                    );
                    return $this->redirectToRoute('site_admin_homepage');
                }
            } else {
                $error = 'y';
            }
        }

        return $this->render(
            'admin/login/login.html.twig',
            ['error' => $error, 'form' => $form->createView()]
        );
    }

    /**
     * @Route("/logout", name="logout")
     *
    */
    public function logoutAction()
    {
        $this->get('session')->set('auth_admin', false);
        $this->get('session')->set('name', false);
        return $this->redirect($this->generateUrl('login'));
    }
}
