<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformQuickActionRequest StructType
 * @subpackage Structs
 */
class PerformQuickActionRequest extends AbstractStructBase
{
    /**
     * The contextId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $contextId;
    /**
     * The quickActionName
     * @var string
     */
    public $quickActionName;
    /**
     * The records
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SObject[]
     */
    public $records;
    /**
     * Constructor method for PerformQuickActionRequest
     * @uses PerformQuickActionRequest::setContextId()
     * @uses PerformQuickActionRequest::setQuickActionName()
     * @uses PerformQuickActionRequest::setRecords()
     * @param string $contextId
     * @param string $quickActionName
     * @param \SFPartnerApi\v480\StructType\SObject[] $records
     */
    public function __construct($contextId = null, $quickActionName = null, array $records = array())
    {
        $this
            ->setContextId($contextId)
            ->setQuickActionName($quickActionName)
            ->setRecords($records);
    }
    /**
     * Get contextId value
     * @return string|null
     */
    public function getContextId()
    {
        return $this->contextId;
    }
    /**
     * Set contextId value
     * @param string $contextId
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionRequest
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
        $this->contextId = $contextId;
        return $this;
    }
    /**
     * Get quickActionName value
     * @return string|null
     */
    public function getQuickActionName()
    {
        return $this->quickActionName;
    }
    /**
     * Set quickActionName value
     * @param string $quickActionName
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionRequest
     */
    public function setQuickActionName($quickActionName = null)
    {
        // validation for constraint: string
        if (!is_null($quickActionName) && !is_string($quickActionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quickActionName, true), gettype($quickActionName)), __LINE__);
        }
        $this->quickActionName = $quickActionName;
        return $this;
    }
    /**
     * Get records value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\SObject[]|null
     */
    public function getRecords()
    {
        return isset($this->records) ? $this->records : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRecords method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecords method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordsForArrayConstraintsFromSetRecords(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performQuickActionRequestRecordsItem) {
            // validation for constraint: itemType
            if (!$performQuickActionRequestRecordsItem instanceof \SFPartnerApi\v480\StructType\SObject) {
                $invalidValues[] = is_object($performQuickActionRequestRecordsItem) ? get_class($performQuickActionRequestRecordsItem) : sprintf('%s(%s)', gettype($performQuickActionRequestRecordsItem), var_export($performQuickActionRequestRecordsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The records property can only contain items of type \SFPartnerApi\v480\StructType\SObject, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set records value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SObject[] $records
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionRequest
     */
    public function setRecords(array $records = array())
    {
        // validation for constraint: array
        if ('' !== ($recordsArrayErrorMessage = self::validateRecordsForArrayConstraintsFromSetRecords($records))) {
            throw new \InvalidArgumentException($recordsArrayErrorMessage, __LINE__);
        }
        if (is_null($records) || (is_array($records) && empty($records))) {
            unset($this->records);
        } else {
            $this->records = $records;
        }
        return $this;
    }
    /**
     * Add item to records value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SObject $item
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionRequest
     */
    public function addToRecords(\SFPartnerApi\v480\StructType\SObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\SObject) {
            throw new \InvalidArgumentException(sprintf('The records property can only contain items of type \SFPartnerApi\v480\StructType\SObject, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->records[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionRequest
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
