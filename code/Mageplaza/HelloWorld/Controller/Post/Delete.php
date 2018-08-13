<?php namespace Mageplaza\HelloWorld\Controller\Post;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Mageplaza\HelloWorld\Model\PostFactory;

class Delete extends Action
{
    protected $_pageFactory;
    protected $_postFactory;

    public function __construct(Context $context, 
                                PageFactory $pageFactory,
                                PostFactory $postFactory)
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        return parent::__construct($context);
    }

    public function execute() 
    {
        $request = $this->getRequest()->getParams();
        $post = $this->_postFactory->create()->load($request['id']);
        // $post->delete();

        // echo "<script>alert('Post successfully deleted!.');</script>";
        

        
		$post = new \Magento\Framework\DataObject(['post' => $post]);
		$this->_eventManager->dispatch('mageplaza_helloworld_delete_notification', ['mp_post' => $post]);
        echo $post->getPost()->getName() . " successfully deleted.";
        echo $post->getPost()->getStatus();
        
        
        // $this->_redirect('*/*/index');
    }
}