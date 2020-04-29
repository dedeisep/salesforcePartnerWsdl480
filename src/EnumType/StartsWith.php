<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for StartsWith EnumType
 * @subpackage Enumerations
 */
class StartsWith
{
    /**
     * Constant for value 'Consonant'
     * @return string 'Consonant'
     */
    const VALUE_CONSONANT = 'Consonant';
    /**
     * Constant for value 'Vowel'
     * @return string 'Vowel'
     */
    const VALUE_VOWEL = 'Vowel';
    /**
     * Constant for value 'Special'
     * @return string 'Special'
     */
    const VALUE_SPECIAL = 'Special';
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
     * @uses self::VALUE_CONSONANT
     * @uses self::VALUE_VOWEL
     * @uses self::VALUE_SPECIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONSONANT,
            self::VALUE_VOWEL,
            self::VALUE_SPECIAL,
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
