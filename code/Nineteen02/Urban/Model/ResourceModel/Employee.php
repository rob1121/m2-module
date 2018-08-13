<?php
namespace Nineteen02\Urban\Model\ResourceModel;
class Employee extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('nineteen02_urban_employee','employee_id');
    }
}
