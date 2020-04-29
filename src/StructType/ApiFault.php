<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApiFault StructType
 * @subpackage Structs
 */
class ApiFault extends AbstractStructBase
{
    /**
     * The exceptionCode
     * @var string
     */
    public $exceptionCode;
    /**
     * The exceptionMessage
     * @var string
     */
    public $exceptionMessage;
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
     * Constructor method for ApiFault
     * @uses ApiFault::setExceptionCode()
     * @uses ApiFault::setExceptionMessage()
     * @uses ApiFault::setExtendedErrorDetails()
     * @param string $exceptionCode
     * @param string $exceptionMessage
     * @param \SFPartnerApi\v480\StructType\ExtendedErrorDetails[] $extendedErrorDetails
     */
    public function __construct($exceptionCode = null, $exceptionMessage = null, array $extendedErrorDetails = array())
    {
        $this
            ->setExceptionCode($exceptionCode)
            ->setExceptionMessage($exceptionMessage)
            ->setExtendedErrorDetails($extendedErrorDetails);
    }
    /**
     * Get exceptionCode value
     * @return string|null
     */
    public function getExceptionCode()
    {
        return $this->exceptionCode;
    }
    /**
     * Set exceptionCode value
     * @uses \SFPartnerApi\v480\EnumType\ExceptionCode::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\ExceptionCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $exceptionCode
     * @return \SFPartnerApi\v480\StructType\ApiFault
     */
    public function setExceptionCode($exceptionCode = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\ExceptionCode::valueIsValid($exceptionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\ExceptionCode', is_array($exceptionCode) ? implode(', ', $exceptionCode) : var_export($exceptionCode, true), implode(', ', \SFPartnerApi\v480\EnumType\ExceptionCode::getValidValues())), __LINE__);
        }
        $this->exceptionCode = $exceptionCode;
        return $this;
    }
    /**
     * Get exceptionMessage value
     * @return string|null
     */
    public function getExceptionMessage()
    {
        return $this->exceptionMessage;
    }
    /**
     * Set exceptionMessage value
     * @param string $exceptionMessage
     * @return \SFPartnerApi\v480\StructType\ApiFault
     */
    public function setExceptionMessage($exceptionMessage = null)
    {
        // validation for constraint: string
        if (!is_null($exceptionMessage) && !is_string($exceptionMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exceptionMessage, true), gettype($exceptionMessage)), __LINE__);
        }
        $this->exceptionMessage = $exceptionMessage;
        return $this;
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
        foreach ($values as $apiFaultExtendedErrorDetailsItem) {
            // validation for constraint: itemType
            if (!$apiFaultExtendedErrorDetailsItem instanceof \SFPartnerApi\v480\StructType\ExtendedErrorDetails) {
                $invalidValues[] = is_object($apiFaultExtendedErrorDetailsItem) ? get_class($apiFaultExtendedErrorDetailsItem) : sprintf('%s(%s)', gettype($apiFaultExtendedErrorDetailsItem), var_export($apiFaultExtendedErrorDetailsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\ApiFault
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
     * @return \SFPartnerApi\v480\StructType\ApiFault
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ApiFault
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
