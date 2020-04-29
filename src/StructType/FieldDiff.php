<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldDiff StructType
 * @subpackage Structs
 */
class FieldDiff extends AbstractStructBase
{
    /**
     * The difference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    public $difference;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for FieldDiff
     * @uses FieldDiff::setDifference()
     * @uses FieldDiff::setName()
     * @param string $difference
     * @param string $name
     */
    public function __construct($difference = null, $name = null)
    {
        $this
            ->setDifference($difference)
            ->setName($name);
    }
    /**
     * Get difference value
     * @return string
     */
    public function getDifference()
    {
        return $this->difference;
    }
    /**
     * Set difference value
     * @uses \SFPartnerApi\v480\EnumType\DifferenceType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\DifferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $difference
     * @return \SFPartnerApi\v480\StructType\FieldDiff
     */
    public function setDifference($difference = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\DifferenceType::valueIsValid($difference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\DifferenceType', is_array($difference) ? implode(', ', $difference) : var_export($difference, true), implode(', ', \SFPartnerApi\v480\EnumType\DifferenceType::getValidValues())), __LINE__);
        }
        $this->difference = $difference;
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
     * @return \SFPartnerApi\v480\StructType\FieldDiff
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
     * @return \SFPartnerApi\v480\StructType\FieldDiff
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
