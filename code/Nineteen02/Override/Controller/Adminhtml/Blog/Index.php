<?php
namespace Legaspi\Override\Controller\Adminhtml\Blog;

class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Legaspi_Override::blogAccess';  
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/index/index');
        return $resultRedirect;
    }     
}
