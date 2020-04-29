<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for orderByNullsPosition EnumType
 * @subpackage Enumerations
 */
class OrderByNullsPosition
{
    /**
     * Constant for value 'first'
     * @return string 'first'
     */
    const VALUE_FIRST = 'first';
    /**
     * Constant for value 'last'
     * @return string 'last'
     */
    const VALUE_LAST = 'last';
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
     * @uses self::VALUE_FIRST
     * @uses self::VALUE_LAST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FIRST,
            self::VALUE_LAST,
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
