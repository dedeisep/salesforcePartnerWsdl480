<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for Possessive EnumType
 * @subpackage Enumerations
 */
class Possessive
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'First'
     * @return string 'First'
     */
    const VALUE_FIRST = 'First';
    /**
     * Constant for value 'Second'
     * @return string 'Second'
     */
    const VALUE_SECOND = 'Second';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_FIRST
     * @uses self::VALUE_SECOND
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FIRST,
            self::VALUE_SECOND,
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
