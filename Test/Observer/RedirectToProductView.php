<?php

namespace Batignolles\Test\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Class RedirectToProductView
 * @package Batignolles\Test\Observer
 */
class RedirectToProductView implements ObserverInterface
{
    /**
    * @var \Magento\Framework\App\Response\RedirectInterface
    */
    protected $redirect;

    /**
    * @var \Magento\Framework\App\ActionFlag
    */
    protected $actionFlag;

    /**
    * @param \Magento\Framework\App\Response\RedirectInterface $redirect
    * @param \Magento\Framework\App\ActionFlag $actionFlag
    */
    public function __construct(
        \Magento\Framework\App\Response\RedirectInterface $redirect,
        \Magento\Framework\App\ActionFlag $actionFlag
    ) {
        $this->redirect = $redirect;
        $this->actionFlag = $actionFlag;
    }

    /**
    *
    * @param \Magento\Framework\Event\Observer $observer
    *
    * @return void
    *
    * @SuppressWarnings(PHPMD.UnusedLocalVariable)
    */
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $request = $observer->getEvent()->getData('request');
        if ($request->getModuleName() != 'catalog' || $request->getControllerName() != 'product') {
            $controller = $observer->getControllerAction();
            $this->actionFlag->set('', \Magento\Framework\App\Action\Action::FLAG_NO_DISPATCH, true);
            $this->redirect->redirect($controller->getResponse(), 'catalog/product/view/id/1');
        }
    }
}