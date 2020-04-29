<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StreamingEnabledHeader StructType
 * @subpackage Structs
 */
class StreamingEnabledHeader extends AbstractStructBase
{
    /**
     * The streamingEnabled
     * @var bool
     */
    public $streamingEnabled;
    /**
     * Constructor method for StreamingEnabledHeader
     * @uses StreamingEnabledHeader::setStreamingEnabled()
     * @param bool $streamingEnabled
     */
    public function __construct($streamingEnabled = null)
    {
        $this
            ->setStreamingEnabled($streamingEnabled);
    }
    /**
     * Get streamingEnabled value
     * @return bool|null
     */
    public function getStreamingEnabled()
    {
        return $this->streamingEnabled;
    }
    /**
     * Set streamingEnabled value
     * @param bool $streamingEnabled
     * @return \SFPartnerApi\v480\StructType\StreamingEnabledHeader
     */
    public function setStreamingEnabled($streamingEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($streamingEnabled) && !is_bool($streamingEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($streamingEnabled, true), gettype($streamingEnabled)), __LINE__);
        }
        $this->streamingEnabled = $streamingEnabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\StreamingEnabledHeader
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
