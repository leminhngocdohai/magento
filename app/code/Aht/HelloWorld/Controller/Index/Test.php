<?php

namespace Aht\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Context;
use	Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;

class Test extends Action
{
    protected $_pageFactory;

    public function __construct(PageFactory $pageFactory,Context $context)
    {
        $this->_pageFactory = $pageFactory;
		return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
