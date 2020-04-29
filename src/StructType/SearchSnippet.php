<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSnippet StructType
 * @subpackage Structs
 */
class SearchSnippet extends AbstractStructBase
{
    /**
     * The text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * The wholeFields
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\NameValuePair[]
     */
    public $wholeFields;
    /**
     * Constructor method for SearchSnippet
     * @uses SearchSnippet::setText()
     * @uses SearchSnippet::setWholeFields()
     * @param string $text
     * @param \SFPartnerApi\v480\StructType\NameValuePair[] $wholeFields
     */
    public function __construct($text = null, array $wholeFields = array())
    {
        $this
            ->setText($text)
            ->setWholeFields($wholeFields);
    }
    /**
     * Get text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : null;
    }
    /**
     * Set text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $text
     * @return \SFPartnerApi\v480\StructType\SearchSnippet
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->text);
        } else {
            $this->text = $text;
        }
        return $this;
    }
    /**
     * Get wholeFields value
     * @return \SFPartnerApi\v480\StructType\NameValuePair[]|null
     */
    public function getWholeFields()
    {
        return $this->wholeFields;
    }
    /**
     * This method is responsible for validating the values passed to the setWholeFields method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWholeFields method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWholeFieldsForArrayConstraintsFromSetWholeFields(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSnippetWholeFieldsItem) {
            // validation for constraint: itemType
            if (!$searchSnippetWholeFieldsItem instanceof \SFPartnerApi\v480\StructType\NameValuePair) {
                $invalidValues[] = is_object($searchSnippetWholeFieldsItem) ? get_class($searchSnippetWholeFieldsItem) : sprintf('%s(%s)', gettype($searchSnippetWholeFieldsItem), var_export($searchSnippetWholeFieldsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The wholeFields property can only contain items of type \SFPartnerApi\v480\StructType\NameValuePair, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set wholeFields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\NameValuePair[] $wholeFields
     * @return \SFPartnerApi\v480\StructType\SearchSnippet
     */
    public function setWholeFields(array $wholeFields = array())
    {
        // validation for constraint: array
        if ('' !== ($wholeFieldsArrayErrorMessage = self::validateWholeFieldsForArrayConstraintsFromSetWholeFields($wholeFields))) {
            throw new \InvalidArgumentException($wholeFieldsArrayErrorMessage, __LINE__);
        }
        $this->wholeFields = $wholeFields;
        return $this;
    }
    /**
     * Add item to wholeFields value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\NameValuePair $item
     * @return \SFPartnerApi\v480\StructType\SearchSnippet
     */
    public function addToWholeFields(\SFPartnerApi\v480\StructType\NameValuePair $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\NameValuePair) {
            throw new \InvalidArgumentException(sprintf('The wholeFields property can only contain items of type \SFPartnerApi\v480\StructType\NameValuePair, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->wholeFields[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SearchSnippet
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
