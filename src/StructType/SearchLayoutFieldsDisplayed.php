<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchLayoutFieldsDisplayed StructType
 * @subpackage Structs
 */
class SearchLayoutFieldsDisplayed extends AbstractStructBase
{
    /**
     * The applicable
     * @var bool
     */
    public $applicable;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\SearchLayoutField[]
     */
    public $fields;
    /**
     * Constructor method for SearchLayoutFieldsDisplayed
     * @uses SearchLayoutFieldsDisplayed::setApplicable()
     * @uses SearchLayoutFieldsDisplayed::setFields()
     * @param bool $applicable
     * @param \SFPartnerApi\v480\StructType\SearchLayoutField[] $fields
     */
    public function __construct($applicable = null, array $fields = array())
    {
        $this
            ->setApplicable($applicable)
            ->setFields($fields);
    }
    /**
     * Get applicable value
     * @return bool|null
     */
    public function getApplicable()
    {
        return $this->applicable;
    }
    /**
     * Set applicable value
     * @param bool $applicable
     * @return \SFPartnerApi\v480\StructType\SearchLayoutFieldsDisplayed
     */
    public function setApplicable($applicable = null)
    {
        // validation for constraint: boolean
        if (!is_null($applicable) && !is_bool($applicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($applicable, true), gettype($applicable)), __LINE__);
        }
        $this->applicable = $applicable;
        return $this;
    }
    /**
     * Get fields value
     * @return \SFPartnerApi\v480\StructType\SearchLayoutField[]|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * This method is responsible for validating the values passed to the setFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldsForArrayConstraintsFromSetFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchLayoutFieldsDisplayedFieldsItem) {
            // validation for constraint: itemType
            if (!$searchLayoutFieldsDisplayedFieldsItem instanceof \SFPartnerApi\v480\StructType\SearchLayoutField) {
                $invalidValues[] = is_object($searchLayoutFieldsDisplayedFieldsItem) ? get_class($searchLayoutFieldsDisplayedFieldsItem) : sprintf('%s(%s)', gettype($searchLayoutFieldsDisplayedFieldsItem), var_export($searchLayoutFieldsDisplayedFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fields property can only contain items of type \SFPartnerApi\v480\StructType\SearchLayoutField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SearchLayoutField[] $fields
     * @return \SFPartnerApi\v480\StructType\SearchLayoutFieldsDisplayed
     */
    public function setFields(array $fields = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldsArrayErrorMessage = self::validateFieldsForArrayConstraintsFromSetFields($fields))) {
            throw new \InvalidArgumentException($fieldsArrayErrorMessage, __LINE__);
        }
        $this->fields = $fields;
        return $this;
    }
    /**
     * Add item to fields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\SearchLayoutField $item
     * @return \SFPartnerApi\v480\StructType\SearchLayoutFieldsDisplayed
     */
    public function addToFields(\SFPartnerApi\v480\StructType\SearchLayoutField $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\SearchLayoutField) {
            throw new \InvalidArgumentException(sprintf('The fields property can only contain items of type \SFPartnerApi\v480\StructType\SearchLayoutField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fields[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchLayoutFieldsDisplayed
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
