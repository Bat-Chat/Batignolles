<?php

namespace Batignolles\Test\Api;

/**
 * @api
 * @since 100.0.2
 */
interface ProductRepositoryInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
    /**
     * Product id
     *
     * @return int|null
     */
    public function getId();
}