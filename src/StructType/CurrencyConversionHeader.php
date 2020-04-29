<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyConversionHeader StructType
 * @subpackage Structs
 */
class CurrencyConversionHeader extends AbstractStructBase
{
    /**
     * The skipCurrencyConversion
     * @var bool
     */
    public $skipCurrencyConversion;
    /**
     * Constructor method for CurrencyConversionHeader
     * @uses CurrencyConversionHeader::setSkipCurrencyConversion()
     * @param bool $skipCurrencyConversion
     */
    public function __construct($skipCurrencyConversion = null)
    {
        $this
            ->setSkipCurrencyConversion($skipCurrencyConversion);
    }
    /**
     * Get skipCurrencyConversion value
     * @return bool|null
     */
    public function getSkipCurrencyConversion()
    {
        return $this->skipCurrencyConversion;
    }
    /**
     * Set skipCurrencyConversion value
     * @param bool $skipCurrencyConversion
     * @return \SFPartnerApi\v480\StructType\CurrencyConversionHeader
     */
    public function setSkipCurrencyConversion($skipCurrencyConversion = null)
    {
        // validation for constraint: boolean
        if (!is_null($skipCurrencyConversion) && !is_bool($skipCurrencyConversion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skipCurrencyConversion, true), gettype($skipCurrencyConversion)), __LINE__);
        }
        $this->skipCurrencyConversion = $skipCurrencyConversion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\CurrencyConversionHeader
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
