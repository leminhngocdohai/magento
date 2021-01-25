<?php


namespace Modulevip\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
// use \Modulevip\Blog\Model\ResourceModel\Post\Collection;
use \Modulevip\Blog\Model\ResourceModel\Post\CollectionFactory;
use \Modulevip\Blog\Model\Post;

class Index extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_postCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param CollectionFactory $postCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        CollectionFactory $postCollectionFactory,
        array $data = [])
    {
        $this->_postCollectionFactory = $postCollectionFactory;
        parent::__construct($context, $data);
    }

    public function sayHello()
    {
        return __('Hello World');
    }

    /**
     * @return Post[]
     */
    public function getPosts()
    {
        /** @var PostCollection $postCollection */
        $postCollection = $this->_postCollectionFactory->create();
        $postCollection->addFieldToSelect('*')->load();
        return $postCollection->getItems();
    }

    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    public function getPostUrl(
        Post $post
    ) {
        return '/blog/post/edit/id/' . $post->getId();
    }

    /**
     * For a given post, returns its url
     * @return string
     */
    public function getCreatePostUrl() {
        return '/blog/post/create';
    }
}
