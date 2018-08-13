<?php
namespace Mageplaza\HelloWorld\Controller\Post;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Mageplaza\HelloWorld\Model\PostFactory $postFactory)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
	}

	protected function _isAllowed()
{
    return $this->_authorization->isAllowed('Magento_AdminNotification::show_list');
}

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}