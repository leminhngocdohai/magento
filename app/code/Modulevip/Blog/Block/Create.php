<?php


namespace Modulevip\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;

class Create extends Template
{
    // protected $_postCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     *
     */
    public function __construct(
        Context $context)
    {
        parent::__construct($context);
    }

    public function alo()
    {
        return __('Hello World');
    }

}
