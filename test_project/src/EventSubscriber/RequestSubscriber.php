<?php

/**
 * @package App\EventSubscriber
 * @category EventSubscriber
 */
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Psr\Log\LoggerInterface;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see EventSubscriberInterface
 */
class RequestSubscriber implements EventSubscriberInterface
{
    /**
     * @access private
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @access public
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @access public
     * @param RequestEvent $event
     * @return void
     * @since 1.0
     * @see RequestEvent
     * @see LoggerInterface::info()
     */
    public function onKernelRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();
        $this->logger->info('Page visited', ['page' => $request->getUri()]);
    }

    /**
     * @access public
     * @return array
     * @since 1.0
     * @see EventSubscriberInterface::getSubscribedEvents()
     */
    #[\Override] public static function getSubscribedEvents(): array
    {
        return [
            'kernel.request' => 'onKernelRequest',
        ];
    }
}