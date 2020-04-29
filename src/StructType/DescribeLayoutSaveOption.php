<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutSaveOption StructType
 * @subpackage Structs
 */
class DescribeLayoutSaveOption extends AbstractStructBase
{
    /**
     * The defaultValue
     * @var bool
     */
    public $defaultValue;
    /**
     * The isDisplayed
     * @var bool
     */
    public $isDisplayed;
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
     * The restHeaderName
     * @var string
     */
    public $restHeaderName;
    /**
     * The soapHeaderName
     * @var string
     */
    public $soapHeaderName;
    /**
     * Constructor method for DescribeLayoutSaveOption
     * @uses DescribeLayoutSaveOption::setDefaultValue()
     * @uses DescribeLayoutSaveOption::setIsDisplayed()
     * @uses DescribeLayoutSaveOption::setLabel()
     * @uses DescribeLayoutSaveOption::setName()
     * @uses DescribeLayoutSaveOption::setRestHeaderName()
     * @uses DescribeLayoutSaveOption::setSoapHeaderName()
     * @param bool $defaultValue
     * @param bool $isDisplayed
     * @param string $label
     * @param string $name
     * @param string $restHeaderName
     * @param string $soapHeaderName
     */
    public function __construct($defaultValue = null, $isDisplayed = null, $label = null, $name = null, $restHeaderName = null, $soapHeaderName = null)
    {
        $this
            ->setDefaultValue($defaultValue)
            ->setIsDisplayed($isDisplayed)
            ->setLabel($label)
            ->setName($name)
            ->setRestHeaderName($restHeaderName)
            ->setSoapHeaderName($soapHeaderName);
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption
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
     * Get isDisplayed value
     * @return bool|null
     */
    public function getIsDisplayed()
    {
        return $this->isDisplayed;
    }
    /**
     * Set isDisplayed value
     * @param bool $isDisplayed
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption
     */
    public function setIsDisplayed($isDisplayed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDisplayed) && !is_bool($isDisplayed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDisplayed, true), gettype($isDisplayed)), __LINE__);
        }
        $this->isDisplayed = $isDisplayed;
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption
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
     * Get restHeaderName value
     * @return string|null
     */
    public function getRestHeaderName()
    {
        return $this->restHeaderName;
    }
    /**
     * Set restHeaderName value
     * @param string $restHeaderName
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption
     */
    public function setRestHeaderName($restHeaderName = null)
    {
        // validation for constraint: string
        if (!is_null($restHeaderName) && !is_string($restHeaderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restHeaderName, true), gettype($restHeaderName)), __LINE__);
        }
        $this->restHeaderName = $restHeaderName;
        return $this;
    }
    /**
     * Get soapHeaderName value
     * @return string|null
     */
    public function getSoapHeaderName()
    {
        return $this->soapHeaderName;
    }
    /**
     * Set soapHeaderName value
     * @param string $soapHeaderName
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption
     */
    public function setSoapHeaderName($soapHeaderName = null)
    {
        // validation for constraint: string
        if (!is_null($soapHeaderName) && !is_string($soapHeaderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soapHeaderName, true), gettype($soapHeaderName)), __LINE__);
        }
        $this->soapHeaderName = $soapHeaderName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption
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
