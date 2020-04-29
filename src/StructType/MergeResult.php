<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MergeResult StructType
 * @subpackage Structs
 */
class MergeResult extends AbstractStructBase
{
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * The mergedRecordIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $mergedRecordIds;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * The updatedRelatedIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $updatedRelatedIds;
    /**
     * Constructor method for MergeResult
     * @uses MergeResult::setErrors()
     * @uses MergeResult::setId()
     * @uses MergeResult::setMergedRecordIds()
     * @uses MergeResult::setSuccess()
     * @uses MergeResult::setUpdatedRelatedIds()
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param string $id
     * @param string[] $mergedRecordIds
     * @param bool $success
     * @param string[] $updatedRelatedIds
     */
    public function __construct(array $errors = array(), $id = null, array $mergedRecordIds = array(), $success = null, array $updatedRelatedIds = array())
    {
        $this
            ->setErrors($errors)
            ->setId($id)
            ->setMergedRecordIds($mergedRecordIds)
            ->setSuccess($success)
            ->setUpdatedRelatedIds($updatedRelatedIds);
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
        foreach ($values as $mergeResultErrorsItem) {
            // validation for constraint: itemType
            if (!$mergeResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($mergeResultErrorsItem) ? get_class($mergeResultErrorsItem) : sprintf('%s(%s)', gettype($mergeResultErrorsItem), var_export($mergeResultErrorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\MergeResult
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
     * @return \SFPartnerApi\v480\StructType\MergeResult
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \SFPartnerApi\v480\StructType\MergeResult
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($id) && mb_strlen($id) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($id)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($id) && !preg_match('/[a-zA-Z0-9]{18}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get mergedRecordIds value
     * @return string[]|null
     */
    public function getMergedRecordIds()
    {
        return $this->mergedRecordIds;
    }
    /**
     * This method is responsible for validating the values passed to the setMergedRecordIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMergedRecordIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMergedRecordIdsForArrayConstraintsFromSetMergedRecordIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeResultMergedRecordIdsItem) {
            // validation for constraint: itemType
            if (!is_string($mergeResultMergedRecordIdsItem)) {
                $invalidValues[] = is_object($mergeResultMergedRecordIdsItem) ? get_class($mergeResultMergedRecordIdsItem) : sprintf('%s(%s)', gettype($mergeResultMergedRecordIdsItem), var_export($mergeResultMergedRecordIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mergedRecordIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setMergedRecordIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMergedRecordIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMergedRecordIdsForLengthConstraintFromSetMergedRecordIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeResultMergedRecordIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($mergeResultMergedRecordIdsItem) !== 18) {
                $invalidValues[] = var_export($mergeResultMergedRecordIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set mergedRecordIds value
     * @throws \InvalidArgumentException
     * @param string[] $mergedRecordIds
     * @return \SFPartnerApi\v480\StructType\MergeResult
     */
    public function setMergedRecordIds(array $mergedRecordIds = array())
    {
        // validation for constraint: array
        if ('' !== ($mergedRecordIdsArrayErrorMessage = self::validateMergedRecordIdsForArrayConstraintsFromSetMergedRecordIds($mergedRecordIds))) {
            throw new \InvalidArgumentException($mergedRecordIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($mergedRecordIdsLengthErrorMessage = self::validateMergedRecordIdsForLengthConstraintFromSetMergedRecordIds($mergedRecordIds))) {
            throw new \InvalidArgumentException($mergedRecordIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($mergedRecordIds) && !preg_match('/[a-zA-Z0-9]{18}/', $mergedRecordIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($mergedRecordIds, true)), __LINE__);
        }
        $this->mergedRecordIds = $mergedRecordIds;
        return $this;
    }
    /**
     * Add item to mergedRecordIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\MergeResult
     */
    public function addToMergedRecordIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The mergedRecordIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->mergedRecordIds[] = $item;
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
     * @return \SFPartnerApi\v480\StructType\MergeResult
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
     * Get updatedRelatedIds value
     * @return string[]|null
     */
    public function getUpdatedRelatedIds()
    {
        return $this->updatedRelatedIds;
    }
    /**
     * This method is responsible for validating the values passed to the setUpdatedRelatedIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdatedRelatedIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUpdatedRelatedIdsForArrayConstraintsFromSetUpdatedRelatedIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeResultUpdatedRelatedIdsItem) {
            // validation for constraint: itemType
            if (!is_string($mergeResultUpdatedRelatedIdsItem)) {
                $invalidValues[] = is_object($mergeResultUpdatedRelatedIdsItem) ? get_class($mergeResultUpdatedRelatedIdsItem) : sprintf('%s(%s)', gettype($mergeResultUpdatedRelatedIdsItem), var_export($mergeResultUpdatedRelatedIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The updatedRelatedIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setUpdatedRelatedIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdatedRelatedIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUpdatedRelatedIdsForLengthConstraintFromSetUpdatedRelatedIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeResultUpdatedRelatedIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($mergeResultUpdatedRelatedIdsItem) !== 18) {
                $invalidValues[] = var_export($mergeResultUpdatedRelatedIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set updatedRelatedIds value
     * @throws \InvalidArgumentException
     * @param string[] $updatedRelatedIds
     * @return \SFPartnerApi\v480\StructType\MergeResult
     */
    public function setUpdatedRelatedIds(array $updatedRelatedIds = array())
    {
        // validation for constraint: array
        if ('' !== ($updatedRelatedIdsArrayErrorMessage = self::validateUpdatedRelatedIdsForArrayConstraintsFromSetUpdatedRelatedIds($updatedRelatedIds))) {
            throw new \InvalidArgumentException($updatedRelatedIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($updatedRelatedIdsLengthErrorMessage = self::validateUpdatedRelatedIdsForLengthConstraintFromSetUpdatedRelatedIds($updatedRelatedIds))) {
            throw new \InvalidArgumentException($updatedRelatedIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($updatedRelatedIds) && !preg_match('/[a-zA-Z0-9]{18}/', $updatedRelatedIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($updatedRelatedIds, true)), __LINE__);
        }
        $this->updatedRelatedIds = $updatedRelatedIds;
        return $this;
    }
    /**
     * Add item to updatedRelatedIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\MergeResult
     */
    public function addToUpdatedRelatedIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The updatedRelatedIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->updatedRelatedIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\MergeResult
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
