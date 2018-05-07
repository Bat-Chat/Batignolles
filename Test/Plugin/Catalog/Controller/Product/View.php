<?php

namespace Batignolles\Test\Plugin\Catalog\Controller\Product;

class View
{
    public function beforeExecute(\Magento\Catalog\Controller\Product\View $subject)
    {
        echo "Before Product View<BR>";
    }

    public function afterExecute(\Magento\Catalog\Controller\Product\View $subject, $result)
    {
        echo "After Product View";
        return $result;
    }
}