<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListViewColumn StructType
 * @subpackage Structs
 */
class ListViewColumn extends AbstractStructBase
{
    /**
     * The ascendingLabel
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ascendingLabel;
    /**
     * The descendingLabel
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $descendingLabel;
    /**
     * The fieldNameOrPath
     * @var string
     */
    public $fieldNameOrPath;
    /**
     * The hidden
     * @var bool
     */
    public $hidden;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The searchable
     * @var bool
     */
    public $searchable;
    /**
     * The selectListItem
     * @var string
     */
    public $selectListItem;
    /**
     * The sortDirection
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sortDirection;
    /**
     * The sortIndex
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $sortIndex;
    /**
     * The sortable
     * @var bool
     */
    public $sortable;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for ListViewColumn
     * @uses ListViewColumn::setAscendingLabel()
     * @uses ListViewColumn::setDescendingLabel()
     * @uses ListViewColumn::setFieldNameOrPath()
     * @uses ListViewColumn::setHidden()
     * @uses ListViewColumn::setLabel()
     * @uses ListViewColumn::setSearchable()
     * @uses ListViewColumn::setSelectListItem()
     * @uses ListViewColumn::setSortDirection()
     * @uses ListViewColumn::setSortIndex()
     * @uses ListViewColumn::setSortable()
     * @uses ListViewColumn::setType()
     * @param string $ascendingLabel
     * @param string $descendingLabel
     * @param string $fieldNameOrPath
     * @param bool $hidden
     * @param string $label
     * @param bool $searchable
     * @param string $selectListItem
     * @param string $sortDirection
     * @param int $sortIndex
     * @param bool $sortable
     * @param string $type
     */
    public function __construct($ascendingLabel = null, $descendingLabel = null, $fieldNameOrPath = null, $hidden = null, $label = null, $searchable = null, $selectListItem = null, $sortDirection = null, $sortIndex = null, $sortable = null, $type = null)
    {
        $this
            ->setAscendingLabel($ascendingLabel)
            ->setDescendingLabel($descendingLabel)
            ->setFieldNameOrPath($fieldNameOrPath)
            ->setHidden($hidden)
            ->setLabel($label)
            ->setSearchable($searchable)
            ->setSelectListItem($selectListItem)
            ->setSortDirection($sortDirection)
            ->setSortIndex($sortIndex)
            ->setSortable($sortable)
            ->setType($type);
    }
    /**
     * Get ascendingLabel value
     * @return string|null
     */
    public function getAscendingLabel()
    {
        return $this->ascendingLabel;
    }
    /**
     * Set ascendingLabel value
     * @param string $ascendingLabel
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setAscendingLabel($ascendingLabel = null)
    {
        // validation for constraint: string
        if (!is_null($ascendingLabel) && !is_string($ascendingLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ascendingLabel, true), gettype($ascendingLabel)), __LINE__);
        }
        $this->ascendingLabel = $ascendingLabel;
        return $this;
    }
    /**
     * Get descendingLabel value
     * @return string|null
     */
    public function getDescendingLabel()
    {
        return $this->descendingLabel;
    }
    /**
     * Set descendingLabel value
     * @param string $descendingLabel
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setDescendingLabel($descendingLabel = null)
    {
        // validation for constraint: string
        if (!is_null($descendingLabel) && !is_string($descendingLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descendingLabel, true), gettype($descendingLabel)), __LINE__);
        }
        $this->descendingLabel = $descendingLabel;
        return $this;
    }
    /**
     * Get fieldNameOrPath value
     * @return string|null
     */
    public function getFieldNameOrPath()
    {
        return $this->fieldNameOrPath;
    }
    /**
     * Set fieldNameOrPath value
     * @param string $fieldNameOrPath
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setFieldNameOrPath($fieldNameOrPath = null)
    {
        // validation for constraint: string
        if (!is_null($fieldNameOrPath) && !is_string($fieldNameOrPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldNameOrPath, true), gettype($fieldNameOrPath)), __LINE__);
        }
        $this->fieldNameOrPath = $fieldNameOrPath;
        return $this;
    }
    /**
     * Get hidden value
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->hidden;
    }
    /**
     * Set hidden value
     * @param bool $hidden
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setHidden($hidden = null)
    {
        // validation for constraint: boolean
        if (!is_null($hidden) && !is_bool($hidden)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hidden, true), gettype($hidden)), __LINE__);
        }
        $this->hidden = $hidden;
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
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
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
     * Get searchable value
     * @return bool|null
     */
    public function getSearchable()
    {
        return $this->searchable;
    }
    /**
     * Set searchable value
     * @param bool $searchable
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setSearchable($searchable = null)
    {
        // validation for constraint: boolean
        if (!is_null($searchable) && !is_bool($searchable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchable, true), gettype($searchable)), __LINE__);
        }
        $this->searchable = $searchable;
        return $this;
    }
    /**
     * Get selectListItem value
     * @return string|null
     */
    public function getSelectListItem()
    {
        return $this->selectListItem;
    }
    /**
     * Set selectListItem value
     * @param string $selectListItem
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setSelectListItem($selectListItem = null)
    {
        // validation for constraint: string
        if (!is_null($selectListItem) && !is_string($selectListItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selectListItem, true), gettype($selectListItem)), __LINE__);
        }
        $this->selectListItem = $selectListItem;
        return $this;
    }
    /**
     * Get sortDirection value
     * @return string|null
     */
    public function getSortDirection()
    {
        return $this->sortDirection;
    }
    /**
     * Set sortDirection value
     * @uses \SFPartnerApi\v480\EnumType\OrderByDirection::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\OrderByDirection::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortDirection
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setSortDirection($sortDirection = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\OrderByDirection::valueIsValid($sortDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\OrderByDirection', is_array($sortDirection) ? implode(', ', $sortDirection) : var_export($sortDirection, true), implode(', ', \SFPartnerApi\v480\EnumType\OrderByDirection::getValidValues())), __LINE__);
        }
        $this->sortDirection = $sortDirection;
        return $this;
    }
    /**
     * Get sortIndex value
     * @return int|null
     */
    public function getSortIndex()
    {
        return $this->sortIndex;
    }
    /**
     * Set sortIndex value
     * @param int $sortIndex
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setSortIndex($sortIndex = null)
    {
        // validation for constraint: int
        if (!is_null($sortIndex) && !(is_int($sortIndex) || ctype_digit($sortIndex))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortIndex, true), gettype($sortIndex)), __LINE__);
        }
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * Get sortable value
     * @return bool|null
     */
    public function getSortable()
    {
        return $this->sortable;
    }
    /**
     * Set sortable value
     * @param bool $sortable
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setSortable($sortable = null)
    {
        // validation for constraint: boolean
        if (!is_null($sortable) && !is_bool($sortable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sortable, true), gettype($sortable)), __LINE__);
        }
        $this->sortable = $sortable;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \SFPartnerApi\v480\EnumType\FieldType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\FieldType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\FieldType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\FieldType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \SFPartnerApi\v480\EnumType\FieldType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ListViewColumn
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
