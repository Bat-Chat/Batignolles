<?php

namespace Batignolles\Test\Plugin\Theme\Block\Html;

/**
 * Class Breadcrumbs
 * @package Batignolles\Test\Plugin\Theme\Block\Html
 */
class Breadcrumbs
{
    /**
     * Add crumb
     *
     * @param string $crumbName
     * @param array $crumbInfo
     * @return array
     */
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        if (isset($crumbInfo['label'])) {
            $crumbInfo['label'] = $crumbInfo['label'] . '(!)';
        }

        if (isset($crumbInfo['title'])) {
            $crumbInfo['title'] = $crumbInfo['title'] . '(!)';
        }

        return [$crumbName, $crumbInfo];
    }
}