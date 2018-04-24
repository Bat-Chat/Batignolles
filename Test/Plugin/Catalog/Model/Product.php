<?php

namespace Batignolles\Test\Plugin\Catalog\Model;

/**
 * Class Product
 * @package Batignolles\Test\Plugin\Catalog\Model
 */
class Product
{
    /**
     * Get product price through type instance
     *
     * @return float
     */
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result + 1;
    }
}