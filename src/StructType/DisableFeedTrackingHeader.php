<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisableFeedTrackingHeader StructType
 * @subpackage Structs
 */
class DisableFeedTrackingHeader extends AbstractStructBase
{
    /**
     * The disableFeedTracking
     * @var bool
     */
    public $disableFeedTracking;
    /**
     * Constructor method for DisableFeedTrackingHeader
     * @uses DisableFeedTrackingHeader::setDisableFeedTracking()
     * @param bool $disableFeedTracking
     */
    public function __construct($disableFeedTracking = null)
    {
        $this
            ->setDisableFeedTracking($disableFeedTracking);
    }
    /**
     * Get disableFeedTracking value
     * @return bool|null
     */
    public function getDisableFeedTracking()
    {
        return $this->disableFeedTracking;
    }
    /**
     * Set disableFeedTracking value
     * @param bool $disableFeedTracking
     * @return \SFPartnerApi\v480\StructType\DisableFeedTrackingHeader
     */
    public function setDisableFeedTracking($disableFeedTracking = null)
    {
        // validation for constraint: boolean
        if (!is_null($disableFeedTracking) && !is_bool($disableFeedTracking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disableFeedTracking, true), gettype($disableFeedTracking)), __LINE__);
        }
        $this->disableFeedTracking = $disableFeedTracking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DisableFeedTrackingHeader
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
