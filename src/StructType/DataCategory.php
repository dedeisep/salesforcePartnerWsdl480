<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataCategory StructType
 * @subpackage Structs
 */
class DataCategory extends AbstractStructBase
{
    /**
     * The childCategories
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DataCategory[]
     */
    public $childCategories;
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
     * Constructor method for DataCategory
     * @uses DataCategory::setChildCategories()
     * @uses DataCategory::setLabel()
     * @uses DataCategory::setName()
     * @param \SFPartnerApi\v480\StructType\DataCategory[] $childCategories
     * @param string $label
     * @param string $name
     */
    public function __construct(array $childCategories = array(), $label = null, $name = null)
    {
        $this
            ->setChildCategories($childCategories)
            ->setLabel($label)
            ->setName($name);
    }
    /**
     * Get childCategories value
     * @return \SFPartnerApi\v480\StructType\DataCategory[]|null
     */
    public function getChildCategories()
    {
        return $this->childCategories;
    }
    /**
     * This method is responsible for validating the values passed to the setChildCategories method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildCategories method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildCategoriesForArrayConstraintsFromSetChildCategories(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dataCategoryChildCategoriesItem) {
            // validation for constraint: itemType
            if (!$dataCategoryChildCategoriesItem instanceof \SFPartnerApi\v480\StructType\DataCategory) {
                $invalidValues[] = is_object($dataCategoryChildCategoriesItem) ? get_class($dataCategoryChildCategoriesItem) : sprintf('%s(%s)', gettype($dataCategoryChildCategoriesItem), var_export($dataCategoryChildCategoriesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The childCategories property can only contain items of type \SFPartnerApi\v480\StructType\DataCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set childCategories value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DataCategory[] $childCategories
     * @return \SFPartnerApi\v480\StructType\DataCategory
     */
    public function setChildCategories(array $childCategories = array())
    {
        // validation for constraint: array
        if ('' !== ($childCategoriesArrayErrorMessage = self::validateChildCategoriesForArrayConstraintsFromSetChildCategories($childCategories))) {
            throw new \InvalidArgumentException($childCategoriesArrayErrorMessage, __LINE__);
        }
        $this->childCategories = $childCategories;
        return $this;
    }
    /**
     * Add item to childCategories value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DataCategory $item
     * @return \SFPartnerApi\v480\StructType\DataCategory
     */
    public function addToChildCategories(\SFPartnerApi\v480\StructType\DataCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DataCategory) {
            throw new \InvalidArgumentException(sprintf('The childCategories property can only contain items of type \SFPartnerApi\v480\StructType\DataCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->childCategories[] = $item;
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
     * @return \SFPartnerApi\v480\StructType\DataCategory
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
     * @return \SFPartnerApi\v480\StructType\DataCategory
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DataCategory
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
