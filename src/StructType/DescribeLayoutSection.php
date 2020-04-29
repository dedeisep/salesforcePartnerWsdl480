<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutSection StructType
 * @subpackage Structs
 */
class DescribeLayoutSection extends AbstractStructBase
{
    /**
     * The layoutRows
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutRow[]
     */
    public $layoutRows;
    /**
     * The collapsed
     * @var bool
     */
    public $collapsed;
    /**
     * The columns
     * @var int
     */
    public $columns;
    /**
     * The heading
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $heading;
    /**
     * The layoutSectionId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $layoutSectionId;
    /**
     * The parentLayoutId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $parentLayoutId;
    /**
     * The rows
     * @var int
     */
    public $rows;
    /**
     * The tabOrder
     * @var string
     */
    public $tabOrder;
    /**
     * The useCollapsibleSection
     * @var bool
     */
    public $useCollapsibleSection;
    /**
     * The useHeading
     * @var bool
     */
    public $useHeading;
    /**
     * Constructor method for DescribeLayoutSection
     * @uses DescribeLayoutSection::setLayoutRows()
     * @uses DescribeLayoutSection::setCollapsed()
     * @uses DescribeLayoutSection::setColumns()
     * @uses DescribeLayoutSection::setHeading()
     * @uses DescribeLayoutSection::setLayoutSectionId()
     * @uses DescribeLayoutSection::setParentLayoutId()
     * @uses DescribeLayoutSection::setRows()
     * @uses DescribeLayoutSection::setTabOrder()
     * @uses DescribeLayoutSection::setUseCollapsibleSection()
     * @uses DescribeLayoutSection::setUseHeading()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutRow[] $layoutRows
     * @param bool $collapsed
     * @param int $columns
     * @param string $heading
     * @param string $layoutSectionId
     * @param string $parentLayoutId
     * @param int $rows
     * @param string $tabOrder
     * @param bool $useCollapsibleSection
     * @param bool $useHeading
     */
    public function __construct(array $layoutRows = array(), $collapsed = null, $columns = null, $heading = null, $layoutSectionId = null, $parentLayoutId = null, $rows = null, $tabOrder = null, $useCollapsibleSection = null, $useHeading = null)
    {
        $this
            ->setLayoutRows($layoutRows)
            ->setCollapsed($collapsed)
            ->setColumns($columns)
            ->setHeading($heading)
            ->setLayoutSectionId($layoutSectionId)
            ->setParentLayoutId($parentLayoutId)
            ->setRows($rows)
            ->setTabOrder($tabOrder)
            ->setUseCollapsibleSection($useCollapsibleSection)
            ->setUseHeading($useHeading);
    }
    /**
     * Get layoutRows value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutRow[]
     */
    public function getLayoutRows()
    {
        return $this->layoutRows;
    }
    /**
     * This method is responsible for validating the values passed to the setLayoutRows method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLayoutRows method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLayoutRowsForArrayConstraintsFromSetLayoutRows(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutSectionLayoutRowsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutSectionLayoutRowsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutRow) {
                $invalidValues[] = is_object($describeLayoutSectionLayoutRowsItem) ? get_class($describeLayoutSectionLayoutRowsItem) : sprintf('%s(%s)', gettype($describeLayoutSectionLayoutRowsItem), var_export($describeLayoutSectionLayoutRowsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The layoutRows property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutRow, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set layoutRows value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutRow[] $layoutRows
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setLayoutRows(array $layoutRows = array())
    {
        // validation for constraint: array
        if ('' !== ($layoutRowsArrayErrorMessage = self::validateLayoutRowsForArrayConstraintsFromSetLayoutRows($layoutRows))) {
            throw new \InvalidArgumentException($layoutRowsArrayErrorMessage, __LINE__);
        }
        $this->layoutRows = $layoutRows;
        return $this;
    }
    /**
     * Add item to layoutRows value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutRow $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function addToLayoutRows(\SFPartnerApi\v480\StructType\DescribeLayoutRow $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutRow) {
            throw new \InvalidArgumentException(sprintf('The layoutRows property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutRow, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->layoutRows[] = $item;
        return $this;
    }
    /**
     * Get collapsed value
     * @return bool|null
     */
    public function getCollapsed()
    {
        return $this->collapsed;
    }
    /**
     * Set collapsed value
     * @param bool $collapsed
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setCollapsed($collapsed = null)
    {
        // validation for constraint: boolean
        if (!is_null($collapsed) && !is_bool($collapsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collapsed, true), gettype($collapsed)), __LINE__);
        }
        $this->collapsed = $collapsed;
        return $this;
    }
    /**
     * Get columns value
     * @return int|null
     */
    public function getColumns()
    {
        return $this->columns;
    }
    /**
     * Set columns value
     * @param int $columns
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setColumns($columns = null)
    {
        // validation for constraint: int
        if (!is_null($columns) && !(is_int($columns) || ctype_digit($columns))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($columns, true), gettype($columns)), __LINE__);
        }
        $this->columns = $columns;
        return $this;
    }
    /**
     * Get heading value
     * @return string|null
     */
    public function getHeading()
    {
        return $this->heading;
    }
    /**
     * Set heading value
     * @param string $heading
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setHeading($heading = null)
    {
        // validation for constraint: string
        if (!is_null($heading) && !is_string($heading)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($heading, true), gettype($heading)), __LINE__);
        }
        $this->heading = $heading;
        return $this;
    }
    /**
     * Get layoutSectionId value
     * @return string|null
     */
    public function getLayoutSectionId()
    {
        return $this->layoutSectionId;
    }
    /**
     * Set layoutSectionId value
     * @param string $layoutSectionId
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setLayoutSectionId($layoutSectionId = null)
    {
        // validation for constraint: string
        if (!is_null($layoutSectionId) && !is_string($layoutSectionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($layoutSectionId, true), gettype($layoutSectionId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($layoutSectionId) && mb_strlen($layoutSectionId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($layoutSectionId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($layoutSectionId) && !preg_match('/[a-zA-Z0-9]{18}/', $layoutSectionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($layoutSectionId, true)), __LINE__);
        }
        $this->layoutSectionId = $layoutSectionId;
        return $this;
    }
    /**
     * Get parentLayoutId value
     * @return string|null
     */
    public function getParentLayoutId()
    {
        return $this->parentLayoutId;
    }
    /**
     * Set parentLayoutId value
     * @param string $parentLayoutId
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setParentLayoutId($parentLayoutId = null)
    {
        // validation for constraint: string
        if (!is_null($parentLayoutId) && !is_string($parentLayoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentLayoutId, true), gettype($parentLayoutId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($parentLayoutId) && mb_strlen($parentLayoutId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($parentLayoutId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($parentLayoutId) && !preg_match('/[a-zA-Z0-9]{18}/', $parentLayoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($parentLayoutId, true)), __LINE__);
        }
        $this->parentLayoutId = $parentLayoutId;
        return $this;
    }
    /**
     * Get rows value
     * @return int|null
     */
    public function getRows()
    {
        return $this->rows;
    }
    /**
     * Set rows value
     * @param int $rows
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setRows($rows = null)
    {
        // validation for constraint: int
        if (!is_null($rows) && !(is_int($rows) || ctype_digit($rows))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rows, true), gettype($rows)), __LINE__);
        }
        $this->rows = $rows;
        return $this;
    }
    /**
     * Get tabOrder value
     * @return string|null
     */
    public function getTabOrder()
    {
        return $this->tabOrder;
    }
    /**
     * Set tabOrder value
     * @uses \SFPartnerApi\v480\EnumType\TabOrderType::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\TabOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tabOrder
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setTabOrder($tabOrder = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\TabOrderType::valueIsValid($tabOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\TabOrderType', is_array($tabOrder) ? implode(', ', $tabOrder) : var_export($tabOrder, true), implode(', ', \SFPartnerApi\v480\EnumType\TabOrderType::getValidValues())), __LINE__);
        }
        $this->tabOrder = $tabOrder;
        return $this;
    }
    /**
     * Get useCollapsibleSection value
     * @return bool|null
     */
    public function getUseCollapsibleSection()
    {
        return $this->useCollapsibleSection;
    }
    /**
     * Set useCollapsibleSection value
     * @param bool $useCollapsibleSection
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setUseCollapsibleSection($useCollapsibleSection = null)
    {
        // validation for constraint: boolean
        if (!is_null($useCollapsibleSection) && !is_bool($useCollapsibleSection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useCollapsibleSection, true), gettype($useCollapsibleSection)), __LINE__);
        }
        $this->useCollapsibleSection = $useCollapsibleSection;
        return $this;
    }
    /**
     * Get useHeading value
     * @return bool|null
     */
    public function getUseHeading()
    {
        return $this->useHeading;
    }
    /**
     * Set useHeading value
     * @param bool $useHeading
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public function setUseHeading($useHeading = null)
    {
        // validation for constraint: boolean
        if (!is_null($useHeading) && !is_bool($useHeading)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useHeading, true), gettype($useHeading)), __LINE__);
        }
        $this->useHeading = $useHeading;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection
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
