<?php
namespace Legaspi\Override\Model\ResourceModel;
class Blog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('legaspi_override_blog','blog_id');
    }
}
