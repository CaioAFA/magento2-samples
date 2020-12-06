<?php

namespace Caio\DataSend\Controller\Adminhtml\AdminSample;

class AdminPost extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    protected $jsonHelper;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context  $context
     * @param \Magento\Framework\Json\Helper\Data $jsonHelper
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Json\Helper\Data $jsonHelper
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->jsonHelper = $jsonHelper;
        parent::__construct($context);
    }

    /**
     * Create json response
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function createJsonResponse($response = '')
    {
        return $this->getResponse()->representJson(
            $this->jsonHelper->jsonEncode($response)
        );
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            $data = $this->getRequest()->getPostValue();
            $dataPayload = $data["payload"];
            $response = 'Olá! Você submeteu o valor ' . $dataPayload . ' ';
            $response = $response . 'ao arquivo app/code/Caio/DataSend/Controller/Adminhtml/Adminsample/AdminPost.php! ';
            $response = $response . 'Espero que tenha aprendido algo ;)';
            return $this->createJsonResponse($response);
        }        
        catch (\Exception $e) {
            return $this->createJsonResponse($e->getMessage());
        }
    }
}