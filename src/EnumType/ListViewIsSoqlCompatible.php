<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for listViewIsSoqlCompatible EnumType
 * @subpackage Enumerations
 */
class ListViewIsSoqlCompatible
{
    /**
     * Constant for value 'TRUE'
     * @return string 'TRUE'
     */
    const VALUE_TRUE = 'TRUE';
    /**
     * Constant for value 'FALSE'
     * @return string 'FALSE'
     */
    const VALUE_FALSE = 'FALSE';
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
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
     * @uses self::VALUE_TRUE
     * @uses self::VALUE_FALSE
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TRUE,
            self::VALUE_FALSE,
            self::VALUE_ALL,
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
