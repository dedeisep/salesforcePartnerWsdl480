<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebuggingHeader StructType
 * @subpackage Structs
 */
class DebuggingHeader extends AbstractStructBase
{
    /**
     * The categories
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\LogInfo[]
     */
    public $categories;
    /**
     * The debugLevel
     * @var string
     */
    public $debugLevel;
    /**
     * Constructor method for DebuggingHeader
     * @uses DebuggingHeader::setCategories()
     * @uses DebuggingHeader::setDebugLevel()
     * @param \SFPartnerApi\v480\StructType\LogInfo[] $categories
     * @param string $debugLevel
     */
    public function __construct(array $categories = array(), $debugLevel = null)
    {
        $this
            ->setCategories($categories)
            ->setDebugLevel($debugLevel);
    }
    /**
     * Get categories value
     * @return \SFPartnerApi\v480\StructType\LogInfo[]|null
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * This method is responsible for validating the values passed to the setCategories method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategories method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoriesForArrayConstraintsFromSetCategories(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $debuggingHeaderCategoriesItem) {
            // validation for constraint: itemType
            if (!$debuggingHeaderCategoriesItem instanceof \SFPartnerApi\v480\StructType\LogInfo) {
                $invalidValues[] = is_object($debuggingHeaderCategoriesItem) ? get_class($debuggingHeaderCategoriesItem) : sprintf('%s(%s)', gettype($debuggingHeaderCategoriesItem), var_export($debuggingHeaderCategoriesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The categories property can only contain items of type \SFPartnerApi\v480\StructType\LogInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set categories value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\LogInfo[] $categories
     * @return \SFPartnerApi\v480\StructType\DebuggingHeader
     */
    public function setCategories(array $categories = array())
    {
        // validation for constraint: array
        if ('' !== ($categoriesArrayErrorMessage = self::validateCategoriesForArrayConstraintsFromSetCategories($categories))) {
            throw new \InvalidArgumentException($categoriesArrayErrorMessage, __LINE__);
        }
        $this->categories = $categories;
        return $this;
    }
    /**
     * Add item to categories value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\LogInfo $item
     * @return \SFPartnerApi\v480\StructType\DebuggingHeader
     */
    public function addToCategories(\SFPartnerApi\v480\StructType\LogInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\LogInfo) {
            throw new \InvalidArgumentException(sprintf('The categories property can only contain items of type \SFPartnerApi\v480\StructType\LogInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->categories[] = $item;
        return $this;
    }
    /**
     * Get debugLevel value
     * @return string|null
     */
    public function getDebugLevel()
    {
        return $this->debugLevel;
    }
    /**
     * Set debugLevel value
     * @uses \SFPartnerApi\v480\EnumType\DebugLevel::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\DebugLevel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $debugLevel
     * @return \SFPartnerApi\v480\StructType\DebuggingHeader
     */
    public function setDebugLevel($debugLevel = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\DebugLevel::valueIsValid($debugLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\DebugLevel', is_array($debugLevel) ? implode(', ', $debugLevel) : var_export($debugLevel, true), implode(', ', \SFPartnerApi\v480\EnumType\DebugLevel::getValidValues())), __LINE__);
        }
        $this->debugLevel = $debugLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DebuggingHeader
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
