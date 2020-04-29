<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for differenceType EnumType
 * @subpackage Enumerations
 */
class DifferenceType
{
    /**
     * Constant for value 'DIFFERENT'
     * @return string 'DIFFERENT'
     */
    const VALUE_DIFFERENT = 'DIFFERENT';
    /**
     * Constant for value 'NULL'
     * @return string 'NULL'
     */
    const VALUE_NULL = 'NULL';
    /**
     * Constant for value 'SAME'
     * @return string 'SAME'
     */
    const VALUE_SAME = 'SAME';
    /**
     * Constant for value 'SIMILAR'
     * @return string 'SIMILAR'
     */
    const VALUE_SIMILAR = 'SIMILAR';
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
     * @uses self::VALUE_DIFFERENT
     * @uses self::VALUE_NULL
     * @uses self::VALUE_SAME
     * @uses self::VALUE_SIMILAR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DIFFERENT,
            self::VALUE_NULL,
            self::VALUE_SAME,
            self::VALUE_SIMILAR,
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
