<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Error StructType
 * @subpackage Structs
 */
class Error extends AbstractStructBase
{
    /**
     * The extendedErrorDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\ExtendedErrorDetails[]
     */
    public $extendedErrorDetails;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $fields;
    /**
     * The message
     * @var string
     */
    public $message;
    /**
     * The statusCode
     * @var string
     */
    public $statusCode;
    /**
     * Constructor method for Error
     * @uses Error::setExtendedErrorDetails()
     * @uses Error::setFields()
     * @uses Error::setMessage()
     * @uses Error::setStatusCode()
     * @param \SFPartnerApi\v480\StructType\ExtendedErrorDetails[] $extendedErrorDetails
     * @param string[] $fields
     * @param string $message
     * @param string $statusCode
     */
    public function __construct(array $extendedErrorDetails = array(), array $fields = array(), $message = null, $statusCode = null)
    {
        $this
            ->setExtendedErrorDetails($extendedErrorDetails)
            ->setFields($fields)
            ->setMessage($message)
            ->setStatusCode($statusCode);
    }
    /**
     * Get extendedErrorDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\ExtendedErrorDetails[]|null
     */
    public function getExtendedErrorDetails()
    {
        return isset($this->extendedErrorDetails) ? $this->extendedErrorDetails : null;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedErrorDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedErrorDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedErrorDetailsForArrayConstraintsFromSetExtendedErrorDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $errorExtendedErrorDetailsItem) {
            // validation for constraint: itemType
            if (!$errorExtendedErrorDetailsItem instanceof \SFPartnerApi\v480\StructType\ExtendedErrorDetails) {
                $invalidValues[] = is_object($errorExtendedErrorDetailsItem) ? get_class($errorExtendedErrorDetailsItem) : sprintf('%s(%s)', gettype($errorExtendedErrorDetailsItem), var_export($errorExtendedErrorDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The extendedErrorDetails property can only contain items of type \SFPartnerApi\v480\StructType\ExtendedErrorDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set extendedErrorDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ExtendedErrorDetails[] $extendedErrorDetails
     * @return \SFPartnerApi\v480\StructType\Error
     */
    public function setExtendedErrorDetails(array $extendedErrorDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($extendedErrorDetailsArrayErrorMessage = self::validateExtendedErrorDetailsForArrayConstraintsFromSetExtendedErrorDetails($extendedErrorDetails))) {
            throw new \InvalidArgumentException($extendedErrorDetailsArrayErrorMessage, __LINE__);
        }
        if (is_null($extendedErrorDetails) || (is_array($extendedErrorDetails) && empty($extendedErrorDetails))) {
            unset($this->extendedErrorDetails);
        } else {
            $this->extendedErrorDetails = $extendedErrorDetails;
        }
        return $this;
    }
    /**
     * Add item to extendedErrorDetails value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ExtendedErrorDetails $item
     * @return \SFPartnerApi\v480\StructType\Error
     */
    public function addToExtendedErrorDetails(\SFPartnerApi\v480\StructType\ExtendedErrorDetails $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ExtendedErrorDetails) {
            throw new \InvalidArgumentException(sprintf('The extendedErrorDetails property can only contain items of type \SFPartnerApi\v480\StructType\ExtendedErrorDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->extendedErrorDetails[] = $item;
        return $this;
    }
    /**
     * Get fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getFields()
    {
        return isset($this->fields) ? $this->fields : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldsForArrayConstraintsFromSetFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $errorFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($errorFieldsItem)) {
                $invalidValues[] = is_object($errorFieldsItem) ? get_class($errorFieldsItem) : sprintf('%s(%s)', gettype($errorFieldsItem), var_export($errorFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fields property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $fields
     * @return \SFPartnerApi\v480\StructType\Error
     */
    public function setFields(array $fields = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldsArrayErrorMessage = self::validateFieldsForArrayConstraintsFromSetFields($fields))) {
            throw new \InvalidArgumentException($fieldsArrayErrorMessage, __LINE__);
        }
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->fields);
        } else {
            $this->fields = $fields;
        }
        return $this;
    }
    /**
     * Add item to fields value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\Error
     */
    public function addToFields($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The fields property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fields[] = $item;
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \SFPartnerApi\v480\StructType\Error
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Get statusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @uses \SFPartnerApi\v480\EnumType\StatusCode::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\StatusCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $statusCode
     * @return \SFPartnerApi\v480\StructType\Error
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\StatusCode::valueIsValid($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\StatusCode', is_array($statusCode) ? implode(', ', $statusCode) : var_export($statusCode, true), implode(', ', \SFPartnerApi\v480\EnumType\StatusCode::getValidValues())), __LINE__);
        }
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Error
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
