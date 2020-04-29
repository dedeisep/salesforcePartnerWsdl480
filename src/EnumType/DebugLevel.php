<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for DebugLevel EnumType
 * @subpackage Enumerations
 */
class DebugLevel
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DebugOnly'
     * @return string 'DebugOnly'
     */
    const VALUE_DEBUG_ONLY = 'DebugOnly';
    /**
     * Constant for value 'Db'
     * @return string 'Db'
     */
    const VALUE_DB = 'Db';
    /**
     * Constant for value 'Profiling'
     * @return string 'Profiling'
     */
    const VALUE_PROFILING = 'Profiling';
    /**
     * Constant for value 'Callout'
     * @return string 'Callout'
     */
    const VALUE_CALLOUT = 'Callout';
    /**
     * Constant for value 'Detail'
     * @return string 'Detail'
     */
    const VALUE_DETAIL = 'Detail';
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
     * @uses self::VALUE_DEBUG_ONLY
     * @uses self::VALUE_DB
     * @uses self::VALUE_PROFILING
     * @uses self::VALUE_CALLOUT
     * @uses self::VALUE_DETAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DEBUG_ONLY,
            self::VALUE_DB,
            self::VALUE_PROFILING,
            self::VALUE_CALLOUT,
            self::VALUE_DETAIL,
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
