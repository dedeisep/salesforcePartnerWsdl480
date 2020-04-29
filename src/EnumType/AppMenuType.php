<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for AppMenuType EnumType
 * @subpackage Enumerations
 */
class AppMenuType
{
    /**
     * Constant for value 'AppSwitcher'
     * @return string 'AppSwitcher'
     */
    const VALUE_APP_SWITCHER = 'AppSwitcher';
    /**
     * Constant for value 'Salesforce1'
     * @return string 'Salesforce1'
     */
    const VALUE_SALESFORCE_1 = 'Salesforce1';
    /**
     * Constant for value 'NetworkTabs'
     * @return string 'NetworkTabs'
     */
    const VALUE_NETWORK_TABS = 'NetworkTabs';
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
     * @uses self::VALUE_APP_SWITCHER
     * @uses self::VALUE_SALESFORCE_1
     * @uses self::VALUE_NETWORK_TABS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APP_SWITCHER,
            self::VALUE_SALESFORCE_1,
            self::VALUE_NETWORK_TABS,
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
