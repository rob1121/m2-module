<?php namespace Mageplaza\HelloWorld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Post extends AbstractDb
{
	const TABLE_NAME = 'mageplaza_helloworld_post';
	
	public function __construct(Context $context)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init(self::TABLE_NAME, 'post_id');
	}
	
}