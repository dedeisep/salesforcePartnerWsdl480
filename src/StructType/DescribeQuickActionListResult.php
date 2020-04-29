<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeQuickActionListResult StructType
 * @subpackage Structs
 */
class DescribeQuickActionListResult extends AbstractStructBase
{
    /**
     * The quickActionListItems
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult[]
     */
    public $quickActionListItems;
    /**
     * Constructor method for DescribeQuickActionListResult
     * @uses DescribeQuickActionListResult::setQuickActionListItems()
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult[] $quickActionListItems
     */
    public function __construct(array $quickActionListItems = array())
    {
        $this
            ->setQuickActionListItems($quickActionListItems);
    }
    /**
     * Get quickActionListItems value
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult[]|null
     */
    public function getQuickActionListItems()
    {
        return $this->quickActionListItems;
    }
    /**
     * This method is responsible for validating the values passed to the setQuickActionListItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQuickActionListItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQuickActionListItemsForArrayConstraintsFromSetQuickActionListItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeQuickActionListResultQuickActionListItemsItem) {
            // validation for constraint: itemType
            if (!$describeQuickActionListResultQuickActionListItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult) {
                $invalidValues[] = is_object($describeQuickActionListResultQuickActionListItemsItem) ? get_class($describeQuickActionListResultQuickActionListItemsItem) : sprintf('%s(%s)', gettype($describeQuickActionListResultQuickActionListItemsItem), var_export($describeQuickActionListResultQuickActionListItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The quickActionListItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set quickActionListItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult[] $quickActionListItems
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListResult
     */
    public function setQuickActionListItems(array $quickActionListItems = array())
    {
        // validation for constraint: array
        if ('' !== ($quickActionListItemsArrayErrorMessage = self::validateQuickActionListItemsForArrayConstraintsFromSetQuickActionListItems($quickActionListItems))) {
            throw new \InvalidArgumentException($quickActionListItemsArrayErrorMessage, __LINE__);
        }
        $this->quickActionListItems = $quickActionListItems;
        return $this;
    }
    /**
     * Add item to quickActionListItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult $item
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListResult
     */
    public function addToQuickActionListItems(\SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult) {
            throw new \InvalidArgumentException(sprintf('The quickActionListItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeQuickActionListItemResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->quickActionListItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListResult
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
