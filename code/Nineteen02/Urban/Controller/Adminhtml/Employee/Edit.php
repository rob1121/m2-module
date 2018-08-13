<?php namespace Nineteen02\Urban\Controller\Adminhtml\Employee;

class Edit extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Nineteen02_Urban::employees';       
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