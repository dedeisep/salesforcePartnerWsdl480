<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for SendEmailOptOutPolicy EnumType
 * @subpackage Enumerations
 */
class SendEmailOptOutPolicy
{
    /**
     * Constant for value 'SEND'
     * @return string 'SEND'
     */
    const VALUE_SEND = 'SEND';
    /**
     * Constant for value 'FILTER'
     * @return string 'FILTER'
     */
    const VALUE_FILTER = 'FILTER';
    /**
     * Constant for value 'REJECT'
     * @return string 'REJECT'
     */
    const VALUE_REJECT = 'REJECT';
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
     * @uses self::VALUE_SEND
     * @uses self::VALUE_FILTER
     * @uses self::VALUE_REJECT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SEND,
            self::VALUE_FILTER,
            self::VALUE_REJECT,
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
