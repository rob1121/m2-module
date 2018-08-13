<?php
namespace Nineteen02\Urban\Controller\Adminhtml\Employee;

class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Nineteen02_Urban::employees';  
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/index/index');
        return $resultRedirect;
    }     
}
