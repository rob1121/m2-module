<?php namespace Legaspi\override\Ui\Component\Listing\DataProviders\Legaspi\Override\Blog;

class Lists extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Legaspi\Override\Model\ResourceModel\Blog\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
