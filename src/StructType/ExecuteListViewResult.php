<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteListViewResult StructType
 * @subpackage Structs
 */
class ExecuteListViewResult extends AbstractStructBase
{
    /**
     * The columns
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\ListViewColumn[]
     */
    public $columns;
    /**
     * The records
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\ListViewRecord[]
     */
    public $records;
    /**
     * The developerName
     * @var string
     */
    public $developerName;
    /**
     * The done
     * @var bool
     */
    public $done;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The size
     * @var int
     */
    public $size;
    /**
     * Constructor method for ExecuteListViewResult
     * @uses ExecuteListViewResult::setColumns()
     * @uses ExecuteListViewResult::setRecords()
     * @uses ExecuteListViewResult::setDeveloperName()
     * @uses ExecuteListViewResult::setDone()
     * @uses ExecuteListViewResult::setId()
     * @uses ExecuteListViewResult::setLabel()
     * @uses ExecuteListViewResult::setSize()
     * @param \SFPartnerApi\v480\StructType\ListViewColumn[] $columns
     * @param \SFPartnerApi\v480\StructType\ListViewRecord[] $records
     * @param string $developerName
     * @param bool $done
     * @param string $id
     * @param string $label
     * @param int $size
     */
    public function __construct(array $columns = array(), array $records = array(), $developerName = null, $done = null, $id = null, $label = null, $size = null)
    {
        $this
            ->setColumns($columns)
            ->setRecords($records)
            ->setDeveloperName($developerName)
            ->setDone($done)
            ->setId($id)
            ->setLabel($label)
            ->setSize($size);
    }
    /**
     * Get columns value
     * @return \SFPartnerApi\v480\StructType\ListViewColumn[]
     */
    public function getColumns()
    {
        return $this->columns;
    }
    /**
     * This method is responsible for validating the values passed to the setColumns method
     * This method is willingly generated in order to preserve the one-line inline validation within the setColumns method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColumnsForArrayConstraintsFromSetColumns(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeListViewResultColumnsItem) {
            // validation for constraint: itemType
            if (!$executeListViewResultColumnsItem instanceof \SFPartnerApi\v480\StructType\ListViewColumn) {
                $invalidValues[] = is_object($executeListViewResultColumnsItem) ? get_class($executeListViewResultColumnsItem) : sprintf('%s(%s)', gettype($executeListViewResultColumnsItem), var_export($executeListViewResultColumnsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The columns property can only contain items of type \SFPartnerApi\v480\StructType\ListViewColumn, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set columns value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewColumn[] $columns
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
     */
    public function setColumns(array $columns = array())
    {
        // validation for constraint: array
        if ('' !== ($columnsArrayErrorMessage = self::validateColumnsForArrayConstraintsFromSetColumns($columns))) {
            throw new \InvalidArgumentException($columnsArrayErrorMessage, __LINE__);
        }
        $this->columns = $columns;
        return $this;
    }
    /**
     * Add item to columns value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewColumn $item
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
     */
    public function addToColumns(\SFPartnerApi\v480\StructType\ListViewColumn $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ListViewColumn) {
            throw new \InvalidArgumentException(sprintf('The columns property can only contain items of type \SFPartnerApi\v480\StructType\ListViewColumn, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->columns[] = $item;
        return $this;
    }
    /**
     * Get records value
     * @return \SFPartnerApi\v480\StructType\ListViewRecord[]
     */
    public function getRecords()
    {
        return $this->records;
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
        foreach ($values as $executeListViewResultRecordsItem) {
            // validation for constraint: itemType
            if (!$executeListViewResultRecordsItem instanceof \SFPartnerApi\v480\StructType\ListViewRecord) {
                $invalidValues[] = is_object($executeListViewResultRecordsItem) ? get_class($executeListViewResultRecordsItem) : sprintf('%s(%s)', gettype($executeListViewResultRecordsItem), var_export($executeListViewResultRecordsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The records property can only contain items of type \SFPartnerApi\v480\StructType\ListViewRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set records value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewRecord[] $records
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
     */
    public function setRecords(array $records = array())
    {
        // validation for constraint: array
        if ('' !== ($recordsArrayErrorMessage = self::validateRecordsForArrayConstraintsFromSetRecords($records))) {
            throw new \InvalidArgumentException($recordsArrayErrorMessage, __LINE__);
        }
        $this->records = $records;
        return $this;
    }
    /**
     * Add item to records value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewRecord $item
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
     */
    public function addToRecords(\SFPartnerApi\v480\StructType\ListViewRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ListViewRecord) {
            throw new \InvalidArgumentException(sprintf('The records property can only contain items of type \SFPartnerApi\v480\StructType\ListViewRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->records[] = $item;
        return $this;
    }
    /**
     * Get developerName value
     * @return string|null
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }
    /**
     * Set developerName value
     * @param string $developerName
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
     */
    public function setDeveloperName($developerName = null)
    {
        // validation for constraint: string
        if (!is_null($developerName) && !is_string($developerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($developerName, true), gettype($developerName)), __LINE__);
        }
        $this->developerName = $developerName;
        return $this;
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
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
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
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
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
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
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
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
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
     * @return \SFPartnerApi\v480\StructType\ExecuteListViewResult
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
