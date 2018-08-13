<?php namespace Mageplaza\HelloWorld\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'mageplaza_helloworld_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init(\Mageplaza\HelloWorld\Model\Post::class, \Mageplaza\HelloWorld\Model\ResourceModel\Post::class);
	}

}
