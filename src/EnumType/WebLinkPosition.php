<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for WebLinkPosition EnumType
 * @subpackage Enumerations
 */
class WebLinkPosition
{
    /**
     * Constant for value 'fullScreen'
     * @return string 'fullScreen'
     */
    const VALUE_FULL_SCREEN = 'fullScreen';
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'topLeft'
     * @return string 'topLeft'
     */
    const VALUE_TOP_LEFT = 'topLeft';
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
     * @uses self::VALUE_FULL_SCREEN
     * @uses self::VALUE_NONE
     * @uses self::VALUE_TOP_LEFT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FULL_SCREEN,
            self::VALUE_NONE,
            self::VALUE_TOP_LEFT,
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
