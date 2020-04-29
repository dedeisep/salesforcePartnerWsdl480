<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for ShareAccessLevel EnumType
 * @subpackage Enumerations
 */
class ShareAccessLevel
{
    /**
     * Constant for value 'Read'
     * @return string 'Read'
     */
    const VALUE_READ = 'Read';
    /**
     * Constant for value 'Edit'
     * @return string 'Edit'
     */
    const VALUE_EDIT = 'Edit';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_READ
     * @uses self::VALUE_EDIT
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_READ,
            self::VALUE_EDIT,
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
