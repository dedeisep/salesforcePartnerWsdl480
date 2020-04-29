<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeEventHeader StructType
 * @subpackage Structs
 */
class ChangeEventHeader extends AbstractStructBase
{
    /**
     * The recordIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $recordIds;
    /**
     * The entityName
     * @var string
     */
    public $entityName;
    /**
     * The commitTimestamp
     * @var int
     */
    public $commitTimestamp;
    /**
     * The commitNumber
     * @var int
     */
    public $commitNumber;
    /**
     * The commitUser
     * @var string
     */
    public $commitUser;
    /**
     * The diffFields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $diffFields;
    /**
     * The changeType
     * @var string
     */
    public $changeType;
    /**
     * The changeOrigin
     * @var string
     */
    public $changeOrigin;
    /**
     * The transactionKey
     * @var string
     */
    public $transactionKey;
    /**
     * The sequenceNumber
     * @var int
     */
    public $sequenceNumber;
    /**
     * The nulledFields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $nulledFields;
    /**
     * The changedFields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $changedFields;
    /**
     * Constructor method for ChangeEventHeader
     * @uses ChangeEventHeader::setRecordIds()
     * @uses ChangeEventHeader::setEntityName()
     * @uses ChangeEventHeader::setCommitTimestamp()
     * @uses ChangeEventHeader::setCommitNumber()
     * @uses ChangeEventHeader::setCommitUser()
     * @uses ChangeEventHeader::setDiffFields()
     * @uses ChangeEventHeader::setChangeType()
     * @uses ChangeEventHeader::setChangeOrigin()
     * @uses ChangeEventHeader::setTransactionKey()
     * @uses ChangeEventHeader::setSequenceNumber()
     * @uses ChangeEventHeader::setNulledFields()
     * @uses ChangeEventHeader::setChangedFields()
     * @param string[] $recordIds
     * @param string $entityName
     * @param int $commitTimestamp
     * @param int $commitNumber
     * @param string $commitUser
     * @param string[] $diffFields
     * @param string $changeType
     * @param string $changeOrigin
     * @param string $transactionKey
     * @param int $sequenceNumber
     * @param string[] $nulledFields
     * @param string[] $changedFields
     */
    public function __construct(array $recordIds = array(), $entityName = null, $commitTimestamp = null, $commitNumber = null, $commitUser = null, array $diffFields = array(), $changeType = null, $changeOrigin = null, $transactionKey = null, $sequenceNumber = null, array $nulledFields = array(), array $changedFields = array())
    {
        $this
            ->setRecordIds($recordIds)
            ->setEntityName($entityName)
            ->setCommitTimestamp($commitTimestamp)
            ->setCommitNumber($commitNumber)
            ->setCommitUser($commitUser)
            ->setDiffFields($diffFields)
            ->setChangeType($changeType)
            ->setChangeOrigin($changeOrigin)
            ->setTransactionKey($transactionKey)
            ->setSequenceNumber($sequenceNumber)
            ->setNulledFields($nulledFields)
            ->setChangedFields($changedFields);
    }
    /**
     * Get recordIds value
     * @return string[]
     */
    public function getRecordIds()
    {
        return $this->recordIds;
    }
    /**
     * This method is responsible for validating the values passed to the setRecordIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecordIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordIdsForArrayConstraintsFromSetRecordIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $changeEventHeaderRecordIdsItem) {
            // validation for constraint: itemType
            if (!is_string($changeEventHeaderRecordIdsItem)) {
                $invalidValues[] = is_object($changeEventHeaderRecordIdsItem) ? get_class($changeEventHeaderRecordIdsItem) : sprintf('%s(%s)', gettype($changeEventHeaderRecordIdsItem), var_export($changeEventHeaderRecordIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recordIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recordIds value
     * @throws \InvalidArgumentException
     * @param string[] $recordIds
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setRecordIds(array $recordIds = array())
    {
        // validation for constraint: array
        if ('' !== ($recordIdsArrayErrorMessage = self::validateRecordIdsForArrayConstraintsFromSetRecordIds($recordIds))) {
            throw new \InvalidArgumentException($recordIdsArrayErrorMessage, __LINE__);
        }
        $this->recordIds = $recordIds;
        return $this;
    }
    /**
     * Add item to recordIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function addToRecordIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The recordIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recordIds[] = $item;
        return $this;
    }
    /**
     * Get entityName value
     * @return string|null
     */
    public function getEntityName()
    {
        return $this->entityName;
    }
    /**
     * Set entityName value
     * @param string $entityName
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setEntityName($entityName = null)
    {
        // validation for constraint: string
        if (!is_null($entityName) && !is_string($entityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityName, true), gettype($entityName)), __LINE__);
        }
        $this->entityName = $entityName;
        return $this;
    }
    /**
     * Get commitTimestamp value
     * @return int|null
     */
    public function getCommitTimestamp()
    {
        return $this->commitTimestamp;
    }
    /**
     * Set commitTimestamp value
     * @param int $commitTimestamp
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setCommitTimestamp($commitTimestamp = null)
    {
        // validation for constraint: int
        if (!is_null($commitTimestamp) && !(is_int($commitTimestamp) || ctype_digit($commitTimestamp))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commitTimestamp, true), gettype($commitTimestamp)), __LINE__);
        }
        $this->commitTimestamp = $commitTimestamp;
        return $this;
    }
    /**
     * Get commitNumber value
     * @return int|null
     */
    public function getCommitNumber()
    {
        return $this->commitNumber;
    }
    /**
     * Set commitNumber value
     * @param int $commitNumber
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setCommitNumber($commitNumber = null)
    {
        // validation for constraint: int
        if (!is_null($commitNumber) && !(is_int($commitNumber) || ctype_digit($commitNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commitNumber, true), gettype($commitNumber)), __LINE__);
        }
        $this->commitNumber = $commitNumber;
        return $this;
    }
    /**
     * Get commitUser value
     * @return string|null
     */
    public function getCommitUser()
    {
        return $this->commitUser;
    }
    /**
     * Set commitUser value
     * @param string $commitUser
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setCommitUser($commitUser = null)
    {
        // validation for constraint: string
        if (!is_null($commitUser) && !is_string($commitUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commitUser, true), gettype($commitUser)), __LINE__);
        }
        $this->commitUser = $commitUser;
        return $this;
    }
    /**
     * Get diffFields value
     * @return string[]|null
     */
    public function getDiffFields()
    {
        return $this->diffFields;
    }
    /**
     * This method is responsible for validating the values passed to the setDiffFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiffFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiffFieldsForArrayConstraintsFromSetDiffFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $changeEventHeaderDiffFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($changeEventHeaderDiffFieldsItem)) {
                $invalidValues[] = is_object($changeEventHeaderDiffFieldsItem) ? get_class($changeEventHeaderDiffFieldsItem) : sprintf('%s(%s)', gettype($changeEventHeaderDiffFieldsItem), var_export($changeEventHeaderDiffFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The diffFields property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set diffFields value
     * @throws \InvalidArgumentException
     * @param string[] $diffFields
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setDiffFields(array $diffFields = array())
    {
        // validation for constraint: array
        if ('' !== ($diffFieldsArrayErrorMessage = self::validateDiffFieldsForArrayConstraintsFromSetDiffFields($diffFields))) {
            throw new \InvalidArgumentException($diffFieldsArrayErrorMessage, __LINE__);
        }
        $this->diffFields = $diffFields;
        return $this;
    }
    /**
     * Add item to diffFields value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function addToDiffFields($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The diffFields property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->diffFields[] = $item;
        return $this;
    }
    /**
     * Get changeType value
     * @return string|null
     */
    public function getChangeType()
    {
        return $this->changeType;
    }
    /**
     * Set changeType value
     * @uses \SFPartnerApi\v480\EnumType\ChangeEventType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\ChangeEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $changeType
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setChangeType($changeType = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\ChangeEventType::valueIsValid($changeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\ChangeEventType', is_array($changeType) ? implode(', ', $changeType) : var_export($changeType, true), implode(', ', \SFPartnerApi\v480\EnumType\ChangeEventType::getValidValues())), __LINE__);
        }
        $this->changeType = $changeType;
        return $this;
    }
    /**
     * Get changeOrigin value
     * @return string|null
     */
    public function getChangeOrigin()
    {
        return $this->changeOrigin;
    }
    /**
     * Set changeOrigin value
     * @param string $changeOrigin
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setChangeOrigin($changeOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($changeOrigin) && !is_string($changeOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeOrigin, true), gettype($changeOrigin)), __LINE__);
        }
        $this->changeOrigin = $changeOrigin;
        return $this;
    }
    /**
     * Get transactionKey value
     * @return string|null
     */
    public function getTransactionKey()
    {
        return $this->transactionKey;
    }
    /**
     * Set transactionKey value
     * @param string $transactionKey
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setTransactionKey($transactionKey = null)
    {
        // validation for constraint: string
        if (!is_null($transactionKey) && !is_string($transactionKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionKey, true), gettype($transactionKey)), __LINE__);
        }
        $this->transactionKey = $transactionKey;
        return $this;
    }
    /**
     * Get sequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }
    /**
     * Set sequenceNumber value
     * @param int $sequenceNumber
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !(is_int($sequenceNumber) || ctype_digit($sequenceNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sequenceNumber, true), gettype($sequenceNumber)), __LINE__);
        }
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get nulledFields value
     * @return string[]|null
     */
    public function getNulledFields()
    {
        return $this->nulledFields;
    }
    /**
     * This method is responsible for validating the values passed to the setNulledFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNulledFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNulledFieldsForArrayConstraintsFromSetNulledFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $changeEventHeaderNulledFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($changeEventHeaderNulledFieldsItem)) {
                $invalidValues[] = is_object($changeEventHeaderNulledFieldsItem) ? get_class($changeEventHeaderNulledFieldsItem) : sprintf('%s(%s)', gettype($changeEventHeaderNulledFieldsItem), var_export($changeEventHeaderNulledFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The nulledFields property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set nulledFields value
     * @throws \InvalidArgumentException
     * @param string[] $nulledFields
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setNulledFields(array $nulledFields = array())
    {
        // validation for constraint: array
        if ('' !== ($nulledFieldsArrayErrorMessage = self::validateNulledFieldsForArrayConstraintsFromSetNulledFields($nulledFields))) {
            throw new \InvalidArgumentException($nulledFieldsArrayErrorMessage, __LINE__);
        }
        $this->nulledFields = $nulledFields;
        return $this;
    }
    /**
     * Add item to nulledFields value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function addToNulledFields($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The nulledFields property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->nulledFields[] = $item;
        return $this;
    }
    /**
     * Get changedFields value
     * @return string[]|null
     */
    public function getChangedFields()
    {
        return $this->changedFields;
    }
    /**
     * This method is responsible for validating the values passed to the setChangedFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChangedFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChangedFieldsForArrayConstraintsFromSetChangedFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $changeEventHeaderChangedFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($changeEventHeaderChangedFieldsItem)) {
                $invalidValues[] = is_object($changeEventHeaderChangedFieldsItem) ? get_class($changeEventHeaderChangedFieldsItem) : sprintf('%s(%s)', gettype($changeEventHeaderChangedFieldsItem), var_export($changeEventHeaderChangedFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The changedFields property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set changedFields value
     * @throws \InvalidArgumentException
     * @param string[] $changedFields
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function setChangedFields(array $changedFields = array())
    {
        // validation for constraint: array
        if ('' !== ($changedFieldsArrayErrorMessage = self::validateChangedFieldsForArrayConstraintsFromSetChangedFields($changedFields))) {
            throw new \InvalidArgumentException($changedFieldsArrayErrorMessage, __LINE__);
        }
        $this->changedFields = $changedFields;
        return $this;
    }
    /**
     * Add item to changedFields value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
     */
    public function addToChangedFields($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The changedFields property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->changedFields[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ChangeEventHeader
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
