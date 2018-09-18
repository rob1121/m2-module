<?php namespace Legaspi\Override\Controller\Adminhtml\Invoice;


class Send extends \Magento\Backend\App\Action {

    protected $invoiceSender;
    protected $orderRepository;
    protected $request;
    
  public function __construct(
      \Magento\Backend\App\Action\Context $context,
      \Magento\Sales\Model\Order\Email\Sender\InvoiceSender $invoiceSender,
      \Magento\Framework\App\Request\Http $request,
      \Magento\Sales\Api\OrderRepositoryInterface $orderRepository
  ) {
    $this->invoiceSender = $invoiceSender;
      $this->orderRepository = $orderRepository;
      $this->$request = $request;

      parent::__construct($context);
  }
  
  protected function _isAllowed()
  {
      return true;
  }
  
  public function execute() {
    $request = $this->request->getParams();
print_r($request);
exit;
    $order = $this->orderRepository->get($request['order_id']);

    foreach($order->getInvoiceCollection() as $invoice) {
      $this->invoiceSender->send($invoice);
    }

  }
}