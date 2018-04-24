<?php

namespace Batignolles\Test\MagentoU;

/**
 * Class Test
 * @package Batignolles\Test\MagentoU
 */
class Test
{
	/**
     * @var \Batignolles\Test\Api\ProductRepositoryInterface
     */
    protected $unit1ProductRepository;

    /**
     * @var string PageFactory
     */
    protected $justAParameter;

    /**
     * @var array PageFactory
     */
    protected $data;

    /**
     * Test constructor.
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param \Magento\Catalog\Model\ProductFactory $productFactory
     * @param \Magento\Checkout\Model\Session $session
     * @param \Batignolles\Test\Api\ProductRepositoryInterface $batignollesProductRepository
     * @param null $justAParameter
     * @param array $data
     */
    public function __construct(
		\Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
		\Magento\Catalog\Model\ProductFactory $productFactory,
		\Magento\Checkout\Model\Session $session,
		\Batignolles\Test\Api\ProductRepositoryInterface $batignollesProductRepository,
		$justAParameter = null,
		array $data
	) {
		$this->batignollesProductRepository = $batignollesProductRepository;
		$this->justAParameter = $justAParameter;
		$this->data = $data;
	}

    /**
     * Print data
     */
    public function log() {
		var_dump(
            get_class($this->batignollesProductRepository),
            $this->justAParameter,
            $this->data
        );
    }
}