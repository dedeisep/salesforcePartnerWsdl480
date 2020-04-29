<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryResult StructType
 * @subpackage Structs
 */
class QueryResult extends AbstractStructBase
{
    /**
     * The done
     * @var bool
     */
    public $done;
    /**
     * The queryLocator
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - nillable: true
     * @var string
     */
    public $queryLocator;
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
     * The size
     * @var int
     */
    public $size;
    /**
     * Constructor method for QueryResult
     * @uses QueryResult::setDone()
     * @uses QueryResult::setQueryLocator()
     * @uses QueryResult::setRecords()
     * @uses QueryResult::setSize()
     * @param bool $done
     * @param string $queryLocator
     * @param \SFPartnerApi\v480\StructType\SObject[] $records
     * @param int $size
     */
    public function __construct($done = null, $queryLocator = null, array $records = array(), $size = null)
    {
        $this
            ->setDone($done)
            ->setQueryLocator($queryLocator)
            ->setRecords($records)
            ->setSize($size);
    }
    /**
     * Get done value
     * @return bool|null
     */
    public function getDone()
    {
        return $this->done;
    }
    /**
     * Set done value
     * @param bool $done
     * @return \SFPartnerApi\v480\StructType\QueryResult
     */
    public function setDone($done = null)
    {
        // validation for constraint: boolean
        if (!is_null($done) && !is_bool($done)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($done, true), gettype($done)), __LINE__);
        }
        $this->done = $done;
        return $this;
    }
    /**
     * Get queryLocator value
     * @return string|null
     */
    public function getQueryLocator()
    {
        return $this->queryLocator;
    }
    /**
     * Set queryLocator value
     * @param string $queryLocator
     * @return \SFPartnerApi\v480\StructType\QueryResult
     */
    public function setQueryLocator($queryLocator = null)
    {
        // validation for constraint: string
        if (!is_null($queryLocator) && !is_string($queryLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryLocator, true), gettype($queryLocator)), __LINE__);
        }
        $this->queryLocator = $queryLocator;
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
        foreach ($values as $queryResultRecordsItem) {
            // validation for constraint: itemType
            if (!$queryResultRecordsItem instanceof \SFPartnerApi\v480\StructType\SObject) {
                $invalidValues[] = is_object($queryResultRecordsItem) ? get_class($queryResultRecordsItem) : sprintf('%s(%s)', gettype($queryResultRecordsItem), var_export($queryResultRecordsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\QueryResult
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
     * @return \SFPartnerApi\v480\StructType\QueryResult
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
     * @return \SFPartnerApi\v480\StructType\QueryResult
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\QueryResult
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
