<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for EmailPriority EnumType
 * @subpackage Enumerations
 */
class EmailPriority
{
    /**
     * Constant for value 'Highest'
     * @return string 'Highest'
     */
    const VALUE_HIGHEST = 'Highest';
    /**
     * Constant for value 'High'
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Low'
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
    /**
     * Constant for value 'Lowest'
     * @return string 'Lowest'
     */
    const VALUE_LOWEST = 'Lowest';
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
     * @uses self::VALUE_HIGHEST
     * @uses self::VALUE_HIGH
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_LOW
     * @uses self::VALUE_LOWEST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HIGHEST,
            self::VALUE_HIGH,
            self::VALUE_NORMAL,
            self::VALUE_LOW,
            self::VALUE_LOWEST,
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
