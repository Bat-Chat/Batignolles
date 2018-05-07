<?php

namespace Batignolles\Test\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;


class Secret extends Action
{
	/** @var boolean|PageFactory */
    protected $resultPageFactory = false;

    /** @var \Magento\Backend\Model\View\Result\Page */
    protected $resultPage;

    /**
     * Secret param name
     */
    const SECRET_PARAM_NAME = 'secret';

    /**
     * Secret param value
     */
    const SECRET_PARAM_VALUE = 1;

    /**
     * Secret param value
     */
    const ROOT_CATALOG_ID = 1;

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
    	// redirect to "Root catalog"
    	// $this->_redirect('catalog/category/edit/', ['id' => self::ROOT_CATALOG_ID]);

        $this->_setPageData();
        return $this->getResultPage();
    }

    /*
     * Checks required param in url (for example: "secret/1" or "?secret=1")
     */
    protected function _isAllowed()
    {
    	$secret = $this->getRequest()->getParam(self::SECRET_PARAM_NAME);
        return isset($secret) && (int)$secret == self::SECRET_PARAM_VALUE;
    }

    /**
     * To get result page.
     * 
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function getResultPage()
    {
        if (is_null($this->resultPage)) {
            $this->resultPage = $this->resultPageFactory->create();
        }

        return $this->resultPage;
    }

    /**
     * To set page data.
     *
     * @return Secret
     */
    protected function _setPageData()
    {
        $resultPage = $this->getResultPage();
        $resultPage->setActiveMenu('Batignolles_Test::secret');
        $resultPage->getConfig()->getTitle()->prepend((__('Batignolles Test Secret Param')));

        return $this;
    }
}