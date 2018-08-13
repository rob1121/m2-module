<?php
namespace Nineteen02\Urban\Model\ResourceModel\Employee;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Nineteen02\Urban\Model\Employee','Nineteen02\Urban\Model\ResourceModel\Employee');
    }
}
