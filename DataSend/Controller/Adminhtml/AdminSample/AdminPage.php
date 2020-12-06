<?php
/**
 * index.php
 *
 * @copyright Copyright © 2019 Ethinkers. All rights reserved.
 * @author    desenvolvimento@e-thinkers.com.br
 */
namespace Caio\DataSend\Controller\Adminhtml\AdminSample;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class AdminPage extends Action
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
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    
    /**
     * Check the permission to run it
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        // Permissão necessária para entrar na página (definido em etc/acl.xml)
        return $this->_authorization->isAllowed('Caio_DataSend::datasend');
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Caio_DataSend::datasend');
        $resultPage->getConfig()->getTitle()->prepend(__('Data Send - Envio de Dados'));

        return $resultPage;
    }
}
