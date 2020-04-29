<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PicklistEntry StructType
 * @subpackage Structs
 */
class PicklistEntry extends AbstractStructBase
{
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The defaultValue
     * @var bool
     */
    public $defaultValue;
    /**
     * The label
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $label;
    /**
     * The validFor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $validFor;
    /**
     * The value
     * @var string
     */
    public $value;
    /**
     * Constructor method for PicklistEntry
     * @uses PicklistEntry::setActive()
     * @uses PicklistEntry::setDefaultValue()
     * @uses PicklistEntry::setLabel()
     * @uses PicklistEntry::setValidFor()
     * @uses PicklistEntry::setValue()
     * @param bool $active
     * @param bool $defaultValue
     * @param string $label
     * @param string $validFor
     * @param string $value
     */
    public function __construct($active = null, $defaultValue = null, $label = null, $validFor = null, $value = null)
    {
        $this
            ->setActive($active)
            ->setDefaultValue($defaultValue)
            ->setLabel($label)
            ->setValidFor($validFor)
            ->setValue($value);
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \SFPartnerApi\v480\StructType\PicklistEntry
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get defaultValue value
     * @return bool|null
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param bool $defaultValue
     * @return \SFPartnerApi\v480\StructType\PicklistEntry
     */
    public function setDefaultValue($defaultValue = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultValue) && !is_bool($defaultValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\PicklistEntry
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get validFor value
     * @return string|null
     */
    public function getValidFor()
    {
        return $this->validFor;
    }
    /**
     * Set validFor value
     * @param string $validFor
     * @return \SFPartnerApi\v480\StructType\PicklistEntry
     */
    public function setValidFor($validFor = null)
    {
        // validation for constraint: string
        if (!is_null($validFor) && !is_string($validFor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFor, true), gettype($validFor)), __LINE__);
        }
        $this->validFor = $validFor;
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
     * @return \SFPartnerApi\v480\StructType\PicklistEntry
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
     * @return \SFPartnerApi\v480\StructType\PicklistEntry
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
