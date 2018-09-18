<?php
namespace Legaspi\Override\Api;

use Legaspi\Override\Api\Data\BlogInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface BlogRepositoryInterface 
{
    public function save(BlogInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(BlogInterface $page);

    public function deleteById($id);
}
