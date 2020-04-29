<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for TabOrderType EnumType
 * @subpackage Enumerations
 */
class TabOrderType
{
    /**
     * Constant for value 'LeftToRight'
     * @return string 'LeftToRight'
     */
    const VALUE_LEFT_TO_RIGHT = 'LeftToRight';
    /**
     * Constant for value 'TopToBottom'
     * @return string 'TopToBottom'
     */
    const VALUE_TOP_TO_BOTTOM = 'TopToBottom';
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
     * @uses self::VALUE_LEFT_TO_RIGHT
     * @uses self::VALUE_TOP_TO_BOTTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LEFT_TO_RIGHT,
            self::VALUE_TOP_TO_BOTTOM,
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
