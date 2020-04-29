<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeadConvertResult StructType
 * @subpackage Structs
 */
class LeadConvertResult extends AbstractStructBase
{
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $accountId;
    /**
     * The contactId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $contactId;
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The leadId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $leadId;
    /**
     * The opportunityId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $opportunityId;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for LeadConvertResult
     * @uses LeadConvertResult::setAccountId()
     * @uses LeadConvertResult::setContactId()
     * @uses LeadConvertResult::setErrors()
     * @uses LeadConvertResult::setLeadId()
     * @uses LeadConvertResult::setOpportunityId()
     * @uses LeadConvertResult::setSuccess()
     * @param string $accountId
     * @param string $contactId
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param string $leadId
     * @param string $opportunityId
     * @param bool $success
     */
    public function __construct($accountId = null, $contactId = null, array $errors = array(), $leadId = null, $opportunityId = null, $success = null)
    {
        $this
            ->setAccountId($accountId)
            ->setContactId($contactId)
            ->setErrors($errors)
            ->setLeadId($leadId)
            ->setOpportunityId($opportunityId)
            ->setSuccess($success);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \SFPartnerApi\v480\StructType\LeadConvertResult
     */
    public function setAccountId($accountId = null)
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($accountId) && mb_strlen($accountId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($accountId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($accountId) && !preg_match('/[a-zA-Z0-9]{18}/', $accountId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($accountId, true)), __LINE__);
        }
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * Get contactId value
     * @return string|null
     */
    public function getContactId()
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param string $contactId
     * @return \SFPartnerApi\v480\StructType\LeadConvertResult
     */
    public function setContactId($contactId = null)
    {
        // validation for constraint: string
        if (!is_null($contactId) && !is_string($contactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($contactId) && mb_strlen($contactId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($contactId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($contactId) && !preg_match('/[a-zA-Z0-9]{18}/', $contactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($contactId, true)), __LINE__);
        }
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * Get errors value
     * @return \SFPartnerApi\v480\StructType\Error[]|null
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * This method is responsible for validating the values passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintsFromSetErrors(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $leadConvertResultErrorsItem) {
            // validation for constraint: itemType
            if (!$leadConvertResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($leadConvertResultErrorsItem) ? get_class($leadConvertResultErrorsItem) : sprintf('%s(%s)', gettype($leadConvertResultErrorsItem), var_export($leadConvertResultErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errors property can only contain items of type \SFPartnerApi\v480\StructType\Error, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set errors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @return \SFPartnerApi\v480\StructType\LeadConvertResult
     */
    public function setErrors(array $errors = array())
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new \InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->errors = $errors;
        return $this;
    }
    /**
     * Add item to errors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Error $item
     * @return \SFPartnerApi\v480\StructType\LeadConvertResult
     */
    public function addToErrors(\SFPartnerApi\v480\StructType\Error $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\Error) {
            throw new \InvalidArgumentException(sprintf('The errors property can only contain items of type \SFPartnerApi\v480\StructType\Error, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errors[] = $item;
        return $this;
    }
    /**
     * Get leadId value
     * @return string|null
     */
    public function getLeadId()
    {
        return $this->leadId;
    }
    /**
     * Set leadId value
     * @param string $leadId
     * @return \SFPartnerApi\v480\StructType\LeadConvertResult
     */
    public function setLeadId($leadId = null)
    {
        // validation for constraint: string
        if (!is_null($leadId) && !is_string($leadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leadId, true), gettype($leadId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($leadId) && mb_strlen($leadId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($leadId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($leadId) && !preg_match('/[a-zA-Z0-9]{18}/', $leadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($leadId, true)), __LINE__);
        }
        $this->leadId = $leadId;
        return $this;
    }
    /**
     * Get opportunityId value
     * @return string|null
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }
    /**
     * Set opportunityId value
     * @param string $opportunityId
     * @return \SFPartnerApi\v480\StructType\LeadConvertResult
     */
    public function setOpportunityId($opportunityId = null)
    {
        // validation for constraint: string
        if (!is_null($opportunityId) && !is_string($opportunityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opportunityId, true), gettype($opportunityId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($opportunityId) && mb_strlen($opportunityId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($opportunityId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($opportunityId) && !preg_match('/[a-zA-Z0-9]{18}/', $opportunityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($opportunityId, true)), __LINE__);
        }
        $this->opportunityId = $opportunityId;
        return $this;
    }
    /**
     * Get success value
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \SFPartnerApi\v480\StructType\LeadConvertResult
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\LeadConvertResult
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
