<?php namespace Mageplaza\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Edit extends Template
{
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Mageplaza\HelloWorld\Model\PostFactory $postFactory
	)
	{
		$this->_postFactory = $postFactory;
		parent::__construct($context);
	}

	public function getPost()
	{
		$params = $this->getRequest()->getParams();
		$post = $this->_postFactory->create()->load($params['id']);
		return $post;
	}
}