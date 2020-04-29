<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MergeRequest StructType
 * @subpackage Structs
 */
class MergeRequest extends AbstractStructBase
{
    /**
     * The recordToMergeIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $recordToMergeIds;
    /**
     * The additionalInformationMap
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\AdditionalInformationMap[]
     */
    public $additionalInformationMap;
    /**
     * The masterRecord
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $masterRecord;
    /**
     * Constructor method for MergeRequest
     * @uses MergeRequest::setRecordToMergeIds()
     * @uses MergeRequest::setAdditionalInformationMap()
     * @uses MergeRequest::setMasterRecord()
     * @param string[] $recordToMergeIds
     * @param \SFPartnerApi\v480\StructType\AdditionalInformationMap[] $additionalInformationMap
     * @param \SFPartnerApi\v480\StructType\SObject $masterRecord
     */
    public function __construct(array $recordToMergeIds = array(), array $additionalInformationMap = array(), \SFPartnerApi\v480\StructType\SObject $masterRecord = null)
    {
        $this
            ->setRecordToMergeIds($recordToMergeIds)
            ->setAdditionalInformationMap($additionalInformationMap)
            ->setMasterRecord($masterRecord);
    }
    /**
     * Get recordToMergeIds value
     * @return string[]
     */
    public function getRecordToMergeIds()
    {
        return $this->recordToMergeIds;
    }
    /**
     * This method is responsible for validating the values passed to the setRecordToMergeIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecordToMergeIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordToMergeIdsForArrayConstraintsFromSetRecordToMergeIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeRequestRecordToMergeIdsItem) {
            // validation for constraint: itemType
            if (!is_string($mergeRequestRecordToMergeIdsItem)) {
                $invalidValues[] = is_object($mergeRequestRecordToMergeIdsItem) ? get_class($mergeRequestRecordToMergeIdsItem) : sprintf('%s(%s)', gettype($mergeRequestRecordToMergeIdsItem), var_export($mergeRequestRecordToMergeIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recordToMergeIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setRecordToMergeIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecordToMergeIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordToMergeIdsForLengthConstraintFromSetRecordToMergeIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeRequestRecordToMergeIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($mergeRequestRecordToMergeIdsItem) !== 18) {
                $invalidValues[] = var_export($mergeRequestRecordToMergeIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recordToMergeIds value
     * @throws \InvalidArgumentException
     * @param string[] $recordToMergeIds
     * @return \SFPartnerApi\v480\StructType\MergeRequest
     */
    public function setRecordToMergeIds(array $recordToMergeIds = array())
    {
        // validation for constraint: array
        if ('' !== ($recordToMergeIdsArrayErrorMessage = self::validateRecordToMergeIdsForArrayConstraintsFromSetRecordToMergeIds($recordToMergeIds))) {
            throw new \InvalidArgumentException($recordToMergeIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($recordToMergeIdsLengthErrorMessage = self::validateRecordToMergeIdsForLengthConstraintFromSetRecordToMergeIds($recordToMergeIds))) {
            throw new \InvalidArgumentException($recordToMergeIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($recordToMergeIds) && !preg_match('/[a-zA-Z0-9]{18}/', $recordToMergeIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($recordToMergeIds, true)), __LINE__);
        }
        $this->recordToMergeIds = $recordToMergeIds;
        return $this;
    }
    /**
     * Add item to recordToMergeIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\MergeRequest
     */
    public function addToRecordToMergeIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The recordToMergeIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->recordToMergeIds[] = $item;
        return $this;
    }
    /**
     * Get additionalInformationMap value
     * @return \SFPartnerApi\v480\StructType\AdditionalInformationMap[]|null
     */
    public function getAdditionalInformationMap()
    {
        return $this->additionalInformationMap;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalInformationMap method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalInformationMap method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalInformationMapForArrayConstraintsFromSetAdditionalInformationMap(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mergeRequestAdditionalInformationMapItem) {
            // validation for constraint: itemType
            if (!$mergeRequestAdditionalInformationMapItem instanceof \SFPartnerApi\v480\StructType\AdditionalInformationMap) {
                $invalidValues[] = is_object($mergeRequestAdditionalInformationMapItem) ? get_class($mergeRequestAdditionalInformationMapItem) : sprintf('%s(%s)', gettype($mergeRequestAdditionalInformationMapItem), var_export($mergeRequestAdditionalInformationMapItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The additionalInformationMap property can only contain items of type \SFPartnerApi\v480\StructType\AdditionalInformationMap, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set additionalInformationMap value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\AdditionalInformationMap[] $additionalInformationMap
     * @return \SFPartnerApi\v480\StructType\MergeRequest
     */
    public function setAdditionalInformationMap(array $additionalInformationMap = array())
    {
        // validation for constraint: array
        if ('' !== ($additionalInformationMapArrayErrorMessage = self::validateAdditionalInformationMapForArrayConstraintsFromSetAdditionalInformationMap($additionalInformationMap))) {
            throw new \InvalidArgumentException($additionalInformationMapArrayErrorMessage, __LINE__);
        }
        $this->additionalInformationMap = $additionalInformationMap;
        return $this;
    }
    /**
     * Add item to additionalInformationMap value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\AdditionalInformationMap $item
     * @return \SFPartnerApi\v480\StructType\MergeRequest
     */
    public function addToAdditionalInformationMap(\SFPartnerApi\v480\StructType\AdditionalInformationMap $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\AdditionalInformationMap) {
            throw new \InvalidArgumentException(sprintf('The additionalInformationMap property can only contain items of type \SFPartnerApi\v480\StructType\AdditionalInformationMap, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->additionalInformationMap[] = $item;
        return $this;
    }
    /**
     * Get masterRecord value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getMasterRecord()
    {
        return $this->masterRecord;
    }
    /**
     * Set masterRecord value
     * @param \SFPartnerApi\v480\StructType\SObject $masterRecord
     * @return \SFPartnerApi\v480\StructType\MergeRequest
     */
    public function setMasterRecord(\SFPartnerApi\v480\StructType\SObject $masterRecord = null)
    {
        $this->masterRecord = $masterRecord;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\MergeRequest
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
