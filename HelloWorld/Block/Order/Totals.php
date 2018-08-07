<?php
namespace Mageplaza\HelloWorld\Block\Order;
class Totals extends \Magento\Framework\View\Element\AbstractBlock
{
   public function initTotals()
   {
       $orderTotalsBlock = $this->getParentBlock();
       $order = $orderTotalsBlock->getOrder();
       if ($order->getNewTotalAmount() > 0) {
           $orderTotalsBlock->addTotal(new \Magento\Framework\DataObject([
               'code'       => 'new_total',
               'label'      => __('New Total'),
               'value'      => $order->getNewTotalAmount(),
               'base_value' => $order->getNewTotalBaseAmount(),
           ]), 'subtotal');
       }
   }
}