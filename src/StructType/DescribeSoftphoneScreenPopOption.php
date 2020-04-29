<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoftphoneScreenPopOption StructType
 * @subpackage Structs
 */
class DescribeSoftphoneScreenPopOption extends AbstractStructBase
{
    /**
     * The matchType
     * @var string
     */
    public $matchType;
    /**
     * The screenPopData
     * @var string
     */
    public $screenPopData;
    /**
     * The screenPopType
     * @var string
     */
    public $screenPopType;
    /**
     * Constructor method for DescribeSoftphoneScreenPopOption
     * @uses DescribeSoftphoneScreenPopOption::setMatchType()
     * @uses DescribeSoftphoneScreenPopOption::setScreenPopData()
     * @uses DescribeSoftphoneScreenPopOption::setScreenPopType()
     * @param string $matchType
     * @param string $screenPopData
     * @param string $screenPopType
     */
    public function __construct($matchType = null, $screenPopData = null, $screenPopType = null)
    {
        $this
            ->setMatchType($matchType)
            ->setScreenPopData($screenPopData)
            ->setScreenPopType($screenPopType);
    }
    /**
     * Get matchType value
     * @return string|null
     */
    public function getMatchType()
    {
        return $this->matchType;
    }
    /**
     * Set matchType value
     * @param string $matchType
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption
     */
    public function setMatchType($matchType = null)
    {
        // validation for constraint: string
        if (!is_null($matchType) && !is_string($matchType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchType, true), gettype($matchType)), __LINE__);
        }
        $this->matchType = $matchType;
        return $this;
    }
    /**
     * Get screenPopData value
     * @return string|null
     */
    public function getScreenPopData()
    {
        return $this->screenPopData;
    }
    /**
     * Set screenPopData value
     * @param string $screenPopData
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption
     */
    public function setScreenPopData($screenPopData = null)
    {
        // validation for constraint: string
        if (!is_null($screenPopData) && !is_string($screenPopData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenPopData, true), gettype($screenPopData)), __LINE__);
        }
        $this->screenPopData = $screenPopData;
        return $this;
    }
    /**
     * Get screenPopType value
     * @return string|null
     */
    public function getScreenPopType()
    {
        return $this->screenPopType;
    }
    /**
     * Set screenPopType value
     * @param string $screenPopType
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption
     */
    public function setScreenPopType($screenPopType = null)
    {
        // validation for constraint: string
        if (!is_null($screenPopType) && !is_string($screenPopType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenPopType, true), gettype($screenPopType)), __LINE__);
        }
        $this->screenPopType = $screenPopType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneScreenPopOption
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
