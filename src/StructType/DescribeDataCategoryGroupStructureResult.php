<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeDataCategoryGroupStructureResult StructType
 * @subpackage Structs
 */
class DescribeDataCategoryGroupStructureResult extends AbstractStructBase
{
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The sobject
     * @var string
     */
    public $sobject;
    /**
     * The topCategories
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DataCategory[]
     */
    public $topCategories;
    /**
     * Constructor method for DescribeDataCategoryGroupStructureResult
     * @uses DescribeDataCategoryGroupStructureResult::setDescription()
     * @uses DescribeDataCategoryGroupStructureResult::setLabel()
     * @uses DescribeDataCategoryGroupStructureResult::setName()
     * @uses DescribeDataCategoryGroupStructureResult::setSobject()
     * @uses DescribeDataCategoryGroupStructureResult::setTopCategories()
     * @param string $description
     * @param string $label
     * @param string $name
     * @param string $sobject
     * @param \SFPartnerApi\v480\StructType\DataCategory[] $topCategories
     */
    public function __construct($description = null, $label = null, $name = null, $sobject = null, array $topCategories = array())
    {
        $this
            ->setDescription($description)
            ->setLabel($label)
            ->setName($name)
            ->setSobject($sobject)
            ->setTopCategories($topCategories);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get sobject value
     * @return string|null
     */
    public function getSobject()
    {
        return $this->sobject;
    }
    /**
     * Set sobject value
     * @param string $sobject
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult
     */
    public function setSobject($sobject = null)
    {
        // validation for constraint: string
        if (!is_null($sobject) && !is_string($sobject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sobject, true), gettype($sobject)), __LINE__);
        }
        $this->sobject = $sobject;
        return $this;
    }
    /**
     * Get topCategories value
     * @return \SFPartnerApi\v480\StructType\DataCategory[]|null
     */
    public function getTopCategories()
    {
        return $this->topCategories;
    }
    /**
     * This method is responsible for validating the values passed to the setTopCategories method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTopCategories method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTopCategoriesForArrayConstraintsFromSetTopCategories(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeDataCategoryGroupStructureResultTopCategoriesItem) {
            // validation for constraint: itemType
            if (!$describeDataCategoryGroupStructureResultTopCategoriesItem instanceof \SFPartnerApi\v480\StructType\DataCategory) {
                $invalidValues[] = is_object($describeDataCategoryGroupStructureResultTopCategoriesItem) ? get_class($describeDataCategoryGroupStructureResultTopCategoriesItem) : sprintf('%s(%s)', gettype($describeDataCategoryGroupStructureResultTopCategoriesItem), var_export($describeDataCategoryGroupStructureResultTopCategoriesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The topCategories property can only contain items of type \SFPartnerApi\v480\StructType\DataCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set topCategories value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DataCategory[] $topCategories
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult
     */
    public function setTopCategories(array $topCategories = array())
    {
        // validation for constraint: array
        if ('' !== ($topCategoriesArrayErrorMessage = self::validateTopCategoriesForArrayConstraintsFromSetTopCategories($topCategories))) {
            throw new \InvalidArgumentException($topCategoriesArrayErrorMessage, __LINE__);
        }
        $this->topCategories = $topCategories;
        return $this;
    }
    /**
     * Add item to topCategories value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DataCategory $item
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult
     */
    public function addToTopCategories(\SFPartnerApi\v480\StructType\DataCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DataCategory) {
            throw new \InvalidArgumentException(sprintf('The topCategories property can only contain items of type \SFPartnerApi\v480\StructType\DataCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->topCategories[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult
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
