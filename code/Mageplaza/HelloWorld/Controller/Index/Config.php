<?php namespace Mageplaza\HelloWorld\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{
	protected $_helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Mageplaza\HelloWorld\Helper\Data $helperData)
	{
		$this->_helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{
		echo $this->_helperData->getGeneralConfig('enable');
		echo $this->_helperData->getGeneralConfig('display_text');
	}
}