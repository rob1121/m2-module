<?php namespace Mageplaza\HelloWorld\Observer;

class DeleteNotification implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$post = $observer->getData('mp_post');
		echo $post->getPost()->getName() . " - Event </br>";
		$post->setText('Execute event successfully.');

		return $this;
	}
}