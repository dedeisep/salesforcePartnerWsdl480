<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for orderByDirection EnumType
 * @subpackage Enumerations
 */
class OrderByDirection
{
    /**
     * Constant for value 'ascending'
     * @return string 'ascending'
     */
    const VALUE_ASCENDING = 'ascending';
    /**
     * Constant for value 'descending'
     * @return string 'descending'
     */
    const VALUE_DESCENDING = 'descending';
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
     * @uses self::VALUE_ASCENDING
     * @uses self::VALUE_DESCENDING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASCENDING,
            self::VALUE_DESCENDING,
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
