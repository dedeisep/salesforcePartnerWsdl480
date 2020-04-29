<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebuggingInfo StructType
 * @subpackage Structs
 */
class DebuggingInfo extends AbstractStructBase
{
    /**
     * The debugLog
     * @var string
     */
    public $debugLog;
    /**
     * Constructor method for DebuggingInfo
     * @uses DebuggingInfo::setDebugLog()
     * @param string $debugLog
     */
    public function __construct($debugLog = null)
    {
        $this
            ->setDebugLog($debugLog);
    }
    /**
     * Get debugLog value
     * @return string|null
     */
    public function getDebugLog()
    {
        return $this->debugLog;
    }
    /**
     * Set debugLog value
     * @param string $debugLog
     * @return \SFPartnerApi\v480\StructType\DebuggingInfo
     */
    public function setDebugLog($debugLog = null)
    {
        // validation for constraint: string
        if (!is_null($debugLog) && !is_string($debugLog)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debugLog, true), gettype($debugLog)), __LINE__);
        }
        $this->debugLog = $debugLog;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DebuggingInfo
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
