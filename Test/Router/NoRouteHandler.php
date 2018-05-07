<?php

namespace Batignolles\Test\Router;

class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface 
{
	/**
     * Check and process no route request
     *
     * @param \Magento\Framework\App\RequestInterface $request
     *
     * @return bool
     */
	public function process(\Magento\Framework\App\RequestInterface $request) {
		$request->setModuleName('cms')->setControllerName('index')->setActionName('index');
		return true;
	}
}