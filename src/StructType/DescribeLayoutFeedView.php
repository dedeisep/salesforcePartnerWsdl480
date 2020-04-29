<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayoutFeedView StructType
 * @subpackage Structs
 */
class DescribeLayoutFeedView extends AbstractStructBase
{
    /**
     * The feedFilters
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter[]
     */
    public $feedFilters;
    /**
     * Constructor method for DescribeLayoutFeedView
     * @uses DescribeLayoutFeedView::setFeedFilters()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter[] $feedFilters
     */
    public function __construct(array $feedFilters = array())
    {
        $this
            ->setFeedFilters($feedFilters);
    }
    /**
     * Get feedFilters value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter[]|null
     */
    public function getFeedFilters()
    {
        return $this->feedFilters;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedFilters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedFilters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedFiltersForArrayConstraintsFromSetFeedFilters(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutFeedViewFeedFiltersItem) {
            // validation for constraint: itemType
            if (!$describeLayoutFeedViewFeedFiltersItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter) {
                $invalidValues[] = is_object($describeLayoutFeedViewFeedFiltersItem) ? get_class($describeLayoutFeedViewFeedFiltersItem) : sprintf('%s(%s)', gettype($describeLayoutFeedViewFeedFiltersItem), var_export($describeLayoutFeedViewFeedFiltersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The feedFilters property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set feedFilters value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter[] $feedFilters
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedView
     */
    public function setFeedFilters(array $feedFilters = array())
    {
        // validation for constraint: array
        if ('' !== ($feedFiltersArrayErrorMessage = self::validateFeedFiltersForArrayConstraintsFromSetFeedFilters($feedFilters))) {
            throw new \InvalidArgumentException($feedFiltersArrayErrorMessage, __LINE__);
        }
        $this->feedFilters = $feedFilters;
        return $this;
    }
    /**
     * Add item to feedFilters value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedView
     */
    public function addToFeedFilters(\SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter) {
            throw new \InvalidArgumentException(sprintf('The feedFilters property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutFeedFilter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->feedFilters[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedView
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
