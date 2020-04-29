<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeDataCategoryGroupStructures StructType
 * @subpackage Structs
 */
class DescribeDataCategoryGroupStructures extends AbstractStructBase
{
    /**
     * The pairs
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair[]
     */
    public $pairs;
    /**
     * The topCategoriesOnly
     * @var bool
     */
    public $topCategoriesOnly;
    /**
     * Constructor method for describeDataCategoryGroupStructures
     * @uses DescribeDataCategoryGroupStructures::setPairs()
     * @uses DescribeDataCategoryGroupStructures::setTopCategoriesOnly()
     * @param \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair[] $pairs
     * @param bool $topCategoriesOnly
     */
    public function __construct(array $pairs = array(), $topCategoriesOnly = null)
    {
        $this
            ->setPairs($pairs)
            ->setTopCategoriesOnly($topCategoriesOnly);
    }
    /**
     * Get pairs value
     * @return \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair[]|null
     */
    public function getPairs()
    {
        return $this->pairs;
    }
    /**
     * This method is responsible for validating the values passed to the setPairs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPairs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePairsForArrayConstraintsFromSetPairs(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeDataCategoryGroupStructuresPairsItem) {
            // validation for constraint: itemType
            if (!$describeDataCategoryGroupStructuresPairsItem instanceof \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair) {
                $invalidValues[] = is_object($describeDataCategoryGroupStructuresPairsItem) ? get_class($describeDataCategoryGroupStructuresPairsItem) : sprintf('%s(%s)', gettype($describeDataCategoryGroupStructuresPairsItem), var_export($describeDataCategoryGroupStructuresPairsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pairs property can only contain items of type \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set pairs value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair[] $pairs
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructures
     */
    public function setPairs(array $pairs = array())
    {
        // validation for constraint: array
        if ('' !== ($pairsArrayErrorMessage = self::validatePairsForArrayConstraintsFromSetPairs($pairs))) {
            throw new \InvalidArgumentException($pairsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($pairs) && count($pairs) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($pairs)), __LINE__);
        }
        $this->pairs = $pairs;
        return $this;
    }
    /**
     * Add item to pairs value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair $item
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructures
     */
    public function addToPairs(\SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair) {
            throw new \InvalidArgumentException(sprintf('The pairs property can only contain items of type \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->pairs) && count($this->pairs) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->pairs)), __LINE__);
        }
        $this->pairs[] = $item;
        return $this;
    }
    /**
     * Get topCategoriesOnly value
     * @return bool|null
     */
    public function getTopCategoriesOnly()
    {
        return $this->topCategoriesOnly;
    }
    /**
     * Set topCategoriesOnly value
     * @param bool $topCategoriesOnly
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructures
     */
    public function setTopCategoriesOnly($topCategoriesOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($topCategoriesOnly) && !is_bool($topCategoriesOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($topCategoriesOnly, true), gettype($topCategoriesOnly)), __LINE__);
        }
        $this->topCategoriesOnly = $topCategoriesOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructures
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
