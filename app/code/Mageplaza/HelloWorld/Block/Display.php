<?php
namespace Mageplaza\HelloWorld\Block;
use \Magento\Framework\View\Element\Template\Context;

class Display extends \Magento\Framework\View\Element\Template
{
	public function __construct(Context $context)
	{
		parent::__construct($context);
	}
	public function sayHello()
	{
		return __('Hello World');
	}
}