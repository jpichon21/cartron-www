<?php
// src/OC/PlatformBundle/Beta/BetaHTMLAdder.php

namespace AppBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class ConsentListener
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function checkConsent(GetResponseEvent $event)
    {
        $requestUri = $event->getRequest()->getRequestUri();
        if ($event->getRequestType() === HttpKernelInterface::MASTER_REQUEST) {
            $targetRoute = $event->getRequest()->get('_route');
            if ($targetRoute !== 'first_connection'
                && $targetRoute !== 'login'
                && $targetRoute !== 'admin_homepage'
                && $targetRoute !== 'choose_locale'
                && substr($targetRoute, 0, 3) !== 'pro'
                && strpos($targetRoute, 'admin') !== false
                ) {
                if (!$event->getRequest()->getSession()->get('firstConnection')
                && !$event->getRequest()->cookies->has('firstConnection')
                ) {
                    $event->setResponse(
                        new RedirectResponse(
                            $this->router->generate(
                                'first_connection',
                                ['t' => $targetRoute !== 'choose_locale' ? $requestUri : '/']
                            )
                        )
                    );
                }
            }
        }
    }
}
