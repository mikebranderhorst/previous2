<?php

namespace Branderhorst\Previous2\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory = null
    ) {
        $this->resultPageFactory = $resultPageFactory ?: ObjectManager::getInstance()->get(PageFactory::class);
        parent::__construct($context);
    }

    /**
     * Customer previous
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('My Previous'));
        return $resultPage;
    }
}
