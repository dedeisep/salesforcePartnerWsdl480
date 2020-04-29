<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for FeedLayoutFilterType EnumType
 * @subpackage Enumerations
 */
class FeedLayoutFilterType
{
    /**
     * Constant for value 'AllUpdates'
     * @return string 'AllUpdates'
     */
    const VALUE_ALL_UPDATES = 'AllUpdates';
    /**
     * Constant for value 'FeedItemType'
     * @return string 'FeedItemType'
     */
    const VALUE_FEED_ITEM_TYPE = 'FeedItemType';
    /**
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
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
     * @uses self::VALUE_ALL_UPDATES
     * @uses self::VALUE_FEED_ITEM_TYPE
     * @uses self::VALUE_CUSTOM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL_UPDATES,
            self::VALUE_FEED_ITEM_TYPE,
            self::VALUE_CUSTOM,
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
