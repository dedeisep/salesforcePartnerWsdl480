<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServerTimestampResult StructType
 * @subpackage Structs
 */
class GetServerTimestampResult extends AbstractStructBase
{
    /**
     * The timestamp
     * @var string
     */
    public $timestamp;
    /**
     * Constructor method for GetServerTimestampResult
     * @uses GetServerTimestampResult::setTimestamp()
     * @param string $timestamp
     */
    public function __construct($timestamp = null)
    {
        $this
            ->setTimestamp($timestamp);
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \SFPartnerApi\v480\StructType\GetServerTimestampResult
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\GetServerTimestampResult
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
