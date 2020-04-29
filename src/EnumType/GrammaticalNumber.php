<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for GrammaticalNumber EnumType
 * @subpackage Enumerations
 */
class GrammaticalNumber
{
    /**
     * Constant for value 'Singular'
     * @return string 'Singular'
     */
    const VALUE_SINGULAR = 'Singular';
    /**
     * Constant for value 'Plural'
     * @return string 'Plural'
     */
    const VALUE_PLURAL = 'Plural';
    /**
     * Constant for value 'Dual'
     * @return string 'Dual'
     */
    const VALUE_DUAL = 'Dual';
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
     * @uses self::VALUE_SINGULAR
     * @uses self::VALUE_PLURAL
     * @uses self::VALUE_DUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGULAR,
            self::VALUE_PLURAL,
            self::VALUE_DUAL,
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
