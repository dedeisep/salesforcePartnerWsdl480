<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for WebLinkWindowType EnumType
 * @subpackage Enumerations
 */
class WebLinkWindowType
{
    /**
     * Constant for value 'newWindow'
     * @return string 'newWindow'
     */
    const VALUE_NEW_WINDOW = 'newWindow';
    /**
     * Constant for value 'sidebar'
     * @return string 'sidebar'
     */
    const VALUE_SIDEBAR = 'sidebar';
    /**
     * Constant for value 'noSidebar'
     * @return string 'noSidebar'
     */
    const VALUE_NO_SIDEBAR = 'noSidebar';
    /**
     * Constant for value 'replace'
     * @return string 'replace'
     */
    const VALUE_REPLACE = 'replace';
    /**
     * Constant for value 'onClickJavaScript'
     * @return string 'onClickJavaScript'
     */
    const VALUE_ON_CLICK_JAVA_SCRIPT = 'onClickJavaScript';
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
     * @uses self::VALUE_NEW_WINDOW
     * @uses self::VALUE_SIDEBAR
     * @uses self::VALUE_NO_SIDEBAR
     * @uses self::VALUE_REPLACE
     * @uses self::VALUE_ON_CLICK_JAVA_SCRIPT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEW_WINDOW,
            self::VALUE_SIDEBAR,
            self::VALUE_NO_SIDEBAR,
            self::VALUE_REPLACE,
            self::VALUE_ON_CLICK_JAVA_SCRIPT,
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
