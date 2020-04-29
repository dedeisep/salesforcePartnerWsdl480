<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribePathAssistantField StructType
 * @subpackage Structs
 */
class DescribePathAssistantField extends AbstractStructBase
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
     * The readOnly
     * @var bool
     */
    public $readOnly;
    /**
     * The required
     * @var bool
     */
    public $required;
    /**
     * Constructor method for DescribePathAssistantField
     * @uses DescribePathAssistantField::setApiName()
     * @uses DescribePathAssistantField::setLabel()
     * @uses DescribePathAssistantField::setReadOnly()
     * @uses DescribePathAssistantField::setRequired()
     * @param string $apiName
     * @param string $label
     * @param bool $readOnly
     * @param bool $required
     */
    public function __construct($apiName = null, $label = null, $readOnly = null, $required = null)
    {
        $this
            ->setApiName($apiName)
            ->setLabel($label)
            ->setReadOnly($readOnly)
            ->setRequired($required);
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
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantField
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
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantField
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
     * Get readOnly value
     * @return bool|null
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }
    /**
     * Set readOnly value
     * @param bool $readOnly
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantField
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readOnly, true), gettype($readOnly)), __LINE__);
        }
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * Get required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantField
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantField
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
