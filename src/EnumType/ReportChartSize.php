<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for ReportChartSize EnumType
 * @subpackage Enumerations
 */
class ReportChartSize
{
    /**
     * Constant for value 'SMALL'
     * @return string 'SMALL'
     */
    const VALUE_SMALL = 'SMALL';
    /**
     * Constant for value 'MEDIUM'
     * @return string 'MEDIUM'
     */
    const VALUE_MEDIUM = 'MEDIUM';
    /**
     * Constant for value 'LARGE'
     * @return string 'LARGE'
     */
    const VALUE_LARGE = 'LARGE';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_SMALL
     * @uses self::VALUE_MEDIUM
     * @uses self::VALUE_LARGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SMALL,
            self::VALUE_MEDIUM,
            self::VALUE_LARGE,
        );
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
