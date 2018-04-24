<?php

namespace Batignolles\Test\Plugin\Theme\Block\Html;

/**
 * Class Footer
 * @package Batignolles\Test\Plugin\Theme\Block\Html
 */
class Footer
{
    /**
     * Retrieve copyright information
     *
     * @return string
     */
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return __("Customized copyright!");
    }
}