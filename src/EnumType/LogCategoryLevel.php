<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for LogCategoryLevel EnumType
 * @subpackage Enumerations
 */
class LogCategoryLevel
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Finest'
     * @return string 'Finest'
     */
    const VALUE_FINEST = 'Finest';
    /**
     * Constant for value 'Finer'
     * @return string 'Finer'
     */
    const VALUE_FINER = 'Finer';
    /**
     * Constant for value 'Fine'
     * @return string 'Fine'
     */
    const VALUE_FINE = 'Fine';
    /**
     * Constant for value 'Debug'
     * @return string 'Debug'
     */
    const VALUE_DEBUG = 'Debug';
    /**
     * Constant for value 'Info'
     * @return string 'Info'
     */
    const VALUE_INFO = 'Info';
    /**
     * Constant for value 'Warn'
     * @return string 'Warn'
     */
    const VALUE_WARN = 'Warn';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
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
     * @uses self::VALUE_FINEST
     * @uses self::VALUE_FINER
     * @uses self::VALUE_FINE
     * @uses self::VALUE_DEBUG
     * @uses self::VALUE_INFO
     * @uses self::VALUE_WARN
     * @uses self::VALUE_ERROR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_FINEST,
            self::VALUE_FINER,
            self::VALUE_FINE,
            self::VALUE_DEBUG,
            self::VALUE_INFO,
            self::VALUE_WARN,
            self::VALUE_ERROR,
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
