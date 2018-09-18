<?php
namespace Legaspi\Override\Model\ResourceModel\Blog;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Legaspi\Override\Model\Blog','Legaspi\Override\Model\ResourceModel\Blog');
    }
}
