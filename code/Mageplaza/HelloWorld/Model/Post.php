<?php namespace Mageplaza\HelloWorld\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface
{
	const TABLE_NAME = 'mageplaza_helloworld_post';
  const CACHE_TAG = self::TABLE_NAME;
  
	protected $_cacheTag = self::TABLE_NAME;
	protected $_eventPrefix = self::TABLE_NAME;

	protected function _construct()
	{
		$this->_init(\Mageplaza\HelloWorld\Model\ResourceModel\Post::class);
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}