<?php
namespace Caio\AddRestApiData\Api\Data;

interface MyCustomAttributeInterface
    extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**#@+
     * Constants defined for keys of array, makes typos less likely
     */
    const MY_STRING_VALUE = 'my_string_value';
    const MY_BOOL_VALUE = 'my_bool_value';
    const MY_INT_VALUE = 'my_int_value';
    const MY_FLOAT_VALUE = 'my_float_value';
    /**#@-*/

    /**
     * Get my string value
     *
     * @return string
     */
    public function getMyStringValue();

    /**
     * Set my string value
     *
     * @param string $value
     * @return void
     */
    public function setMyStringValue($value);

    /**
     * Get my bool value
     *
     * @return bool
     */
    public function getMyBoolValue();

    /**
     * Set my bool value
     *
     * @param string $value
     * @return void
     */
    public function setMyBoolValue($value);

    /**
     * Get my int value
     *
     * @return int
     */
    public function getMyIntValue();

    /**
     * Set my int value
     *
     * @param int $value
     * @return void
     */
    public function setMyIntValue($value);

    /**
     * Get my float value
     *
     * @return float
     */
    public function getMyFloatValue();

    /**
     * Set my float value
     *
     * @param float $value
     * @return void
     */
    public function setMyFloatValue($value);

    /**
     * {@inheritdoc}
     *
     * @return \Caio\AddRestApiData\Api\Data\MyCustomAttributeExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Caio\AddRestApiData\Api\Data\MyCustomAttributeExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Caio\AddRestApiData\Api\Data\MyCustomAttributeExtensionInterface $extensionAttributes
    );
}