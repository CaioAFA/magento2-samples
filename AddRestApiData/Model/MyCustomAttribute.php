<?php

namespace Caio\AddRestApiData\Model;

class MyCustomAttribute
    extends \Magento\Framework\Model\AbstractExtensibleModel
    implements \Caio\AddRestApiData\Api\Data\MyCustomAttributeInterface
{
    //@codeCoverageIgnoreStart

    /**
     * Get my string value
     *
     * @return string
     */
    public function getMyStringValue(){
        return $this->getData(self::MY_STRING_VALUE);
    }

    /**
     * Set my string value
     *
     * @param string $value
     * @return void
     */
    public function setMyStringValue($value){
        return $this->setData(self::MY_STRING_VALUE, $value);
    }

    /**
     * Get my bool value
     *
     * @return bool
     */
    public function getMyBoolValue(){
        return $this->getData(self::MY_BOOL_VALUE);
    }

    /**
     * Set my bool value
     *
     * @param string $value
     * @return void
     */
    public function setMyBoolValue($value){
        return $this->setData(self::MY_BOOL_VALUE, $value);
    }

    /**
     * Get my int value
     *
     * @return int
     */
    public function getMyIntValue(){
        return $this->getData(self::MY_INT_VALUE);
    }

    /**
     * Set my int value
     *
     * @param int $value
     * @return void
     */
    public function setMyIntValue($value){
        return $this->setData(self::MY_INT_VALUE, $value);
    }

    /**
     * Get my float value
     *
     * @return float
     */
    public function getMyFloatValue(){
        return $this->getData(self::MY_FLOAT_VALUE);
    }

    /**
     * Set my float value
     *
     * @param float $value
     * @return void
     */
    public function setMyFloatValue($value){
        return $this->setData(self::MY_FLOAT_VALUE, $value);
    }

    /**
     * {@inheritdoc}
     *
     * @return \Caio\AddRestApiData\Api\Data\MyCustomAttributeExtensionInterface|null
     */
    public function getExtensionAttributes(){
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     *
     * @param \Caio\AddRestApiData\Api\Data\MyCustomAttributeExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Caio\AddRestApiData\Api\Data\MyCustomAttributeExtensionInterface $extensionAttributes
    ){
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
