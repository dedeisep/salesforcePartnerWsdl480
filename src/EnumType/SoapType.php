<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for soapType EnumType
 * @subpackage Enumerations
 */
class SoapType
{
    /**
     * Constant for value 'tns:ID'
     * @return string 'tns:ID'
     */
    const VALUE_TNS_ID = 'tns:ID';
    /**
     * Constant for value 'xsd:base64Binary'
     * @return string 'xsd:base64Binary'
     */
    const VALUE_XSD_BASE_64_BINARY = 'xsd:base64Binary';
    /**
     * Constant for value 'xsd:boolean'
     * @return string 'xsd:boolean'
     */
    const VALUE_XSD_BOOLEAN = 'xsd:boolean';
    /**
     * Constant for value 'xsd:double'
     * @return string 'xsd:double'
     */
    const VALUE_XSD_DOUBLE = 'xsd:double';
    /**
     * Constant for value 'xsd:int'
     * @return string 'xsd:int'
     */
    const VALUE_XSD_INT = 'xsd:int';
    /**
     * Constant for value 'xsd:string'
     * @return string 'xsd:string'
     */
    const VALUE_XSD_STRING = 'xsd:string';
    /**
     * Constant for value 'xsd:date'
     * @return string 'xsd:date'
     */
    const VALUE_XSD_DATE = 'xsd:date';
    /**
     * Constant for value 'xsd:dateTime'
     * @return string 'xsd:dateTime'
     */
    const VALUE_XSD_DATE_TIME = 'xsd:dateTime';
    /**
     * Constant for value 'xsd:time'
     * @return string 'xsd:time'
     */
    const VALUE_XSD_TIME = 'xsd:time';
    /**
     * Constant for value 'tns:location'
     * @return string 'tns:location'
     */
    const VALUE_TNS_LOCATION = 'tns:location';
    /**
     * Constant for value 'tns:address'
     * @return string 'tns:address'
     */
    const VALUE_TNS_ADDRESS = 'tns:address';
    /**
     * Constant for value 'xsd:anyType'
     * @return string 'xsd:anyType'
     */
    const VALUE_XSD_ANY_TYPE = 'xsd:anyType';
    /**
     * Constant for value 'tns:json'
     * @return string 'tns:json'
     */
    const VALUE_TNS_JSON = 'tns:json';
    /**
     * Constant for value 'urn:RelationshipReferenceTo'
     * @return string 'urn:RelationshipReferenceTo'
     */
    const VALUE_URN_RELATIONSHIP_REFERENCE_TO = 'urn:RelationshipReferenceTo';
    /**
     * Constant for value 'urn:JunctionIdListNames'
     * @return string 'urn:JunctionIdListNames'
     */
    const VALUE_URN_JUNCTION_ID_LIST_NAMES = 'urn:JunctionIdListNames';
    /**
     * Constant for value 'urn:SearchLayoutFieldsDisplayed'
     * @return string 'urn:SearchLayoutFieldsDisplayed'
     */
    const VALUE_URN_SEARCH_LAYOUT_FIELDS_DISPLAYED = 'urn:SearchLayoutFieldsDisplayed';
    /**
     * Constant for value 'urn:SearchLayoutField'
     * @return string 'urn:SearchLayoutField'
     */
    const VALUE_URN_SEARCH_LAYOUT_FIELD = 'urn:SearchLayoutField';
    /**
     * Constant for value 'urn:SearchLayoutButtonsDisplayed'
     * @return string 'urn:SearchLayoutButtonsDisplayed'
     */
    const VALUE_URN_SEARCH_LAYOUT_BUTTONS_DISPLAYED = 'urn:SearchLayoutButtonsDisplayed';
    /**
     * Constant for value 'urn:SearchLayoutButton'
     * @return string 'urn:SearchLayoutButton'
     */
    const VALUE_URN_SEARCH_LAYOUT_BUTTON = 'urn:SearchLayoutButton';
    /**
     * Constant for value 'urn:RecordTypesSupported'
     * @return string 'urn:RecordTypesSupported'
     */
    const VALUE_URN_RECORD_TYPES_SUPPORTED = 'urn:RecordTypesSupported';
    /**
     * Constant for value 'tns:StringList'
     * @return string 'tns:StringList'
     */
    const VALUE_TNS_STRING_LIST = 'tns:StringList';
    /**
     * Constant for value 'tns:ChangeEventHeader'
     * @return string 'tns:ChangeEventHeader'
     */
    const VALUE_TNS_CHANGE_EVENT_HEADER = 'tns:ChangeEventHeader';
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
     * @uses self::VALUE_TNS_ID
     * @uses self::VALUE_XSD_BASE_64_BINARY
     * @uses self::VALUE_XSD_BOOLEAN
     * @uses self::VALUE_XSD_DOUBLE
     * @uses self::VALUE_XSD_INT
     * @uses self::VALUE_XSD_STRING
     * @uses self::VALUE_XSD_DATE
     * @uses self::VALUE_XSD_DATE_TIME
     * @uses self::VALUE_XSD_TIME
     * @uses self::VALUE_TNS_LOCATION
     * @uses self::VALUE_TNS_ADDRESS
     * @uses self::VALUE_XSD_ANY_TYPE
     * @uses self::VALUE_TNS_JSON
     * @uses self::VALUE_URN_RELATIONSHIP_REFERENCE_TO
     * @uses self::VALUE_URN_JUNCTION_ID_LIST_NAMES
     * @uses self::VALUE_URN_SEARCH_LAYOUT_FIELDS_DISPLAYED
     * @uses self::VALUE_URN_SEARCH_LAYOUT_FIELD
     * @uses self::VALUE_URN_SEARCH_LAYOUT_BUTTONS_DISPLAYED
     * @uses self::VALUE_URN_SEARCH_LAYOUT_BUTTON
     * @uses self::VALUE_URN_RECORD_TYPES_SUPPORTED
     * @uses self::VALUE_TNS_STRING_LIST
     * @uses self::VALUE_TNS_CHANGE_EVENT_HEADER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TNS_ID,
            self::VALUE_XSD_BASE_64_BINARY,
            self::VALUE_XSD_BOOLEAN,
            self::VALUE_XSD_DOUBLE,
            self::VALUE_XSD_INT,
            self::VALUE_XSD_STRING,
            self::VALUE_XSD_DATE,
            self::VALUE_XSD_DATE_TIME,
            self::VALUE_XSD_TIME,
            self::VALUE_TNS_LOCATION,
            self::VALUE_TNS_ADDRESS,
            self::VALUE_XSD_ANY_TYPE,
            self::VALUE_TNS_JSON,
            self::VALUE_URN_RELATIONSHIP_REFERENCE_TO,
            self::VALUE_URN_JUNCTION_ID_LIST_NAMES,
            self::VALUE_URN_SEARCH_LAYOUT_FIELDS_DISPLAYED,
            self::VALUE_URN_SEARCH_LAYOUT_FIELD,
            self::VALUE_URN_SEARCH_LAYOUT_BUTTONS_DISPLAYED,
            self::VALUE_URN_SEARCH_LAYOUT_BUTTON,
            self::VALUE_URN_RECORD_TYPES_SUPPORTED,
            self::VALUE_TNS_STRING_LIST,
            self::VALUE_TNS_CHANGE_EVENT_HEADER,
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
