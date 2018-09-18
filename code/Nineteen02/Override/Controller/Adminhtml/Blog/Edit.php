<?php
namespace Legaspi\Override\Controller\Adminhtml\Blog;

class Edit extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Legaspi_Override::blogAccess';       
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        parent::__construct($context);
    }
    
    public function execute()
    {
        return $this->resultPageFactory->create();  
    }    
}
