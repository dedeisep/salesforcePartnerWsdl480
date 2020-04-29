<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeSObject StructType
 * @subpackage Structs
 */
class DescribeSObject extends AbstractStructBase
{
    /**
     * The sObjectType
     * @var string
     */
    public $sObjectType;
    /**
     * Constructor method for describeSObject
     * @uses DescribeSObject::setSObjectType()
     * @param string $sObjectType
     */
    public function __construct($sObjectType = null)
    {
        $this
            ->setSObjectType($sObjectType);
    }
    /**
     * Get sObjectType value
     * @return string|null
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }
    /**
     * Set sObjectType value
     * @param string $sObjectType
     * @return \SFPartnerApi\v480\StructType\DescribeSObject
     */
    public function setSObjectType($sObjectType = null)
    {
        // validation for constraint: string
        if (!is_null($sObjectType) && !is_string($sObjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sObjectType, true), gettype($sObjectType)), __LINE__);
        }
        $this->sObjectType = $sObjectType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSObject
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
