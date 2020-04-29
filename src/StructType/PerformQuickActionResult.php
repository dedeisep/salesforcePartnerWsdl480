<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformQuickActionResult StructType
 * @subpackage Structs
 */
class PerformQuickActionResult extends AbstractStructBase
{
    /**
     * The contextId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $contextId;
    /**
     * The created
     * @var bool
     */
    public $created;
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The feedItemIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $feedItemIds;
    /**
     * The ids
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $ids;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * The successMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $successMessage;
    /**
     * Constructor method for PerformQuickActionResult
     * @uses PerformQuickActionResult::setContextId()
     * @uses PerformQuickActionResult::setCreated()
     * @uses PerformQuickActionResult::setErrors()
     * @uses PerformQuickActionResult::setFeedItemIds()
     * @uses PerformQuickActionResult::setIds()
     * @uses PerformQuickActionResult::setSuccess()
     * @uses PerformQuickActionResult::setSuccessMessage()
     * @param string $contextId
     * @param bool $created
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param string[] $feedItemIds
     * @param string[] $ids
     * @param bool $success
     * @param string $successMessage
     */
    public function __construct($contextId = null, $created = null, array $errors = array(), array $feedItemIds = array(), array $ids = array(), $success = null, $successMessage = null)
    {
        $this
            ->setContextId($contextId)
            ->setCreated($created)
            ->setErrors($errors)
            ->setFeedItemIds($feedItemIds)
            ->setIds($ids)
            ->setSuccess($success)
            ->setSuccessMessage($successMessage);
    }
    /**
     * Get contextId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContextId()
    {
        return isset($this->contextId) ? $this->contextId : null;
    }
    /**
     * Set contextId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contextId
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
     */
    public function setContextId($contextId = null)
    {
        // validation for constraint: string
        if (!is_null($contextId) && !is_string($contextId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextId, true), gettype($contextId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($contextId) && mb_strlen($contextId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($contextId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($contextId) && !preg_match('/[a-zA-Z0-9]{18}/', $contextId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($contextId, true)), __LINE__);
        }
        if (is_null($contextId) || (is_array($contextId) && empty($contextId))) {
            unset($this->contextId);
        } else {
            $this->contextId = $contextId;
        }
        return $this;
    }
    /**
     * Get created value
     * @return bool|null
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param bool $created
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
     */
    public function setCreated($created = null)
    {
        // validation for constraint: boolean
        if (!is_null($created) && !is_bool($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->created = $created;
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
        foreach ($values as $performQuickActionResultErrorsItem) {
            // validation for constraint: itemType
            if (!$performQuickActionResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($performQuickActionResultErrorsItem) ? get_class($performQuickActionResultErrorsItem) : sprintf('%s(%s)', gettype($performQuickActionResultErrorsItem), var_export($performQuickActionResultErrorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
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
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
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
     * Get feedItemIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getFeedItemIds()
    {
        return isset($this->feedItemIds) ? $this->feedItemIds : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedItemIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedItemIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedItemIdsForArrayConstraintsFromSetFeedItemIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performQuickActionResultFeedItemIdsItem) {
            // validation for constraint: itemType
            if (!is_string($performQuickActionResultFeedItemIdsItem)) {
                $invalidValues[] = is_object($performQuickActionResultFeedItemIdsItem) ? get_class($performQuickActionResultFeedItemIdsItem) : sprintf('%s(%s)', gettype($performQuickActionResultFeedItemIdsItem), var_export($performQuickActionResultFeedItemIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The feedItemIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setFeedItemIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedItemIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedItemIdsForLengthConstraintFromSetFeedItemIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performQuickActionResultFeedItemIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($performQuickActionResultFeedItemIdsItem) !== 18) {
                $invalidValues[] = var_export($performQuickActionResultFeedItemIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set feedItemIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $feedItemIds
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
     */
    public function setFeedItemIds(array $feedItemIds = array())
    {
        // validation for constraint: array
        if ('' !== ($feedItemIdsArrayErrorMessage = self::validateFeedItemIdsForArrayConstraintsFromSetFeedItemIds($feedItemIds))) {
            throw new \InvalidArgumentException($feedItemIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($feedItemIdsLengthErrorMessage = self::validateFeedItemIdsForLengthConstraintFromSetFeedItemIds($feedItemIds))) {
            throw new \InvalidArgumentException($feedItemIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($feedItemIds) && !preg_match('/[a-zA-Z0-9]{18}/', $feedItemIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($feedItemIds, true)), __LINE__);
        }
        if (is_null($feedItemIds) || (is_array($feedItemIds) && empty($feedItemIds))) {
            unset($this->feedItemIds);
        } else {
            $this->feedItemIds = $feedItemIds;
        }
        return $this;
    }
    /**
     * Add item to feedItemIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
     */
    public function addToFeedItemIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The feedItemIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->feedItemIds[] = $item;
        return $this;
    }
    /**
     * Get ids value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getIds()
    {
        return isset($this->ids) ? $this->ids : null;
    }
    /**
     * This method is responsible for validating the values passed to the setIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsForArrayConstraintsFromSetIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performQuickActionResultIdsItem) {
            // validation for constraint: itemType
            if (!is_string($performQuickActionResultIdsItem)) {
                $invalidValues[] = is_object($performQuickActionResultIdsItem) ? get_class($performQuickActionResultIdsItem) : sprintf('%s(%s)', gettype($performQuickActionResultIdsItem), var_export($performQuickActionResultIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ids property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsForLengthConstraintFromSetIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performQuickActionResultIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($performQuickActionResultIdsItem) !== 18) {
                $invalidValues[] = var_export($performQuickActionResultIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ids value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $ids
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
     */
    public function setIds(array $ids = array())
    {
        // validation for constraint: array
        if ('' !== ($idsArrayErrorMessage = self::validateIdsForArrayConstraintsFromSetIds($ids))) {
            throw new \InvalidArgumentException($idsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($idsLengthErrorMessage = self::validateIdsForLengthConstraintFromSetIds($ids))) {
            throw new \InvalidArgumentException($idsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($ids) && !preg_match('/[a-zA-Z0-9]{18}/', $ids)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($ids, true)), __LINE__);
        }
        if (is_null($ids) || (is_array($ids) && empty($ids))) {
            unset($this->ids);
        } else {
            $this->ids = $ids;
        }
        return $this;
    }
    /**
     * Add item to ids value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
     */
    public function addToIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ids property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->ids[] = $item;
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
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
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
     * Get successMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSuccessMessage()
    {
        return isset($this->successMessage) ? $this->successMessage : null;
    }
    /**
     * Set successMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $successMessage
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
     */
    public function setSuccessMessage($successMessage = null)
    {
        // validation for constraint: string
        if (!is_null($successMessage) && !is_string($successMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($successMessage, true), gettype($successMessage)), __LINE__);
        }
        if (is_null($successMessage) || (is_array($successMessage) && empty($successMessage))) {
            unset($this->successMessage);
        } else {
            $this->successMessage = $successMessage;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionResult
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
