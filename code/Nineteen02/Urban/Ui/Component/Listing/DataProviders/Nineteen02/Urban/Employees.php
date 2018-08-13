<?php
namespace Nineteen02\Urban\Ui\Component\Listing\DataProviders\Nineteen02\Urban;

class Employees extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Nineteen02\Urban\Model\ResourceModel\Employee\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
