<?php
namespace Mageplaza\HelloWorld\Controller\Post;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Mageplaza\HelloWorld\Model\Post;


class Insert extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(Context $context, PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
    }
    
	public function execute()
	{
        $resultRedirect = $this->resultRedirectFactory->create();
		$params         = $this->getRequest()->getParams();
        $newPost    	= $this->_objectManager->create(Post::class);
 
        $newPost->setData( $params );
        $newPost->save();

		echo "<script>alert('Post successfully added!.');</script>";
		
        return $resultRedirect->setPath('helloworld/post/index');
	}
}