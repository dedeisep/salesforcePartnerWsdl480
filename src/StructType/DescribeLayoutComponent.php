<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutComponent StructType
 * @subpackage Structs
 */
class DescribeLayoutComponent extends AbstractStructBase
{
    /**
     * The displayLines
     * @var int
     */
    public $displayLines;
    /**
     * The tabOrder
     * @var int
     */
    public $tabOrder;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for DescribeLayoutComponent
     * @uses DescribeLayoutComponent::setDisplayLines()
     * @uses DescribeLayoutComponent::setTabOrder()
     * @uses DescribeLayoutComponent::setType()
     * @uses DescribeLayoutComponent::setValue()
     * @param int $displayLines
     * @param int $tabOrder
     * @param string $type
     * @param string $value
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null, $value = null)
    {
        $this
            ->setDisplayLines($displayLines)
            ->setTabOrder($tabOrder)
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get displayLines value
     * @return int|null
     */
    public function getDisplayLines()
    {
        return $this->displayLines;
    }
    /**
     * Set displayLines value
     * @param int $displayLines
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutComponent
     */
    public function setDisplayLines($displayLines = null)
    {
        // validation for constraint: int
        if (!is_null($displayLines) && !(is_int($displayLines) || ctype_digit($displayLines))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayLines, true), gettype($displayLines)), __LINE__);
        }
        $this->displayLines = $displayLines;
        return $this;
    }
    /**
     * Get tabOrder value
     * @return int|null
     */
    public function getTabOrder()
    {
        return $this->tabOrder;
    }
    /**
     * Set tabOrder value
     * @param int $tabOrder
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutComponent
     */
    public function setTabOrder($tabOrder = null)
    {
        // validation for constraint: int
        if (!is_null($tabOrder) && !(is_int($tabOrder) || ctype_digit($tabOrder))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tabOrder, true), gettype($tabOrder)), __LINE__);
        }
        $this->tabOrder = $tabOrder;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \SFPartnerApi\v480\EnumType\LayoutComponentType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\LayoutComponentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutComponent
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\LayoutComponentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\LayoutComponentType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \SFPartnerApi\v480\EnumType\LayoutComponentType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutComponent
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutComponent
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
