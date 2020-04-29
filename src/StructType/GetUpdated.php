<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUpdated StructType
 * @subpackage Structs
 */
class GetUpdated extends AbstractStructBase
{
    /**
     * The sObjectType
     * @var string
     */
    public $sObjectType;
    /**
     * The startDate
     * @var string
     */
    public $startDate;
    /**
     * The endDate
     * @var string
     */
    public $endDate;
    /**
     * Constructor method for getUpdated
     * @uses GetUpdated::setSObjectType()
     * @uses GetUpdated::setStartDate()
     * @uses GetUpdated::setEndDate()
     * @param string $sObjectType
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($sObjectType = null, $startDate = null, $endDate = null)
    {
        $this
            ->setSObjectType($sObjectType)
            ->setStartDate($startDate)
            ->setEndDate($endDate);
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
     * @return \SFPartnerApi\v480\StructType\GetUpdated
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \SFPartnerApi\v480\StructType\GetUpdated
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \SFPartnerApi\v480\StructType\GetUpdated
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\GetUpdated
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
