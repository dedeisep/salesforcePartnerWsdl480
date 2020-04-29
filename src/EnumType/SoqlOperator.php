<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for soqlOperator EnumType
 * @subpackage Enumerations
 */
class SoqlOperator
{
    /**
     * Constant for value 'equals'
     * @return string 'equals'
     */
    const VALUE_EQUALS = 'equals';
    /**
     * Constant for value 'excludes'
     * @return string 'excludes'
     */
    const VALUE_EXCLUDES = 'excludes';
    /**
     * Constant for value 'greaterThan'
     * @return string 'greaterThan'
     */
    const VALUE_GREATER_THAN = 'greaterThan';
    /**
     * Constant for value 'greaterThanOrEqualTo'
     * @return string 'greaterThanOrEqualTo'
     */
    const VALUE_GREATER_THAN_OR_EQUAL_TO = 'greaterThanOrEqualTo';
    /**
     * Constant for value 'in'
     * @return string 'in'
     */
    const VALUE_IN = 'in';
    /**
     * Constant for value 'includes'
     * @return string 'includes'
     */
    const VALUE_INCLUDES = 'includes';
    /**
     * Constant for value 'lessThan'
     * @return string 'lessThan'
     */
    const VALUE_LESS_THAN = 'lessThan';
    /**
     * Constant for value 'lessThanOrEqualTo'
     * @return string 'lessThanOrEqualTo'
     */
    const VALUE_LESS_THAN_OR_EQUAL_TO = 'lessThanOrEqualTo';
    /**
     * Constant for value 'like'
     * @return string 'like'
     */
    const VALUE_LIKE = 'like';
    /**
     * Constant for value 'notEquals'
     * @return string 'notEquals'
     */
    const VALUE_NOT_EQUALS = 'notEquals';
    /**
     * Constant for value 'notIn'
     * @return string 'notIn'
     */
    const VALUE_NOT_IN = 'notIn';
    /**
     * Constant for value 'within'
     * @return string 'within'
     */
    const VALUE_WITHIN = 'within';
    /**
     * Constant for value 'notLike'
     * @return string 'notLike'
     */
    const VALUE_NOT_LIKE = 'notLike';
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
     * @uses self::VALUE_EQUALS
     * @uses self::VALUE_EXCLUDES
     * @uses self::VALUE_GREATER_THAN
     * @uses self::VALUE_GREATER_THAN_OR_EQUAL_TO
     * @uses self::VALUE_IN
     * @uses self::VALUE_INCLUDES
     * @uses self::VALUE_LESS_THAN
     * @uses self::VALUE_LESS_THAN_OR_EQUAL_TO
     * @uses self::VALUE_LIKE
     * @uses self::VALUE_NOT_EQUALS
     * @uses self::VALUE_NOT_IN
     * @uses self::VALUE_WITHIN
     * @uses self::VALUE_NOT_LIKE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EQUALS,
            self::VALUE_EXCLUDES,
            self::VALUE_GREATER_THAN,
            self::VALUE_GREATER_THAN_OR_EQUAL_TO,
            self::VALUE_IN,
            self::VALUE_INCLUDES,
            self::VALUE_LESS_THAN,
            self::VALUE_LESS_THAN_OR_EQUAL_TO,
            self::VALUE_LIKE,
            self::VALUE_NOT_EQUALS,
            self::VALUE_NOT_IN,
            self::VALUE_WITHIN,
            self::VALUE_NOT_LIKE,
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
