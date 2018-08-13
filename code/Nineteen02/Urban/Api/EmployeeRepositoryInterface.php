<?php
namespace Nineteen02\Urban\Api;

use Nineteen02\Urban\Api\Data\EmployeeInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface EmployeeRepositoryInterface 
{
    public function save(EmployeeInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(EmployeeInterface $page);

    public function deleteById($id);
}
