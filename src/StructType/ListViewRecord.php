<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListViewRecord StructType
 * @subpackage Structs
 */
class ListViewRecord extends AbstractStructBase
{
    /**
     * The columns
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\ListViewRecordColumn[]
     */
    public $columns;
    /**
     * Constructor method for ListViewRecord
     * @uses ListViewRecord::setColumns()
     * @param \SFPartnerApi\v480\StructType\ListViewRecordColumn[] $columns
     */
    public function __construct(array $columns = array())
    {
        $this
            ->setColumns($columns);
    }
    /**
     * Get columns value
     * @return \SFPartnerApi\v480\StructType\ListViewRecordColumn[]
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
        foreach ($values as $listViewRecordColumnsItem) {
            // validation for constraint: itemType
            if (!$listViewRecordColumnsItem instanceof \SFPartnerApi\v480\StructType\ListViewRecordColumn) {
                $invalidValues[] = is_object($listViewRecordColumnsItem) ? get_class($listViewRecordColumnsItem) : sprintf('%s(%s)', gettype($listViewRecordColumnsItem), var_export($listViewRecordColumnsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The columns property can only contain items of type \SFPartnerApi\v480\StructType\ListViewRecordColumn, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set columns value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ListViewRecordColumn[] $columns
     * @return \SFPartnerApi\v480\StructType\ListViewRecord
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
     * @param \SFPartnerApi\v480\StructType\ListViewRecordColumn $item
     * @return \SFPartnerApi\v480\StructType\ListViewRecord
     */
    public function addToColumns(\SFPartnerApi\v480\StructType\ListViewRecordColumn $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ListViewRecordColumn) {
            throw new \InvalidArgumentException(sprintf('The columns property can only contain items of type \SFPartnerApi\v480\StructType\ListViewRecordColumn, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->columns[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ListViewRecord
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
