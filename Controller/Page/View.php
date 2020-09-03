<?php

declare(strict_types=1);

namespace Rd\CustomModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class View extends Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $block = $page->getLayout()->getBlock('rd.custom.layout.example');
        $customParameter = 'New custom Data from the Controller';
        $block->setData('custom_parameter', $customParameter);
        return $page;
    }
}