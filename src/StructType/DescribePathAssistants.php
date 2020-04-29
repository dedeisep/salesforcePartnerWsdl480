<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describePathAssistants StructType
 * @subpackage Structs
 */
class DescribePathAssistants extends AbstractStructBase
{
    /**
     * The sObjectType
     * @var string
     */
    public $sObjectType;
    /**
     * The picklistValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $picklistValue;
    /**
     * The recordTypeIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $recordTypeIds;
    /**
     * Constructor method for describePathAssistants
     * @uses DescribePathAssistants::setSObjectType()
     * @uses DescribePathAssistants::setPicklistValue()
     * @uses DescribePathAssistants::setRecordTypeIds()
     * @param string $sObjectType
     * @param string $picklistValue
     * @param string[] $recordTypeIds
     */
    public function __construct($sObjectType = null, $picklistValue = null, array $recordTypeIds = array())
    {
        $this
            ->setSObjectType($sObjectType)
            ->setPicklistValue($picklistValue)
            ->setRecordTypeIds($recordTypeIds);
    }
    /**
     * Get sObjectType value
     * @return string|null
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }
    /**
     * Set sObjectType value
     * @param string $sObjectType
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistants
     */
    public function setSObjectType($sObjectType = null)
    {
        // validation for constraint: string
        if (!is_null($sObjectType) && !is_string($sObjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sObjectType, true), gettype($sObjectType)), __LINE__);
        }
        $this->sObjectType = $sObjectType;
        return $this;
    }
    /**
     * Get picklistValue value
     * @return string|null
     */
    public function getPicklistValue()
    {
        return $this->picklistValue;
    }
    /**
     * Set picklistValue value
     * @param string $picklistValue
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistants
     */
    public function setPicklistValue($picklistValue = null)
    {
        // validation for constraint: string
        if (!is_null($picklistValue) && !is_string($picklistValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($picklistValue, true), gettype($picklistValue)), __LINE__);
        }
        $this->picklistValue = $picklistValue;
        return $this;
    }
    /**
     * Get recordTypeIds value
     * @return string[]|null
     */
    public function getRecordTypeIds()
    {
        return $this->recordTypeIds;
    }
    /**
     * This method is responsible for validating the values passed to the setRecordTypeIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecordTypeIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordTypeIdsForArrayConstraintsFromSetRecordTypeIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describePathAssistantsRecordTypeIdsItem) {
            // validation for constraint: itemType
            if (!is_string($describePathAssistantsRecordTypeIdsItem)) {
                $invalidValues[] = is_object($describePathAssistantsRecordTypeIdsItem) ? get_class($describePathAssistantsRecordTypeIdsItem) : sprintf('%s(%s)', gettype($describePathAssistantsRecordTypeIdsItem), var_export($describePathAssistantsRecordTypeIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recordTypeIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setRecordTypeIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecordTypeIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordTypeIdsForLengthConstraintFromSetRecordTypeIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describePathAssistantsRecordTypeIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($describePathAssistantsRecordTypeIdsItem) !== 18) {
                $invalidValues[] = var_export($describePathAssistantsRecordTypeIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recordTypeIds value
     * @throws \InvalidArgumentException
     * @param string[] $recordTypeIds
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistants
     */
    public function setRecordTypeIds(array $recordTypeIds = array())
    {
        // validation for constraint: array
        if ('' !== ($recordTypeIdsArrayErrorMessage = self::validateRecordTypeIdsForArrayConstraintsFromSetRecordTypeIds($recordTypeIds))) {
            throw new \InvalidArgumentException($recordTypeIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($recordTypeIdsLengthErrorMessage = self::validateRecordTypeIdsForLengthConstraintFromSetRecordTypeIds($recordTypeIds))) {
            throw new \InvalidArgumentException($recordTypeIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($recordTypeIds) && !preg_match('/[a-zA-Z0-9]{18}/', $recordTypeIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($recordTypeIds, true)), __LINE__);
        }
        $this->recordTypeIds = $recordTypeIds;
        return $this;
    }
    /**
     * Add item to recordTypeIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistants
     */
    public function addToRecordTypeIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The recordTypeIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->recordTypeIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistants
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
