<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for fieldType EnumType
 * @subpackage Enumerations
 */
class FieldType
{
    /**
     * Constant for value 'string'
     * @return string 'string'
     */
    const VALUE_STRING = 'string';
    /**
     * Constant for value 'picklist'
     * @return string 'picklist'
     */
    const VALUE_PICKLIST = 'picklist';
    /**
     * Constant for value 'multipicklist'
     * @return string 'multipicklist'
     */
    const VALUE_MULTIPICKLIST = 'multipicklist';
    /**
     * Constant for value 'combobox'
     * @return string 'combobox'
     */
    const VALUE_COMBOBOX = 'combobox';
    /**
     * Constant for value 'reference'
     * @return string 'reference'
     */
    const VALUE_REFERENCE = 'reference';
    /**
     * Constant for value 'base64'
     * @return string 'base64'
     */
    const VALUE_BASE_64 = 'base64';
    /**
     * Constant for value 'boolean'
     * @return string 'boolean'
     */
    const VALUE_BOOLEAN = 'boolean';
    /**
     * Constant for value 'currency'
     * @return string 'currency'
     */
    const VALUE_CURRENCY = 'currency';
    /**
     * Constant for value 'textarea'
     * @return string 'textarea'
     */
    const VALUE_TEXTAREA = 'textarea';
    /**
     * Constant for value 'int'
     * @return string 'int'
     */
    const VALUE_INT = 'int';
    /**
     * Constant for value 'double'
     * @return string 'double'
     */
    const VALUE_DOUBLE = 'double';
    /**
     * Constant for value 'percent'
     * @return string 'percent'
     */
    const VALUE_PERCENT = 'percent';
    /**
     * Constant for value 'phone'
     * @return string 'phone'
     */
    const VALUE_PHONE = 'phone';
    /**
     * Constant for value 'id'
     * @return string 'id'
     */
    const VALUE_ID = 'id';
    /**
     * Constant for value 'date'
     * @return string 'date'
     */
    const VALUE_DATE = 'date';
    /**
     * Constant for value 'datetime'
     * @return string 'datetime'
     */
    const VALUE_DATETIME = 'datetime';
    /**
     * Constant for value 'time'
     * @return string 'time'
     */
    const VALUE_TIME = 'time';
    /**
     * Constant for value 'url'
     * @return string 'url'
     */
    const VALUE_URL = 'url';
    /**
     * Constant for value 'email'
     * @return string 'email'
     */
    const VALUE_EMAIL = 'email';
    /**
     * Constant for value 'encryptedstring'
     * @return string 'encryptedstring'
     */
    const VALUE_ENCRYPTEDSTRING = 'encryptedstring';
    /**
     * Constant for value 'datacategorygroupreference'
     * @return string 'datacategorygroupreference'
     */
    const VALUE_DATACATEGORYGROUPREFERENCE = 'datacategorygroupreference';
    /**
     * Constant for value 'location'
     * @return string 'location'
     */
    const VALUE_LOCATION = 'location';
    /**
     * Constant for value 'address'
     * @return string 'address'
     */
    const VALUE_ADDRESS = 'address';
    /**
     * Constant for value 'anyType'
     * @return string 'anyType'
     */
    const VALUE_ANY_TYPE = 'anyType';
    /**
     * Constant for value 'json'
     * @return string 'json'
     */
    const VALUE_JSON = 'json';
    /**
     * Constant for value 'complexvalue'
     * @return string 'complexvalue'
     */
    const VALUE_COMPLEXVALUE = 'complexvalue';
    /**
     * Constant for value 'long'
     * @return string 'long'
     */
    const VALUE_LONG = 'long';
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
     * @uses self::VALUE_STRING
     * @uses self::VALUE_PICKLIST
     * @uses self::VALUE_MULTIPICKLIST
     * @uses self::VALUE_COMBOBOX
     * @uses self::VALUE_REFERENCE
     * @uses self::VALUE_BASE_64
     * @uses self::VALUE_BOOLEAN
     * @uses self::VALUE_CURRENCY
     * @uses self::VALUE_TEXTAREA
     * @uses self::VALUE_INT
     * @uses self::VALUE_DOUBLE
     * @uses self::VALUE_PERCENT
     * @uses self::VALUE_PHONE
     * @uses self::VALUE_ID
     * @uses self::VALUE_DATE
     * @uses self::VALUE_DATETIME
     * @uses self::VALUE_TIME
     * @uses self::VALUE_URL
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_ENCRYPTEDSTRING
     * @uses self::VALUE_DATACATEGORYGROUPREFERENCE
     * @uses self::VALUE_LOCATION
     * @uses self::VALUE_ADDRESS
     * @uses self::VALUE_ANY_TYPE
     * @uses self::VALUE_JSON
     * @uses self::VALUE_COMPLEXVALUE
     * @uses self::VALUE_LONG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STRING,
            self::VALUE_PICKLIST,
            self::VALUE_MULTIPICKLIST,
            self::VALUE_COMBOBOX,
            self::VALUE_REFERENCE,
            self::VALUE_BASE_64,
            self::VALUE_BOOLEAN,
            self::VALUE_CURRENCY,
            self::VALUE_TEXTAREA,
            self::VALUE_INT,
            self::VALUE_DOUBLE,
            self::VALUE_PERCENT,
            self::VALUE_PHONE,
            self::VALUE_ID,
            self::VALUE_DATE,
            self::VALUE_DATETIME,
            self::VALUE_TIME,
            self::VALUE_URL,
            self::VALUE_EMAIL,
            self::VALUE_ENCRYPTEDSTRING,
            self::VALUE_DATACATEGORYGROUPREFERENCE,
            self::VALUE_LOCATION,
            self::VALUE_ADDRESS,
            self::VALUE_ANY_TYPE,
            self::VALUE_JSON,
            self::VALUE_COMPLEXVALUE,
            self::VALUE_LONG,
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
