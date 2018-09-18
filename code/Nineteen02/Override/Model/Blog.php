<?php
namespace Legaspi\Override\Model;
class Blog extends \Magento\Framework\Model\AbstractModel implements \Legaspi\Override\Api\Data\BlogInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'legaspi_override_blog';

    protected function _construct()
    {
        $this->_init('Legaspi\Override\Model\ResourceModel\Blog');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
