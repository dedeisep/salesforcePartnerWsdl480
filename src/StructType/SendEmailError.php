<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmailError StructType
 * @subpackage Structs
 */
class SendEmailError extends AbstractStructBase
{
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
     * The targetObjectId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $targetObjectId;
    /**
     * Constructor method for SendEmailError
     * @uses SendEmailError::setFields()
     * @uses SendEmailError::setMessage()
     * @uses SendEmailError::setStatusCode()
     * @uses SendEmailError::setTargetObjectId()
     * @param string[] $fields
     * @param string $message
     * @param string $statusCode
     * @param string $targetObjectId
     */
    public function __construct(array $fields = array(), $message = null, $statusCode = null, $targetObjectId = null)
    {
        $this
            ->setFields($fields)
            ->setMessage($message)
            ->setStatusCode($statusCode)
            ->setTargetObjectId($targetObjectId);
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
        foreach ($values as $sendEmailErrorFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($sendEmailErrorFieldsItem)) {
                $invalidValues[] = is_object($sendEmailErrorFieldsItem) ? get_class($sendEmailErrorFieldsItem) : sprintf('%s(%s)', gettype($sendEmailErrorFieldsItem), var_export($sendEmailErrorFieldsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\SendEmailError
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
     * @return \SFPartnerApi\v480\StructType\SendEmailError
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
     * @return \SFPartnerApi\v480\StructType\SendEmailError
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
     * @return \SFPartnerApi\v480\StructType\SendEmailError
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
     * Get targetObjectId value
     * @return string|null
     */
    public function getTargetObjectId()
    {
        return $this->targetObjectId;
    }
    /**
     * Set targetObjectId value
     * @param string $targetObjectId
     * @return \SFPartnerApi\v480\StructType\SendEmailError
     */
    public function setTargetObjectId($targetObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($targetObjectId) && !is_string($targetObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetObjectId, true), gettype($targetObjectId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($targetObjectId) && mb_strlen($targetObjectId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($targetObjectId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($targetObjectId) && !preg_match('/[a-zA-Z0-9]{18}/', $targetObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($targetObjectId, true)), __LINE__);
        }
        $this->targetObjectId = $targetObjectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SendEmailError
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
