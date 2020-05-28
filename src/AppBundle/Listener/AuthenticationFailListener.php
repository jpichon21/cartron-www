<?php

namespace AppBundle\Listener;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler;
use Symfony\Component\Security\Http\HttpUtils;

class AuthenticationFailListener extends DefaultAuthenticationFailureHandler
{
    private $router;

    public function __construct(HttpKernelInterface $httpKernel, HttpUtils $httpUtils, array $options, LoggerInterface $logger = null, RouterInterface $router)
    {
        parent::__construct($httpKernel, $httpUtils, $options, $logger);
        $this->router = $router;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        if ($request->request->get('acces') == 'pro') {
            $request->getSession()->set('acces', 'pro');
        }

        return parent::onAuthenticationFailure($request, $exception);
    }
}
