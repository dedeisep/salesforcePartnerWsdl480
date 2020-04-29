<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for layoutComponentType EnumType
 * @subpackage Enumerations
 */
class LayoutComponentType
{
    /**
     * Constant for value 'ReportChart'
     * @return string 'ReportChart'
     */
    const VALUE_REPORT_CHART = 'ReportChart';
    /**
     * Constant for value 'Field'
     * @return string 'Field'
     */
    const VALUE_FIELD = 'Field';
    /**
     * Constant for value 'Separator'
     * @return string 'Separator'
     */
    const VALUE_SEPARATOR = 'Separator';
    /**
     * Constant for value 'SControl'
     * @return string 'SControl'
     */
    const VALUE_SCONTROL = 'SControl';
    /**
     * Constant for value 'EmptySpace'
     * @return string 'EmptySpace'
     */
    const VALUE_EMPTY_SPACE = 'EmptySpace';
    /**
     * Constant for value 'VisualforcePage'
     * @return string 'VisualforcePage'
     */
    const VALUE_VISUALFORCE_PAGE = 'VisualforcePage';
    /**
     * Constant for value 'ExpandedLookup'
     * @return string 'ExpandedLookup'
     */
    const VALUE_EXPANDED_LOOKUP = 'ExpandedLookup';
    /**
     * Constant for value 'AuraComponent'
     * @return string 'AuraComponent'
     */
    const VALUE_AURA_COMPONENT = 'AuraComponent';
    /**
     * Constant for value 'Canvas'
     * @return string 'Canvas'
     */
    const VALUE_CANVAS = 'Canvas';
    /**
     * Constant for value 'CustomLink'
     * @return string 'CustomLink'
     */
    const VALUE_CUSTOM_LINK = 'CustomLink';
    /**
     * Constant for value 'AnalyticsCloud'
     * @return string 'AnalyticsCloud'
     */
    const VALUE_ANALYTICS_CLOUD = 'AnalyticsCloud';
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
     * @uses self::VALUE_REPORT_CHART
     * @uses self::VALUE_FIELD
     * @uses self::VALUE_SEPARATOR
     * @uses self::VALUE_SCONTROL
     * @uses self::VALUE_EMPTY_SPACE
     * @uses self::VALUE_VISUALFORCE_PAGE
     * @uses self::VALUE_EXPANDED_LOOKUP
     * @uses self::VALUE_AURA_COMPONENT
     * @uses self::VALUE_CANVAS
     * @uses self::VALUE_CUSTOM_LINK
     * @uses self::VALUE_ANALYTICS_CLOUD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REPORT_CHART,
            self::VALUE_FIELD,
            self::VALUE_SEPARATOR,
            self::VALUE_SCONTROL,
            self::VALUE_EMPTY_SPACE,
            self::VALUE_VISUALFORCE_PAGE,
            self::VALUE_EXPANDED_LOOKUP,
            self::VALUE_AURA_COMPONENT,
            self::VALUE_CANVAS,
            self::VALUE_CUSTOM_LINK,
            self::VALUE_ANALYTICS_CLOUD,
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
