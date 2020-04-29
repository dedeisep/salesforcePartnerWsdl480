<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeAppMenuResult StructType
 * @subpackage Structs
 */
class DescribeAppMenuResult extends AbstractStructBase
{
    /**
     * The appMenuItems
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeAppMenuItem[]
     */
    public $appMenuItems;
    /**
     * Constructor method for DescribeAppMenuResult
     * @uses DescribeAppMenuResult::setAppMenuItems()
     * @param \SFPartnerApi\v480\StructType\DescribeAppMenuItem[] $appMenuItems
     */
    public function __construct(array $appMenuItems = array())
    {
        $this
            ->setAppMenuItems($appMenuItems);
    }
    /**
     * Get appMenuItems value
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuItem[]|null
     */
    public function getAppMenuItems()
    {
        return $this->appMenuItems;
    }
    /**
     * This method is responsible for validating the values passed to the setAppMenuItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppMenuItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAppMenuItemsForArrayConstraintsFromSetAppMenuItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeAppMenuResultAppMenuItemsItem) {
            // validation for constraint: itemType
            if (!$describeAppMenuResultAppMenuItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeAppMenuItem) {
                $invalidValues[] = is_object($describeAppMenuResultAppMenuItemsItem) ? get_class($describeAppMenuResultAppMenuItemsItem) : sprintf('%s(%s)', gettype($describeAppMenuResultAppMenuItemsItem), var_export($describeAppMenuResultAppMenuItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The appMenuItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeAppMenuItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set appMenuItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeAppMenuItem[] $appMenuItems
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuResult
     */
    public function setAppMenuItems(array $appMenuItems = array())
    {
        // validation for constraint: array
        if ('' !== ($appMenuItemsArrayErrorMessage = self::validateAppMenuItemsForArrayConstraintsFromSetAppMenuItems($appMenuItems))) {
            throw new \InvalidArgumentException($appMenuItemsArrayErrorMessage, __LINE__);
        }
        $this->appMenuItems = $appMenuItems;
        return $this;
    }
    /**
     * Add item to appMenuItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeAppMenuItem $item
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuResult
     */
    public function addToAppMenuItems(\SFPartnerApi\v480\StructType\DescribeAppMenuItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeAppMenuItem) {
            throw new \InvalidArgumentException(sprintf('The appMenuItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeAppMenuItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->appMenuItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuResult
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
