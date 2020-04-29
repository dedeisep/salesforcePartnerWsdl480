<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for AttachmentRetrievalOption EnumType
 * @subpackage Enumerations
 */
class AttachmentRetrievalOption
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MetadataOnly'
     * @return string 'MetadataOnly'
     */
    const VALUE_METADATA_ONLY = 'MetadataOnly';
    /**
     * Constant for value 'MetadataWithBody'
     * @return string 'MetadataWithBody'
     */
    const VALUE_METADATA_WITH_BODY = 'MetadataWithBody';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_METADATA_ONLY
     * @uses self::VALUE_METADATA_WITH_BODY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_METADATA_ONLY,
            self::VALUE_METADATA_WITH_BODY,
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
