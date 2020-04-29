<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindDuplicatesResult StructType
 * @subpackage Structs
 */
class FindDuplicatesResult extends AbstractStructBase
{
    /**
     * The duplicateResults
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DuplicateResult[]
     */
    public $duplicateResults;
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for FindDuplicatesResult
     * @uses FindDuplicatesResult::setDuplicateResults()
     * @uses FindDuplicatesResult::setErrors()
     * @uses FindDuplicatesResult::setSuccess()
     * @param \SFPartnerApi\v480\StructType\DuplicateResult[] $duplicateResults
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param bool $success
     */
    public function __construct(array $duplicateResults = array(), array $errors = array(), $success = null)
    {
        $this
            ->setDuplicateResults($duplicateResults)
            ->setErrors($errors)
            ->setSuccess($success);
    }
    /**
     * Get duplicateResults value
     * @return \SFPartnerApi\v480\StructType\DuplicateResult[]|null
     */
    public function getDuplicateResults()
    {
        return $this->duplicateResults;
    }
    /**
     * This method is responsible for validating the values passed to the setDuplicateResults method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDuplicateResults method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDuplicateResultsForArrayConstraintsFromSetDuplicateResults(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $findDuplicatesResultDuplicateResultsItem) {
            // validation for constraint: itemType
            if (!$findDuplicatesResultDuplicateResultsItem instanceof \SFPartnerApi\v480\StructType\DuplicateResult) {
                $invalidValues[] = is_object($findDuplicatesResultDuplicateResultsItem) ? get_class($findDuplicatesResultDuplicateResultsItem) : sprintf('%s(%s)', gettype($findDuplicatesResultDuplicateResultsItem), var_export($findDuplicatesResultDuplicateResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The duplicateResults property can only contain items of type \SFPartnerApi\v480\StructType\DuplicateResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set duplicateResults value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DuplicateResult[] $duplicateResults
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesResult
     */
    public function setDuplicateResults(array $duplicateResults = array())
    {
        // validation for constraint: array
        if ('' !== ($duplicateResultsArrayErrorMessage = self::validateDuplicateResultsForArrayConstraintsFromSetDuplicateResults($duplicateResults))) {
            throw new \InvalidArgumentException($duplicateResultsArrayErrorMessage, __LINE__);
        }
        $this->duplicateResults = $duplicateResults;
        return $this;
    }
    /**
     * Add item to duplicateResults value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DuplicateResult $item
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesResult
     */
    public function addToDuplicateResults(\SFPartnerApi\v480\StructType\DuplicateResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DuplicateResult) {
            throw new \InvalidArgumentException(sprintf('The duplicateResults property can only contain items of type \SFPartnerApi\v480\StructType\DuplicateResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->duplicateResults[] = $item;
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
        foreach ($values as $findDuplicatesResultErrorsItem) {
            // validation for constraint: itemType
            if (!$findDuplicatesResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($findDuplicatesResultErrorsItem) ? get_class($findDuplicatesResultErrorsItem) : sprintf('%s(%s)', gettype($findDuplicatesResultErrorsItem), var_export($findDuplicatesResultErrorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesResult
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
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesResult
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
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesResult
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
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesResult
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
