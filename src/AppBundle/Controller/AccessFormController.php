<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\ContactType;

class AccessFormController extends Controller
{
    /**
     * @var Swift_Mailer
     */
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @Route(
     * "request_access/{status}",
     *  name="access",
     *  requirements={"status" = "success"},
     *  defaults={"status" = null}
     * )
     *
     * @return View
     */
    public function accessAction(Request $request, $status)
    {
        $form = $this->createForm(ContactType::class);
        
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $data = $form->getData();
            $nom = $data['nom'];
            $prenom = $data['prenom'];
            $email = $data['email'];
            $societe = $data['societe'];
            $message = $data['message'];
            $content = $nom . "\n\r" .
                    $prenom . "\n\r" .
                    $email . "\n\r" .
                    $societe . "\n\r " .
                    $message;

            $message = (new \Swift_Message("Demande d'accès à l'espace professionnel"))
                ->setFrom($this->getParameter('email_from'))
                ->setTo($this->getParameter('email_to'))
                ->setBody($content)
                ->setReplyTo($email);

            $this->mailer->send($message);
            
            return $this->redirectToRoute('request_access', ['status' => 'success']);
        }
        
        return $this->render(
            'contact/request_access.html.twig',
            [
            'form' => $form->createView(),
            'status' => $status
            ]
        );
    }
}
