<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeletedResult StructType
 * @subpackage Structs
 */
class GetDeletedResult extends AbstractStructBase
{
    /**
     * The deletedRecords
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DeletedRecord[]
     */
    public $deletedRecords;
    /**
     * The earliestDateAvailable
     * @var string
     */
    public $earliestDateAvailable;
    /**
     * The latestDateCovered
     * @var string
     */
    public $latestDateCovered;
    /**
     * Constructor method for GetDeletedResult
     * @uses GetDeletedResult::setDeletedRecords()
     * @uses GetDeletedResult::setEarliestDateAvailable()
     * @uses GetDeletedResult::setLatestDateCovered()
     * @param \SFPartnerApi\v480\StructType\DeletedRecord[] $deletedRecords
     * @param string $earliestDateAvailable
     * @param string $latestDateCovered
     */
    public function __construct(array $deletedRecords = array(), $earliestDateAvailable = null, $latestDateCovered = null)
    {
        $this
            ->setDeletedRecords($deletedRecords)
            ->setEarliestDateAvailable($earliestDateAvailable)
            ->setLatestDateCovered($latestDateCovered);
    }
    /**
     * Get deletedRecords value
     * @return \SFPartnerApi\v480\StructType\DeletedRecord[]|null
     */
    public function getDeletedRecords()
    {
        return $this->deletedRecords;
    }
    /**
     * This method is responsible for validating the values passed to the setDeletedRecords method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedRecords method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedRecordsForArrayConstraintsFromSetDeletedRecords(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDeletedResultDeletedRecordsItem) {
            // validation for constraint: itemType
            if (!$getDeletedResultDeletedRecordsItem instanceof \SFPartnerApi\v480\StructType\DeletedRecord) {
                $invalidValues[] = is_object($getDeletedResultDeletedRecordsItem) ? get_class($getDeletedResultDeletedRecordsItem) : sprintf('%s(%s)', gettype($getDeletedResultDeletedRecordsItem), var_export($getDeletedResultDeletedRecordsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The deletedRecords property can only contain items of type \SFPartnerApi\v480\StructType\DeletedRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set deletedRecords value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DeletedRecord[] $deletedRecords
     * @return \SFPartnerApi\v480\StructType\GetDeletedResult
     */
    public function setDeletedRecords(array $deletedRecords = array())
    {
        // validation for constraint: array
        if ('' !== ($deletedRecordsArrayErrorMessage = self::validateDeletedRecordsForArrayConstraintsFromSetDeletedRecords($deletedRecords))) {
            throw new \InvalidArgumentException($deletedRecordsArrayErrorMessage, __LINE__);
        }
        $this->deletedRecords = $deletedRecords;
        return $this;
    }
    /**
     * Add item to deletedRecords value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DeletedRecord $item
     * @return \SFPartnerApi\v480\StructType\GetDeletedResult
     */
    public function addToDeletedRecords(\SFPartnerApi\v480\StructType\DeletedRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DeletedRecord) {
            throw new \InvalidArgumentException(sprintf('The deletedRecords property can only contain items of type \SFPartnerApi\v480\StructType\DeletedRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->deletedRecords[] = $item;
        return $this;
    }
    /**
     * Get earliestDateAvailable value
     * @return string|null
     */
    public function getEarliestDateAvailable()
    {
        return $this->earliestDateAvailable;
    }
    /**
     * Set earliestDateAvailable value
     * @param string $earliestDateAvailable
     * @return \SFPartnerApi\v480\StructType\GetDeletedResult
     */
    public function setEarliestDateAvailable($earliestDateAvailable = null)
    {
        // validation for constraint: string
        if (!is_null($earliestDateAvailable) && !is_string($earliestDateAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliestDateAvailable, true), gettype($earliestDateAvailable)), __LINE__);
        }
        $this->earliestDateAvailable = $earliestDateAvailable;
        return $this;
    }
    /**
     * Get latestDateCovered value
     * @return string|null
     */
    public function getLatestDateCovered()
    {
        return $this->latestDateCovered;
    }
    /**
     * Set latestDateCovered value
     * @param string $latestDateCovered
     * @return \SFPartnerApi\v480\StructType\GetDeletedResult
     */
    public function setLatestDateCovered($latestDateCovered = null)
    {
        // validation for constraint: string
        if (!is_null($latestDateCovered) && !is_string($latestDateCovered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestDateCovered, true), gettype($latestDateCovered)), __LINE__);
        }
        $this->latestDateCovered = $latestDateCovered;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\GetDeletedResult
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
