<?php
namespace Nineteen02\Urban\Model;
class Employee extends \Magento\Framework\Model\AbstractModel implements \Nineteen02\Urban\Api\Data\EmployeeInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'nineteen02_urban_employee';

    protected function _construct()
    {
        $this->_init('Nineteen02\Urban\Model\ResourceModel\Employee');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
