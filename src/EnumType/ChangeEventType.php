<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for changeEventType EnumType
 * @subpackage Enumerations
 */
class ChangeEventType
{
    /**
     * Constant for value 'CREATE'
     * @return string 'CREATE'
     */
    const VALUE_CREATE = 'CREATE';
    /**
     * Constant for value 'UPDATE'
     * @return string 'UPDATE'
     */
    const VALUE_UPDATE = 'UPDATE';
    /**
     * Constant for value 'DELETE'
     * @return string 'DELETE'
     */
    const VALUE_DELETE = 'DELETE';
    /**
     * Constant for value 'UNDELETE'
     * @return string 'UNDELETE'
     */
    const VALUE_UNDELETE = 'UNDELETE';
    /**
     * Constant for value 'GAP_CREATE'
     * @return string 'GAP_CREATE'
     */
    const VALUE_GAP_CREATE = 'GAP_CREATE';
    /**
     * Constant for value 'GAP_UPDATE'
     * @return string 'GAP_UPDATE'
     */
    const VALUE_GAP_UPDATE = 'GAP_UPDATE';
    /**
     * Constant for value 'GAP_DELETE'
     * @return string 'GAP_DELETE'
     */
    const VALUE_GAP_DELETE = 'GAP_DELETE';
    /**
     * Constant for value 'GAP_UNDELETE'
     * @return string 'GAP_UNDELETE'
     */
    const VALUE_GAP_UNDELETE = 'GAP_UNDELETE';
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
     * @uses self::VALUE_CREATE
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_UNDELETE
     * @uses self::VALUE_GAP_CREATE
     * @uses self::VALUE_GAP_UPDATE
     * @uses self::VALUE_GAP_DELETE
     * @uses self::VALUE_GAP_UNDELETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATE,
            self::VALUE_UPDATE,
            self::VALUE_DELETE,
            self::VALUE_UNDELETE,
            self::VALUE_GAP_CREATE,
            self::VALUE_GAP_UPDATE,
            self::VALUE_GAP_DELETE,
            self::VALUE_GAP_UNDELETE,
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
