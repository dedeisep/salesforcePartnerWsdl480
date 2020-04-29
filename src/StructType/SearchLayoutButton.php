<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchLayoutButton StructType
 * @subpackage Structs
 */
class SearchLayoutButton extends AbstractStructBase
{
    /**
     * The apiName
     * @var string
     */
    public $apiName;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * Constructor method for SearchLayoutButton
     * @uses SearchLayoutButton::setApiName()
     * @uses SearchLayoutButton::setLabel()
     * @param string $apiName
     * @param string $label
     */
    public function __construct($apiName = null, $label = null)
    {
        $this
            ->setApiName($apiName)
            ->setLabel($label);
    }
    /**
     * Get apiName value
     * @return string|null
     */
    public function getApiName()
    {
        return $this->apiName;
    }
    /**
     * Set apiName value
     * @param string $apiName
     * @return \SFPartnerApi\v480\StructType\SearchLayoutButton
     */
    public function setApiName($apiName = null)
    {
        // validation for constraint: string
        if (!is_null($apiName) && !is_string($apiName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiName, true), gettype($apiName)), __LINE__);
        }
        $this->apiName = $apiName;
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
     * @return \SFPartnerApi\v480\StructType\SearchLayoutButton
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchLayoutButton
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
