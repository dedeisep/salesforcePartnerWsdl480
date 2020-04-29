<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MatchRecord StructType
 * @subpackage Structs
 */
class MatchRecord extends AbstractStructBase
{
    /**
     * The additionalInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\AdditionalInformationMap[]
     */
    public $additionalInformation;
    /**
     * The fieldDiffs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\FieldDiff[]
     */
    public $fieldDiffs;
    /**
     * The matchConfidence
     * @var float
     */
    public $matchConfidence;
    /**
     * The record
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $record;
    /**
     * Constructor method for MatchRecord
     * @uses MatchRecord::setAdditionalInformation()
     * @uses MatchRecord::setFieldDiffs()
     * @uses MatchRecord::setMatchConfidence()
     * @uses MatchRecord::setRecord()
     * @param \SFPartnerApi\v480\StructType\AdditionalInformationMap[] $additionalInformation
     * @param \SFPartnerApi\v480\StructType\FieldDiff[] $fieldDiffs
     * @param float $matchConfidence
     * @param \SFPartnerApi\v480\StructType\SObject $record
     */
    public function __construct(array $additionalInformation = array(), array $fieldDiffs = array(), $matchConfidence = null, \SFPartnerApi\v480\StructType\SObject $record = null)
    {
        $this
            ->setAdditionalInformation($additionalInformation)
            ->setFieldDiffs($fieldDiffs)
            ->setMatchConfidence($matchConfidence)
            ->setRecord($record);
    }
    /**
     * Get additionalInformation value
     * @return \SFPartnerApi\v480\StructType\AdditionalInformationMap[]|null
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalInformationForArrayConstraintsFromSetAdditionalInformation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $matchRecordAdditionalInformationItem) {
            // validation for constraint: itemType
            if (!$matchRecordAdditionalInformationItem instanceof \SFPartnerApi\v480\StructType\AdditionalInformationMap) {
                $invalidValues[] = is_object($matchRecordAdditionalInformationItem) ? get_class($matchRecordAdditionalInformationItem) : sprintf('%s(%s)', gettype($matchRecordAdditionalInformationItem), var_export($matchRecordAdditionalInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The additionalInformation property can only contain items of type \SFPartnerApi\v480\StructType\AdditionalInformationMap, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set additionalInformation value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\AdditionalInformationMap[] $additionalInformation
     * @return \SFPartnerApi\v480\StructType\MatchRecord
     */
    public function setAdditionalInformation(array $additionalInformation = array())
    {
        // validation for constraint: array
        if ('' !== ($additionalInformationArrayErrorMessage = self::validateAdditionalInformationForArrayConstraintsFromSetAdditionalInformation($additionalInformation))) {
            throw new \InvalidArgumentException($additionalInformationArrayErrorMessage, __LINE__);
        }
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
    /**
     * Add item to additionalInformation value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\AdditionalInformationMap $item
     * @return \SFPartnerApi\v480\StructType\MatchRecord
     */
    public function addToAdditionalInformation(\SFPartnerApi\v480\StructType\AdditionalInformationMap $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\AdditionalInformationMap) {
            throw new \InvalidArgumentException(sprintf('The additionalInformation property can only contain items of type \SFPartnerApi\v480\StructType\AdditionalInformationMap, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->additionalInformation[] = $item;
        return $this;
    }
    /**
     * Get fieldDiffs value
     * @return \SFPartnerApi\v480\StructType\FieldDiff[]|null
     */
    public function getFieldDiffs()
    {
        return $this->fieldDiffs;
    }
    /**
     * This method is responsible for validating the values passed to the setFieldDiffs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFieldDiffs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldDiffsForArrayConstraintsFromSetFieldDiffs(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $matchRecordFieldDiffsItem) {
            // validation for constraint: itemType
            if (!$matchRecordFieldDiffsItem instanceof \SFPartnerApi\v480\StructType\FieldDiff) {
                $invalidValues[] = is_object($matchRecordFieldDiffsItem) ? get_class($matchRecordFieldDiffsItem) : sprintf('%s(%s)', gettype($matchRecordFieldDiffsItem), var_export($matchRecordFieldDiffsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fieldDiffs property can only contain items of type \SFPartnerApi\v480\StructType\FieldDiff, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fieldDiffs value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\FieldDiff[] $fieldDiffs
     * @return \SFPartnerApi\v480\StructType\MatchRecord
     */
    public function setFieldDiffs(array $fieldDiffs = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldDiffsArrayErrorMessage = self::validateFieldDiffsForArrayConstraintsFromSetFieldDiffs($fieldDiffs))) {
            throw new \InvalidArgumentException($fieldDiffsArrayErrorMessage, __LINE__);
        }
        $this->fieldDiffs = $fieldDiffs;
        return $this;
    }
    /**
     * Add item to fieldDiffs value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\FieldDiff $item
     * @return \SFPartnerApi\v480\StructType\MatchRecord
     */
    public function addToFieldDiffs(\SFPartnerApi\v480\StructType\FieldDiff $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\FieldDiff) {
            throw new \InvalidArgumentException(sprintf('The fieldDiffs property can only contain items of type \SFPartnerApi\v480\StructType\FieldDiff, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fieldDiffs[] = $item;
        return $this;
    }
    /**
     * Get matchConfidence value
     * @return float|null
     */
    public function getMatchConfidence()
    {
        return $this->matchConfidence;
    }
    /**
     * Set matchConfidence value
     * @param float $matchConfidence
     * @return \SFPartnerApi\v480\StructType\MatchRecord
     */
    public function setMatchConfidence($matchConfidence = null)
    {
        // validation for constraint: float
        if (!is_null($matchConfidence) && !(is_float($matchConfidence) || is_numeric($matchConfidence))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($matchConfidence, true), gettype($matchConfidence)), __LINE__);
        }
        $this->matchConfidence = $matchConfidence;
        return $this;
    }
    /**
     * Get record value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getRecord()
    {
        return $this->record;
    }
    /**
     * Set record value
     * @param \SFPartnerApi\v480\StructType\SObject $record
     * @return \SFPartnerApi\v480\StructType\MatchRecord
     */
    public function setRecord(\SFPartnerApi\v480\StructType\SObject $record = null)
    {
        $this->record = $record;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\MatchRecord
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
