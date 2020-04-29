<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnerChangeOption StructType
 * @subpackage Structs
 */
class OwnerChangeOption extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The execute
     * @var bool
     */
    public $execute;
    /**
     * Constructor method for OwnerChangeOption
     * @uses OwnerChangeOption::setType()
     * @uses OwnerChangeOption::setExecute()
     * @param string $type
     * @param bool $execute
     */
    public function __construct($type = null, $execute = null)
    {
        $this
            ->setType($type)
            ->setExecute($execute);
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
     * @uses \SFPartnerApi\v480\EnumType\OwnerChangeOptionType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\OwnerChangeOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\OwnerChangeOption
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\OwnerChangeOptionType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\OwnerChangeOptionType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \SFPartnerApi\v480\EnumType\OwnerChangeOptionType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get execute value
     * @return bool|null
     */
    public function getExecute()
    {
        return $this->execute;
    }
    /**
     * Set execute value
     * @param bool $execute
     * @return \SFPartnerApi\v480\StructType\OwnerChangeOption
     */
    public function setExecute($execute = null)
    {
        // validation for constraint: boolean
        if (!is_null($execute) && !is_bool($execute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($execute, true), gettype($execute)), __LINE__);
        }
        $this->execute = $execute;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\OwnerChangeOption
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
