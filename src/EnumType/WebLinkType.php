<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for WebLinkType EnumType
 * @subpackage Enumerations
 */
class WebLinkType
{
    /**
     * Constant for value 'url'
     * @return string 'url'
     */
    const VALUE_URL = 'url';
    /**
     * Constant for value 'sControl'
     * @return string 'sControl'
     */
    const VALUE_S_CONTROL = 'sControl';
    /**
     * Constant for value 'javascript'
     * @return string 'javascript'
     */
    const VALUE_JAVASCRIPT = 'javascript';
    /**
     * Constant for value 'page'
     * @return string 'page'
     */
    const VALUE_PAGE = 'page';
    /**
     * Constant for value 'flow'
     * @return string 'flow'
     */
    const VALUE_FLOW = 'flow';
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
     * @uses self::VALUE_URL
     * @uses self::VALUE_S_CONTROL
     * @uses self::VALUE_JAVASCRIPT
     * @uses self::VALUE_PAGE
     * @uses self::VALUE_FLOW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_URL,
            self::VALUE_S_CONTROL,
            self::VALUE_JAVASCRIPT,
            self::VALUE_PAGE,
            self::VALUE_FLOW,
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
