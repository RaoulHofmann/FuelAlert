<?php
namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

use Psr\Log\LoggerInterface;

class RequestListener
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;    
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();

        $this->logger->info('request', [$request]);
    }

    public function onKernelResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();

        $this->logger->info('response', [$response]);
    }
}