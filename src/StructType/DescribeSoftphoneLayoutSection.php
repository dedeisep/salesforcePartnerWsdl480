<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoftphoneLayoutSection StructType
 * @subpackage Structs
 */
class DescribeSoftphoneLayoutSection extends AbstractStructBase
{
    /**
     * The items
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem[]
     */
    public $items;
    /**
     * The entityApiName
     * @var string
     */
    public $entityApiName;
    /**
     * Constructor method for DescribeSoftphoneLayoutSection
     * @uses DescribeSoftphoneLayoutSection::setItems()
     * @uses DescribeSoftphoneLayoutSection::setEntityApiName()
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem[] $items
     * @param string $entityApiName
     */
    public function __construct(array $items = array(), $entityApiName = null)
    {
        $this
            ->setItems($items)
            ->setEntityApiName($entityApiName);
    }
    /**
     * Get items value
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem[]
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * This method is responsible for validating the values passed to the setItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemsForArrayConstraintsFromSetItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSoftphoneLayoutSectionItemsItem) {
            // validation for constraint: itemType
            if (!$describeSoftphoneLayoutSectionItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem) {
                $invalidValues[] = is_object($describeSoftphoneLayoutSectionItemsItem) ? get_class($describeSoftphoneLayoutSectionItemsItem) : sprintf('%s(%s)', gettype($describeSoftphoneLayoutSectionItemsItem), var_export($describeSoftphoneLayoutSectionItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The items property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set items value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem[] $items
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection
     */
    public function setItems(array $items = array())
    {
        // validation for constraint: array
        if ('' !== ($itemsArrayErrorMessage = self::validateItemsForArrayConstraintsFromSetItems($items))) {
            throw new \InvalidArgumentException($itemsArrayErrorMessage, __LINE__);
        }
        $this->items = $items;
        return $this;
    }
    /**
     * Add item to items value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem $item
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection
     */
    public function addToItems(\SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem) {
            throw new \InvalidArgumentException(sprintf('The items property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->items[] = $item;
        return $this;
    }
    /**
     * Get entityApiName value
     * @return string|null
     */
    public function getEntityApiName()
    {
        return $this->entityApiName;
    }
    /**
     * Set entityApiName value
     * @param string $entityApiName
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection
     */
    public function setEntityApiName($entityApiName = null)
    {
        // validation for constraint: string
        if (!is_null($entityApiName) && !is_string($entityApiName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityApiName, true), gettype($entityApiName)), __LINE__);
        }
        $this->entityApiName = $entityApiName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutSection
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
