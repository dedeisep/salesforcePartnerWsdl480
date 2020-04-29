<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeQuickActionDefaultValue StructType
 * @subpackage Structs
 */
class DescribeQuickActionDefaultValue extends AbstractStructBase
{
    /**
     * The defaultValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $defaultValue;
    /**
     * The field
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var string
     */
    public $field;
    /**
     * Constructor method for DescribeQuickActionDefaultValue
     * @uses DescribeQuickActionDefaultValue::setDefaultValue()
     * @uses DescribeQuickActionDefaultValue::setField()
     * @param string $defaultValue
     * @param string $field
     */
    public function __construct($defaultValue = null, $field = null)
    {
        $this
            ->setDefaultValue($defaultValue)
            ->setField($field);
    }
    /**
     * Get defaultValue value
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param string $defaultValue
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        return $this;
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue
     */
    public function setField($field = null)
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
