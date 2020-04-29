<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedList StructType
 * @subpackage Structs
 */
class RelatedList extends AbstractStructBase
{
    /**
     * The columns
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\RelatedListColumn[]
     */
    public $columns;
    /**
     * The accessLevelRequiredForCreate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $accessLevelRequiredForCreate;
    /**
     * The buttons
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutButton[]
     */
    public $buttons;
    /**
     * The custom
     * @var bool
     */
    public $custom;
    /**
     * The field
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $field;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The limitRows
     * @var int
     */
    public $limitRows;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The sobject
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sobject;
    /**
     * The sort
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RelatedListSort[]
     */
    public $sort;
    /**
     * Constructor method for RelatedList
     * @uses RelatedList::setColumns()
     * @uses RelatedList::setAccessLevelRequiredForCreate()
     * @uses RelatedList::setButtons()
     * @uses RelatedList::setCustom()
     * @uses RelatedList::setField()
     * @uses RelatedList::setLabel()
     * @uses RelatedList::setLimitRows()
     * @uses RelatedList::setName()
     * @uses RelatedList::setSobject()
     * @uses RelatedList::setSort()
     * @param \SFPartnerApi\v480\StructType\RelatedListColumn[] $columns
     * @param string $accessLevelRequiredForCreate
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton[] $buttons
     * @param bool $custom
     * @param string $field
     * @param string $label
     * @param int $limitRows
     * @param string $name
     * @param string $sobject
     * @param \SFPartnerApi\v480\StructType\RelatedListSort[] $sort
     */
    public function __construct(array $columns = array(), $accessLevelRequiredForCreate = null, array $buttons = array(), $custom = null, $field = null, $label = null, $limitRows = null, $name = null, $sobject = null, array $sort = array())
    {
        $this
            ->setColumns($columns)
            ->setAccessLevelRequiredForCreate($accessLevelRequiredForCreate)
            ->setButtons($buttons)
            ->setCustom($custom)
            ->setField($field)
            ->setLabel($label)
            ->setLimitRows($limitRows)
            ->setName($name)
            ->setSobject($sobject)
            ->setSort($sort);
    }
    /**
     * Get columns value
     * @return \SFPartnerApi\v480\StructType\RelatedListColumn[]
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
        foreach ($values as $relatedListColumnsItem) {
            // validation for constraint: itemType
            if (!$relatedListColumnsItem instanceof \SFPartnerApi\v480\StructType\RelatedListColumn) {
                $invalidValues[] = is_object($relatedListColumnsItem) ? get_class($relatedListColumnsItem) : sprintf('%s(%s)', gettype($relatedListColumnsItem), var_export($relatedListColumnsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The columns property can only contain items of type \SFPartnerApi\v480\StructType\RelatedListColumn, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set columns value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RelatedListColumn[] $columns
     * @return \SFPartnerApi\v480\StructType\RelatedList
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
     * @param \SFPartnerApi\v480\StructType\RelatedListColumn $item
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function addToColumns(\SFPartnerApi\v480\StructType\RelatedListColumn $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RelatedListColumn) {
            throw new \InvalidArgumentException(sprintf('The columns property can only contain items of type \SFPartnerApi\v480\StructType\RelatedListColumn, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->columns[] = $item;
        return $this;
    }
    /**
     * Get accessLevelRequiredForCreate value
     * @return string|null
     */
    public function getAccessLevelRequiredForCreate()
    {
        return $this->accessLevelRequiredForCreate;
    }
    /**
     * Set accessLevelRequiredForCreate value
     * @uses \SFPartnerApi\v480\EnumType\ShareAccessLevel::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\ShareAccessLevel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessLevelRequiredForCreate
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function setAccessLevelRequiredForCreate($accessLevelRequiredForCreate = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\ShareAccessLevel::valueIsValid($accessLevelRequiredForCreate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\ShareAccessLevel', is_array($accessLevelRequiredForCreate) ? implode(', ', $accessLevelRequiredForCreate) : var_export($accessLevelRequiredForCreate, true), implode(', ', \SFPartnerApi\v480\EnumType\ShareAccessLevel::getValidValues())), __LINE__);
        }
        $this->accessLevelRequiredForCreate = $accessLevelRequiredForCreate;
        return $this;
    }
    /**
     * Get buttons value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButton[]|null
     */
    public function getButtons()
    {
        return isset($this->buttons) ? $this->buttons : null;
    }
    /**
     * This method is responsible for validating the values passed to the setButtons method
     * This method is willingly generated in order to preserve the one-line inline validation within the setButtons method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateButtonsForArrayConstraintsFromSetButtons(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relatedListButtonsItem) {
            // validation for constraint: itemType
            if (!$relatedListButtonsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutButton) {
                $invalidValues[] = is_object($relatedListButtonsItem) ? get_class($relatedListButtonsItem) : sprintf('%s(%s)', gettype($relatedListButtonsItem), var_export($relatedListButtonsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The buttons property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutButton, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set buttons value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton[] $buttons
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function setButtons(array $buttons = array())
    {
        // validation for constraint: array
        if ('' !== ($buttonsArrayErrorMessage = self::validateButtonsForArrayConstraintsFromSetButtons($buttons))) {
            throw new \InvalidArgumentException($buttonsArrayErrorMessage, __LINE__);
        }
        if (is_null($buttons) || (is_array($buttons) && empty($buttons))) {
            unset($this->buttons);
        } else {
            $this->buttons = $buttons;
        }
        return $this;
    }
    /**
     * Add item to buttons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButton $item
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function addToButtons(\SFPartnerApi\v480\StructType\DescribeLayoutButton $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutButton) {
            throw new \InvalidArgumentException(sprintf('The buttons property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutButton, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->buttons[] = $item;
        return $this;
    }
    /**
     * Get custom value
     * @return bool|null
     */
    public function getCustom()
    {
        return $this->custom;
    }
    /**
     * Set custom value
     * @param bool $custom
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: boolean
        if (!is_null($custom) && !is_bool($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($custom, true), gettype($custom)), __LINE__);
        }
        $this->custom = $custom;
        return $this;
    }
    /**
     * Get field value
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }
    /**
     * Set field value
     * @param string $field
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function setField($field = null)
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->field = $field;
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
     * @return \SFPartnerApi\v480\StructType\RelatedList
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
     * Get limitRows value
     * @return int|null
     */
    public function getLimitRows()
    {
        return $this->limitRows;
    }
    /**
     * Set limitRows value
     * @param int $limitRows
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function setLimitRows($limitRows = null)
    {
        // validation for constraint: int
        if (!is_null($limitRows) && !(is_int($limitRows) || ctype_digit($limitRows))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limitRows, true), gettype($limitRows)), __LINE__);
        }
        $this->limitRows = $limitRows;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get sobject value
     * @return string|null
     */
    public function getSobject()
    {
        return $this->sobject;
    }
    /**
     * Set sobject value
     * @param string $sobject
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function setSobject($sobject = null)
    {
        // validation for constraint: string
        if (!is_null($sobject) && !is_string($sobject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sobject, true), gettype($sobject)), __LINE__);
        }
        $this->sobject = $sobject;
        return $this;
    }
    /**
     * Get sort value
     * @return \SFPartnerApi\v480\StructType\RelatedListSort[]|null
     */
    public function getSort()
    {
        return $this->sort;
    }
    /**
     * This method is responsible for validating the values passed to the setSort method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSort method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSortForArrayConstraintsFromSetSort(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relatedListSortItem) {
            // validation for constraint: itemType
            if (!$relatedListSortItem instanceof \SFPartnerApi\v480\StructType\RelatedListSort) {
                $invalidValues[] = is_object($relatedListSortItem) ? get_class($relatedListSortItem) : sprintf('%s(%s)', gettype($relatedListSortItem), var_export($relatedListSortItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sort property can only contain items of type \SFPartnerApi\v480\StructType\RelatedListSort, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sort value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RelatedListSort[] $sort
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function setSort(array $sort = array())
    {
        // validation for constraint: array
        if ('' !== ($sortArrayErrorMessage = self::validateSortForArrayConstraintsFromSetSort($sort))) {
            throw new \InvalidArgumentException($sortArrayErrorMessage, __LINE__);
        }
        $this->sort = $sort;
        return $this;
    }
    /**
     * Add item to sort value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RelatedListSort $item
     * @return \SFPartnerApi\v480\StructType\RelatedList
     */
    public function addToSort(\SFPartnerApi\v480\StructType\RelatedListSort $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RelatedListSort) {
            throw new \InvalidArgumentException(sprintf('The sort property can only contain items of type \SFPartnerApi\v480\StructType\RelatedListSort, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sort[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RelatedList
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
