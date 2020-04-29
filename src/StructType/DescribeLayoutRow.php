<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutRow StructType
 * @subpackage Structs
 */
class DescribeLayoutRow extends AbstractStructBase
{
    /**
     * The layoutItems
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutItem[]
     */
    public $layoutItems;
    /**
     * The numItems
     * @var int
     */
    public $numItems;
    /**
     * Constructor method for DescribeLayoutRow
     * @uses DescribeLayoutRow::setLayoutItems()
     * @uses DescribeLayoutRow::setNumItems()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem[] $layoutItems
     * @param int $numItems
     */
    public function __construct(array $layoutItems = array(), $numItems = null)
    {
        $this
            ->setLayoutItems($layoutItems)
            ->setNumItems($numItems);
    }
    /**
     * Get layoutItems value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutItem[]
     */
    public function getLayoutItems()
    {
        return $this->layoutItems;
    }
    /**
     * This method is responsible for validating the values passed to the setLayoutItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLayoutItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLayoutItemsForArrayConstraintsFromSetLayoutItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutRowLayoutItemsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutRowLayoutItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutItem) {
                $invalidValues[] = is_object($describeLayoutRowLayoutItemsItem) ? get_class($describeLayoutRowLayoutItemsItem) : sprintf('%s(%s)', gettype($describeLayoutRowLayoutItemsItem), var_export($describeLayoutRowLayoutItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The layoutItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set layoutItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem[] $layoutItems
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutRow
     */
    public function setLayoutItems(array $layoutItems = array())
    {
        // validation for constraint: array
        if ('' !== ($layoutItemsArrayErrorMessage = self::validateLayoutItemsForArrayConstraintsFromSetLayoutItems($layoutItems))) {
            throw new \InvalidArgumentException($layoutItemsArrayErrorMessage, __LINE__);
        }
        $this->layoutItems = $layoutItems;
        return $this;
    }
    /**
     * Add item to layoutItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutItem $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutRow
     */
    public function addToLayoutItems(\SFPartnerApi\v480\StructType\DescribeLayoutItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutItem) {
            throw new \InvalidArgumentException(sprintf('The layoutItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->layoutItems[] = $item;
        return $this;
    }
    /**
     * Get numItems value
     * @return int|null
     */
    public function getNumItems()
    {
        return $this->numItems;
    }
    /**
     * Set numItems value
     * @param int $numItems
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutRow
     */
    public function setNumItems($numItems = null)
    {
        // validation for constraint: int
        if (!is_null($numItems) && !(is_int($numItems) || ctype_digit($numItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numItems, true), gettype($numItems)), __LINE__);
        }
        $this->numItems = $numItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutRow
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
