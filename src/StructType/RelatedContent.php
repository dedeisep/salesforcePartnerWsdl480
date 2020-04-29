<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedContent StructType
 * @subpackage Structs
 */
class RelatedContent extends AbstractStructBase
{
    /**
     * The relatedContentItems
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeRelatedContentItem[]
     */
    public $relatedContentItems;
    /**
     * Constructor method for RelatedContent
     * @uses RelatedContent::setRelatedContentItems()
     * @param \SFPartnerApi\v480\StructType\DescribeRelatedContentItem[] $relatedContentItems
     */
    public function __construct(array $relatedContentItems = array())
    {
        $this
            ->setRelatedContentItems($relatedContentItems);
    }
    /**
     * Get relatedContentItems value
     * @return \SFPartnerApi\v480\StructType\DescribeRelatedContentItem[]
     */
    public function getRelatedContentItems()
    {
        return $this->relatedContentItems;
    }
    /**
     * This method is responsible for validating the values passed to the setRelatedContentItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelatedContentItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelatedContentItemsForArrayConstraintsFromSetRelatedContentItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relatedContentRelatedContentItemsItem) {
            // validation for constraint: itemType
            if (!$relatedContentRelatedContentItemsItem instanceof \SFPartnerApi\v480\StructType\DescribeRelatedContentItem) {
                $invalidValues[] = is_object($relatedContentRelatedContentItemsItem) ? get_class($relatedContentRelatedContentItemsItem) : sprintf('%s(%s)', gettype($relatedContentRelatedContentItemsItem), var_export($relatedContentRelatedContentItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The relatedContentItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeRelatedContentItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set relatedContentItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeRelatedContentItem[] $relatedContentItems
     * @return \SFPartnerApi\v480\StructType\RelatedContent
     */
    public function setRelatedContentItems(array $relatedContentItems = array())
    {
        // validation for constraint: array
        if ('' !== ($relatedContentItemsArrayErrorMessage = self::validateRelatedContentItemsForArrayConstraintsFromSetRelatedContentItems($relatedContentItems))) {
            throw new \InvalidArgumentException($relatedContentItemsArrayErrorMessage, __LINE__);
        }
        $this->relatedContentItems = $relatedContentItems;
        return $this;
    }
    /**
     * Add item to relatedContentItems value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeRelatedContentItem $item
     * @return \SFPartnerApi\v480\StructType\RelatedContent
     */
    public function addToRelatedContentItems(\SFPartnerApi\v480\StructType\DescribeRelatedContentItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeRelatedContentItem) {
            throw new \InvalidArgumentException(sprintf('The relatedContentItems property can only contain items of type \SFPartnerApi\v480\StructType\DescribeRelatedContentItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->relatedContentItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RelatedContent
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
