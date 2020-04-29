<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MatchResult StructType
 * @subpackage Structs
 */
class MatchResult extends AbstractStructBase
{
    /**
     * The entityType
     * @var string
     */
    public $entityType;
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The matchEngine
     * @var string
     */
    public $matchEngine;
    /**
     * The matchRecords
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\MatchRecord[]
     */
    public $matchRecords;
    /**
     * The rule
     * @var string
     */
    public $rule;
    /**
     * The size
     * @var int
     */
    public $size;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for MatchResult
     * @uses MatchResult::setEntityType()
     * @uses MatchResult::setErrors()
     * @uses MatchResult::setMatchEngine()
     * @uses MatchResult::setMatchRecords()
     * @uses MatchResult::setRule()
     * @uses MatchResult::setSize()
     * @uses MatchResult::setSuccess()
     * @param string $entityType
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param string $matchEngine
     * @param \SFPartnerApi\v480\StructType\MatchRecord[] $matchRecords
     * @param string $rule
     * @param int $size
     * @param bool $success
     */
    public function __construct($entityType = null, array $errors = array(), $matchEngine = null, array $matchRecords = array(), $rule = null, $size = null, $success = null)
    {
        $this
            ->setEntityType($entityType)
            ->setErrors($errors)
            ->setMatchEngine($matchEngine)
            ->setMatchRecords($matchRecords)
            ->setRule($rule)
            ->setSize($size)
            ->setSuccess($success);
    }
    /**
     * Get entityType value
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->entityType;
    }
    /**
     * Set entityType value
     * @param string $entityType
     * @return \SFPartnerApi\v480\StructType\MatchResult
     */
    public function setEntityType($entityType = null)
    {
        // validation for constraint: string
        if (!is_null($entityType) && !is_string($entityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityType, true), gettype($entityType)), __LINE__);
        }
        $this->entityType = $entityType;
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
        foreach ($values as $matchResultErrorsItem) {
            // validation for constraint: itemType
            if (!$matchResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($matchResultErrorsItem) ? get_class($matchResultErrorsItem) : sprintf('%s(%s)', gettype($matchResultErrorsItem), var_export($matchResultErrorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\MatchResult
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
     * @return \SFPartnerApi\v480\StructType\MatchResult
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
     * Get matchEngine value
     * @return string|null
     */
    public function getMatchEngine()
    {
        return $this->matchEngine;
    }
    /**
     * Set matchEngine value
     * @param string $matchEngine
     * @return \SFPartnerApi\v480\StructType\MatchResult
     */
    public function setMatchEngine($matchEngine = null)
    {
        // validation for constraint: string
        if (!is_null($matchEngine) && !is_string($matchEngine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchEngine, true), gettype($matchEngine)), __LINE__);
        }
        $this->matchEngine = $matchEngine;
        return $this;
    }
    /**
     * Get matchRecords value
     * @return \SFPartnerApi\v480\StructType\MatchRecord[]|null
     */
    public function getMatchRecords()
    {
        return $this->matchRecords;
    }
    /**
     * This method is responsible for validating the values passed to the setMatchRecords method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMatchRecords method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMatchRecordsForArrayConstraintsFromSetMatchRecords(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $matchResultMatchRecordsItem) {
            // validation for constraint: itemType
            if (!$matchResultMatchRecordsItem instanceof \SFPartnerApi\v480\StructType\MatchRecord) {
                $invalidValues[] = is_object($matchResultMatchRecordsItem) ? get_class($matchResultMatchRecordsItem) : sprintf('%s(%s)', gettype($matchResultMatchRecordsItem), var_export($matchResultMatchRecordsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The matchRecords property can only contain items of type \SFPartnerApi\v480\StructType\MatchRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set matchRecords value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\MatchRecord[] $matchRecords
     * @return \SFPartnerApi\v480\StructType\MatchResult
     */
    public function setMatchRecords(array $matchRecords = array())
    {
        // validation for constraint: array
        if ('' !== ($matchRecordsArrayErrorMessage = self::validateMatchRecordsForArrayConstraintsFromSetMatchRecords($matchRecords))) {
            throw new \InvalidArgumentException($matchRecordsArrayErrorMessage, __LINE__);
        }
        $this->matchRecords = $matchRecords;
        return $this;
    }
    /**
     * Add item to matchRecords value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\MatchRecord $item
     * @return \SFPartnerApi\v480\StructType\MatchResult
     */
    public function addToMatchRecords(\SFPartnerApi\v480\StructType\MatchRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\MatchRecord) {
            throw new \InvalidArgumentException(sprintf('The matchRecords property can only contain items of type \SFPartnerApi\v480\StructType\MatchRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->matchRecords[] = $item;
        return $this;
    }
    /**
     * Get rule value
     * @return string|null
     */
    public function getRule()
    {
        return $this->rule;
    }
    /**
     * Set rule value
     * @param string $rule
     * @return \SFPartnerApi\v480\StructType\MatchResult
     */
    public function setRule($rule = null)
    {
        // validation for constraint: string
        if (!is_null($rule) && !is_string($rule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rule, true), gettype($rule)), __LINE__);
        }
        $this->rule = $rule;
        return $this;
    }
    /**
     * Get size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \SFPartnerApi\v480\StructType\MatchResult
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
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
     * @return \SFPartnerApi\v480\StructType\MatchResult
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
     * @return \SFPartnerApi\v480\StructType\MatchResult
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
