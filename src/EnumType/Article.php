<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for Article EnumType
 * @subpackage Enumerations
 */
class Article
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Indefinite'
     * @return string 'Indefinite'
     */
    const VALUE_INDEFINITE = 'Indefinite';
    /**
     * Constant for value 'Definite'
     * @return string 'Definite'
     */
    const VALUE_DEFINITE = 'Definite';
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
     * @uses self::VALUE_INDEFINITE
     * @uses self::VALUE_DEFINITE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_INDEFINITE,
            self::VALUE_DEFINITE,
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
