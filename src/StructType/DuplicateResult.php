<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateResult StructType
 * @subpackage Structs
 */
class DuplicateResult extends AbstractStructBase
{
    /**
     * The allowSave
     * @var bool
     */
    public $allowSave;
    /**
     * The duplicateRule
     * @var string
     */
    public $duplicateRule;
    /**
     * The duplicateRuleEntityType
     * @var string
     */
    public $duplicateRuleEntityType;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $errorMessage;
    /**
     * The matchResults
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\MatchResult[]
     */
    public $matchResults;
    /**
     * Constructor method for DuplicateResult
     * @uses DuplicateResult::setAllowSave()
     * @uses DuplicateResult::setDuplicateRule()
     * @uses DuplicateResult::setDuplicateRuleEntityType()
     * @uses DuplicateResult::setErrorMessage()
     * @uses DuplicateResult::setMatchResults()
     * @param bool $allowSave
     * @param string $duplicateRule
     * @param string $duplicateRuleEntityType
     * @param string $errorMessage
     * @param \SFPartnerApi\v480\StructType\MatchResult[] $matchResults
     */
    public function __construct($allowSave = null, $duplicateRule = null, $duplicateRuleEntityType = null, $errorMessage = null, array $matchResults = array())
    {
        $this
            ->setAllowSave($allowSave)
            ->setDuplicateRule($duplicateRule)
            ->setDuplicateRuleEntityType($duplicateRuleEntityType)
            ->setErrorMessage($errorMessage)
            ->setMatchResults($matchResults);
    }
    /**
     * Get allowSave value
     * @return bool|null
     */
    public function getAllowSave()
    {
        return $this->allowSave;
    }
    /**
     * Set allowSave value
     * @param bool $allowSave
     * @return \SFPartnerApi\v480\StructType\DuplicateResult
     */
    public function setAllowSave($allowSave = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSave) && !is_bool($allowSave)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowSave, true), gettype($allowSave)), __LINE__);
        }
        $this->allowSave = $allowSave;
        return $this;
    }
    /**
     * Get duplicateRule value
     * @return string|null
     */
    public function getDuplicateRule()
    {
        return $this->duplicateRule;
    }
    /**
     * Set duplicateRule value
     * @param string $duplicateRule
     * @return \SFPartnerApi\v480\StructType\DuplicateResult
     */
    public function setDuplicateRule($duplicateRule = null)
    {
        // validation for constraint: string
        if (!is_null($duplicateRule) && !is_string($duplicateRule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duplicateRule, true), gettype($duplicateRule)), __LINE__);
        }
        $this->duplicateRule = $duplicateRule;
        return $this;
    }
    /**
     * Get duplicateRuleEntityType value
     * @return string|null
     */
    public function getDuplicateRuleEntityType()
    {
        return $this->duplicateRuleEntityType;
    }
    /**
     * Set duplicateRuleEntityType value
     * @param string $duplicateRuleEntityType
     * @return \SFPartnerApi\v480\StructType\DuplicateResult
     */
    public function setDuplicateRuleEntityType($duplicateRuleEntityType = null)
    {
        // validation for constraint: string
        if (!is_null($duplicateRuleEntityType) && !is_string($duplicateRuleEntityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duplicateRuleEntityType, true), gettype($duplicateRuleEntityType)), __LINE__);
        }
        $this->duplicateRuleEntityType = $duplicateRuleEntityType;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \SFPartnerApi\v480\StructType\DuplicateResult
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get matchResults value
     * @return \SFPartnerApi\v480\StructType\MatchResult[]|null
     */
    public function getMatchResults()
    {
        return $this->matchResults;
    }
    /**
     * This method is responsible for validating the values passed to the setMatchResults method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMatchResults method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMatchResultsForArrayConstraintsFromSetMatchResults(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $duplicateResultMatchResultsItem) {
            // validation for constraint: itemType
            if (!$duplicateResultMatchResultsItem instanceof \SFPartnerApi\v480\StructType\MatchResult) {
                $invalidValues[] = is_object($duplicateResultMatchResultsItem) ? get_class($duplicateResultMatchResultsItem) : sprintf('%s(%s)', gettype($duplicateResultMatchResultsItem), var_export($duplicateResultMatchResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The matchResults property can only contain items of type \SFPartnerApi\v480\StructType\MatchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set matchResults value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\MatchResult[] $matchResults
     * @return \SFPartnerApi\v480\StructType\DuplicateResult
     */
    public function setMatchResults(array $matchResults = array())
    {
        // validation for constraint: array
        if ('' !== ($matchResultsArrayErrorMessage = self::validateMatchResultsForArrayConstraintsFromSetMatchResults($matchResults))) {
            throw new \InvalidArgumentException($matchResultsArrayErrorMessage, __LINE__);
        }
        $this->matchResults = $matchResults;
        return $this;
    }
    /**
     * Add item to matchResults value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\MatchResult $item
     * @return \SFPartnerApi\v480\StructType\DuplicateResult
     */
    public function addToMatchResults(\SFPartnerApi\v480\StructType\MatchResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\MatchResult) {
            throw new \InvalidArgumentException(sprintf('The matchResults property can only contain items of type \SFPartnerApi\v480\StructType\MatchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->matchResults[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DuplicateResult
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
