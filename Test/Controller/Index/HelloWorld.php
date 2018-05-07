<?php

namespace Batignolles\Test\Controller\Index;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        // $this->getResponse()->appendBody("HELLO WORLD");
        $this->_redirect('catalog/category/view/id/1');
    }
}