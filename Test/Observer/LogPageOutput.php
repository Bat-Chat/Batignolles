<?php

namespace Batignolles\Test\Observer;

use Magento\Framework\Event\ObserverInterface;

class LogPageOutput implements ObserverInterface
{
    /**
    * @var null|\Psr\Log\LoggerInterface
    */
    protected $logger = null;

    /**
    * @param \Psr\Log\LoggerInterface $logger
    */
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
    *
    * @param \Magento\Framework\Event\Observer $observer
    * @return $this
    *
    * @SuppressWarnings(PHPMD.UnusedLocalVariable)
    */
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $this->logger->addDebug("--------\n\n\n BODY \n\n\n" . $body);
    }
}