<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSearchableEntityResult StructType
 * @subpackage Structs
 */
class DescribeSearchableEntityResult extends AbstractStructBase
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
     * The pluralLabel
     * @var string
     */
    public $pluralLabel;
    /**
     * Constructor method for DescribeSearchableEntityResult
     * @uses DescribeSearchableEntityResult::setLabel()
     * @uses DescribeSearchableEntityResult::setName()
     * @uses DescribeSearchableEntityResult::setPluralLabel()
     * @param string $label
     * @param string $name
     * @param string $pluralLabel
     */
    public function __construct($label = null, $name = null, $pluralLabel = null)
    {
        $this
            ->setLabel($label)
            ->setName($name)
            ->setPluralLabel($pluralLabel);
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
     * @return \SFPartnerApi\v480\StructType\DescribeSearchableEntityResult
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
     * @return \SFPartnerApi\v480\StructType\DescribeSearchableEntityResult
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
     * Get pluralLabel value
     * @return string|null
     */
    public function getPluralLabel()
    {
        return $this->pluralLabel;
    }
    /**
     * Set pluralLabel value
     * @param string $pluralLabel
     * @return \SFPartnerApi\v480\StructType\DescribeSearchableEntityResult
     */
    public function setPluralLabel($pluralLabel = null)
    {
        // validation for constraint: string
        if (!is_null($pluralLabel) && !is_string($pluralLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pluralLabel, true), gettype($pluralLabel)), __LINE__);
        }
        $this->pluralLabel = $pluralLabel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSearchableEntityResult
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
