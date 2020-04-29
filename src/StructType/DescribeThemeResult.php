<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeThemeResult StructType
 * @subpackage Structs
 */
class DescribeThemeResult extends AbstractStructBase
{
    /**
     * The themeItems
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeThemeItem[]
     */
    public $themeItems;
    /**
     * Constructor method for DescribeThemeResult
     * @uses DescribeThemeResult::setThemeItems()
     * @param \SFPartnerApi\v480\StructType\DescribeThemeItem[] $themeItems
     */
    public function __construct(array $themeItems = array())
    {
        $this
            ->setThemeItems($themeItems);
    }
    /**
     * Get themeItems value
     * @return \SFPartnerApi\v480\StructType\DescribeThemeItem[]|null
     */
    public function getThemeItems()
    {
        return $this->themeItems;
    }
    /**
     * This method is responsible for validating the values passed to the setThemeItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThemeItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThemeItemsForArrayConstraintsFromSetThemeItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeThemeResultThemeItemsItem) {
            // validation for constraint: itemType
            if (!$describeThemeResultThemeItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeThemeItem) {
                $invalidValues[] = is_object($describeThemeResultThemeItemsItem) ? get_class($describeThemeResultThemeItemsItem) : sprintf('%s(%s)', gettype($describeThemeResultThemeItemsItem), var_export($describeThemeResultThemeItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The themeItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeThemeItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set themeItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeThemeItem[] $themeItems
     * @return \SFPartnerApi\v480\StructType\DescribeThemeResult
     */
    public function setThemeItems(array $themeItems = array())
    {
        // validation for constraint: array
        if ('' !== ($themeItemsArrayErrorMessage = self::validateThemeItemsForArrayConstraintsFromSetThemeItems($themeItems))) {
            throw new \InvalidArgumentException($themeItemsArrayErrorMessage, __LINE__);
        }
        $this->themeItems = $themeItems;
        return $this;
    }
    /**
     * Add item to themeItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeThemeItem $item
     * @return \SFPartnerApi\v480\StructType\DescribeThemeResult
     */
    public function addToThemeItems(\SFPartnerApi\v480\StructType\DescribeThemeItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeThemeItem) {
            throw new \InvalidArgumentException(sprintf('The themeItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeThemeItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->themeItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeThemeResult
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
