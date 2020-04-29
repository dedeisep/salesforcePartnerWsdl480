<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenderEmailTemplateError StructType
 * @subpackage Structs
 */
class RenderEmailTemplateError extends AbstractStructBase
{
    /**
     * The fieldName
     * @var string
     */
    public $fieldName;
    /**
     * The message
     * @var string
     */
    public $message;
    /**
     * The offset
     * @var int
     */
    public $offset;
    /**
     * The statusCode
     * @var string
     */
    public $statusCode;
    /**
     * Constructor method for RenderEmailTemplateError
     * @uses RenderEmailTemplateError::setFieldName()
     * @uses RenderEmailTemplateError::setMessage()
     * @uses RenderEmailTemplateError::setOffset()
     * @uses RenderEmailTemplateError::setStatusCode()
     * @param string $fieldName
     * @param string $message
     * @param int $offset
     * @param string $statusCode
     */
    public function __construct($fieldName = null, $message = null, $offset = null, $statusCode = null)
    {
        $this
            ->setFieldName($fieldName)
            ->setMessage($message)
            ->setOffset($offset)
            ->setStatusCode($statusCode);
    }
    /**
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateError
     */
    public function setFieldName($fieldName = null)
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateError
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
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $offset
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateError
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->offset = $offset;
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateError
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateError
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
