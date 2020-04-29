<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScopeInfo StructType
 * @subpackage Structs
 */
class ScopeInfo extends AbstractStructBase
{
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for ScopeInfo
     * @uses ScopeInfo::setLabel()
     * @uses ScopeInfo::setName()
     * @param string $label
     * @param string $name
     */
    public function __construct($label = null, $name = null)
    {
        $this
            ->setLabel($label)
            ->setName($name);
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
     * @return \SFPartnerApi\v480\StructType\ScopeInfo
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\ScopeInfo
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ScopeInfo
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
