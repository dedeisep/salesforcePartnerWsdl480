<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoqlListViewResult StructType
 * @subpackage Structs
 */
class DescribeSoqlListViewResult extends AbstractStructBase
{
    /**
     * The describeSoqlListViews
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeSoqlListView[]
     */
    public $describeSoqlListViews;
    /**
     * Constructor method for DescribeSoqlListViewResult
     * @uses DescribeSoqlListViewResult::setDescribeSoqlListViews()
     * @param \SFPartnerApi\v480\StructType\DescribeSoqlListView[] $describeSoqlListViews
     */
    public function __construct(array $describeSoqlListViews = array())
    {
        $this
            ->setDescribeSoqlListViews($describeSoqlListViews);
    }
    /**
     * Get describeSoqlListViews value
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListView[]
     */
    public function getDescribeSoqlListViews()
    {
        return $this->describeSoqlListViews;
    }
    /**
     * This method is responsible for validating the values passed to the setDescribeSoqlListViews method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDescribeSoqlListViews method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDescribeSoqlListViewsForArrayConstraintsFromSetDescribeSoqlListViews(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSoqlListViewResultDescribeSoqlListViewsItem) {
            // validation for constraint: itemType
            if (!$describeSoqlListViewResultDescribeSoqlListViewsItem instanceof \SFPartnerApi\v480\StructType\DescribeSoqlListView) {
                $invalidValues[] = is_object($describeSoqlListViewResultDescribeSoqlListViewsItem) ? get_class($describeSoqlListViewResultDescribeSoqlListViewsItem) : sprintf('%s(%s)', gettype($describeSoqlListViewResultDescribeSoqlListViewsItem), var_export($describeSoqlListViewResultDescribeSoqlListViewsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The describeSoqlListViews property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoqlListView, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set describeSoqlListViews value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoqlListView[] $describeSoqlListViews
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewResult
     */
    public function setDescribeSoqlListViews(array $describeSoqlListViews = array())
    {
        // validation for constraint: array
        if ('' !== ($describeSoqlListViewsArrayErrorMessage = self::validateDescribeSoqlListViewsForArrayConstraintsFromSetDescribeSoqlListViews($describeSoqlListViews))) {
            throw new \InvalidArgumentException($describeSoqlListViewsArrayErrorMessage, __LINE__);
        }
        $this->describeSoqlListViews = $describeSoqlListViews;
        return $this;
    }
    /**
     * Add item to describeSoqlListViews value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoqlListView $item
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewResult
     */
    public function addToDescribeSoqlListViews(\SFPartnerApi\v480\StructType\DescribeSoqlListView $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeSoqlListView) {
            throw new \InvalidArgumentException(sprintf('The describeSoqlListViews property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoqlListView, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->describeSoqlListViews[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewResult
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
