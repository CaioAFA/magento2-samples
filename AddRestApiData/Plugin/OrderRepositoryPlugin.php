<?php

namespace Caio\AddRestApiData\Plugin;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\Data\OrderSearchResultInterface;
use Magento\Sales\Api\OrderRepositoryInterface;

class OrderRepositoryPlugin
{
    protected $myCustomAttributeFactory;

    public function __construct(
        \Caio\AddRestApiData\Api\Data\MyCustomAttributeInterfaceFactory $myCustomAttributeFactory
    ){
        $this->myCustomAttributeFactory = $myCustomAttributeFactory;
    }

    public function afterGet(OrderRepositoryInterface $subject, OrderInterface $order)
    {
        return $order;
    }

    public function afterGetList(OrderRepositoryInterface $subject, OrderSearchResultInterface $searchResult)
    {
        foreach ($searchResult->getItems() as $order) {
            foreach($order->getAllVisibleItems() as $item){
                // Get model extension attributes
                $ext = $item->getExtensionAttributes();

                // my_simple_custom_attribute
                $ext->setMySimpleCustomAttribute("My Attribute!");
                
                // my_advanced_custom_attribute
                $a = $this->myCustomAttributeFactory->create();
                $a->setMyStringValue('some string');
                $a->setMyBoolValue(false);
                $a->setMyIntValue(19);
                $a->setMyFloatValue(3.14);
                $ext->setMyAdvancedCustomAttribute($a);

                // my_advanced_custom_attribute_array
                $b = $this->myCustomAttributeFactory->create();
                $b->setMyStringValue('other string');
                $b->setMyBoolValue(true);
                $b->setMyIntValue(119);
                $b->setMyFloatValue(13.94);

                $c = $this->myCustomAttributeFactory->create();
                $c->setMyStringValue('wow! other string');
                $c->setMyBoolValue(true);
                $c->setMyIntValue(1199);
                $c->setMyFloatValue(132.94);

                $customArray = [];
                $customArray[] = $b;
                $customArray[] = $c;
                $ext->setMyAdvancedCustomAttributeArray($customArray);

                // Adding custom attributes to API
                $item->setExtensionAttributes($ext);
            }
        }

        return $searchResult;
    }
}
