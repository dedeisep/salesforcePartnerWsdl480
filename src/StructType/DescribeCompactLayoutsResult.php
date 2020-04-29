<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeCompactLayoutsResult StructType
 * @subpackage Structs
 */
class DescribeCompactLayoutsResult extends AbstractStructBase
{
    /**
     * The compactLayouts
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeCompactLayout[]
     */
    public $compactLayouts;
    /**
     * The defaultCompactLayoutId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $defaultCompactLayoutId;
    /**
     * The recordTypeCompactLayoutMappings
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping[]
     */
    public $recordTypeCompactLayoutMappings;
    /**
     * Constructor method for DescribeCompactLayoutsResult
     * @uses DescribeCompactLayoutsResult::setCompactLayouts()
     * @uses DescribeCompactLayoutsResult::setDefaultCompactLayoutId()
     * @uses DescribeCompactLayoutsResult::setRecordTypeCompactLayoutMappings()
     * @param \SFPartnerApi\v480\StructType\DescribeCompactLayout[] $compactLayouts
     * @param string $defaultCompactLayoutId
     * @param \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping[] $recordTypeCompactLayoutMappings
     */
    public function __construct(array $compactLayouts = array(), $defaultCompactLayoutId = null, array $recordTypeCompactLayoutMappings = array())
    {
        $this
            ->setCompactLayouts($compactLayouts)
            ->setDefaultCompactLayoutId($defaultCompactLayoutId)
            ->setRecordTypeCompactLayoutMappings($recordTypeCompactLayoutMappings);
    }
    /**
     * Get compactLayouts value
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayout[]
     */
    public function getCompactLayouts()
    {
        return $this->compactLayouts;
    }
    /**
     * This method is responsible for validating the values passed to the setCompactLayouts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompactLayouts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompactLayoutsForArrayConstraintsFromSetCompactLayouts(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeCompactLayoutsResultCompactLayoutsItem) {
            // validation for constraint: itemType
            if (!$describeCompactLayoutsResultCompactLayoutsItem instanceof \SFPartnerApi\v480\StructType\DescribeCompactLayout) {
                $invalidValues[] = is_object($describeCompactLayoutsResultCompactLayoutsItem) ? get_class($describeCompactLayoutsResultCompactLayoutsItem) : sprintf('%s(%s)', gettype($describeCompactLayoutsResultCompactLayoutsItem), var_export($describeCompactLayoutsResultCompactLayoutsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The compactLayouts property can only contain items of type \SFPartnerApi\v480\StructType\DescribeCompactLayout, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set compactLayouts value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeCompactLayout[] $compactLayouts
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayoutsResult
     */
    public function setCompactLayouts(array $compactLayouts = array())
    {
        // validation for constraint: array
        if ('' !== ($compactLayoutsArrayErrorMessage = self::validateCompactLayoutsForArrayConstraintsFromSetCompactLayouts($compactLayouts))) {
            throw new \InvalidArgumentException($compactLayoutsArrayErrorMessage, __LINE__);
        }
        $this->compactLayouts = $compactLayouts;
        return $this;
    }
    /**
     * Add item to compactLayouts value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeCompactLayout $item
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayoutsResult
     */
    public function addToCompactLayouts(\SFPartnerApi\v480\StructType\DescribeCompactLayout $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeCompactLayout) {
            throw new \InvalidArgumentException(sprintf('The compactLayouts property can only contain items of type \SFPartnerApi\v480\StructType\DescribeCompactLayout, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->compactLayouts[] = $item;
        return $this;
    }
    /**
     * Get defaultCompactLayoutId value
     * @return string|null
     */
    public function getDefaultCompactLayoutId()
    {
        return $this->defaultCompactLayoutId;
    }
    /**
     * Set defaultCompactLayoutId value
     * @param string $defaultCompactLayoutId
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayoutsResult
     */
    public function setDefaultCompactLayoutId($defaultCompactLayoutId = null)
    {
        // validation for constraint: string
        if (!is_null($defaultCompactLayoutId) && !is_string($defaultCompactLayoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultCompactLayoutId, true), gettype($defaultCompactLayoutId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($defaultCompactLayoutId) && mb_strlen($defaultCompactLayoutId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($defaultCompactLayoutId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($defaultCompactLayoutId) && !preg_match('/[a-zA-Z0-9]{18}/', $defaultCompactLayoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($defaultCompactLayoutId, true)), __LINE__);
        }
        $this->defaultCompactLayoutId = $defaultCompactLayoutId;
        return $this;
    }
    /**
     * Get recordTypeCompactLayoutMappings value
     * @return \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping[]|null
     */
    public function getRecordTypeCompactLayoutMappings()
    {
        return $this->recordTypeCompactLayoutMappings;
    }
    /**
     * This method is responsible for validating the values passed to the setRecordTypeCompactLayoutMappings method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecordTypeCompactLayoutMappings method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecordTypeCompactLayoutMappingsForArrayConstraintsFromSetRecordTypeCompactLayoutMappings(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeCompactLayoutsResultRecordTypeCompactLayoutMappingsItem) {
            // validation for constraint: itemType
            if (!$describeCompactLayoutsResultRecordTypeCompactLayoutMappingsItem instanceof \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping) {
                $invalidValues[] = is_object($describeCompactLayoutsResultRecordTypeCompactLayoutMappingsItem) ? get_class($describeCompactLayoutsResultRecordTypeCompactLayoutMappingsItem) : sprintf('%s(%s)', gettype($describeCompactLayoutsResultRecordTypeCompactLayoutMappingsItem), var_export($describeCompactLayoutsResultRecordTypeCompactLayoutMappingsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recordTypeCompactLayoutMappings property can only contain items of type \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recordTypeCompactLayoutMappings value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping[] $recordTypeCompactLayoutMappings
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayoutsResult
     */
    public function setRecordTypeCompactLayoutMappings(array $recordTypeCompactLayoutMappings = array())
    {
        // validation for constraint: array
        if ('' !== ($recordTypeCompactLayoutMappingsArrayErrorMessage = self::validateRecordTypeCompactLayoutMappingsForArrayConstraintsFromSetRecordTypeCompactLayoutMappings($recordTypeCompactLayoutMappings))) {
            throw new \InvalidArgumentException($recordTypeCompactLayoutMappingsArrayErrorMessage, __LINE__);
        }
        $this->recordTypeCompactLayoutMappings = $recordTypeCompactLayoutMappings;
        return $this;
    }
    /**
     * Add item to recordTypeCompactLayoutMappings value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping $item
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayoutsResult
     */
    public function addToRecordTypeCompactLayoutMappings(\SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping) {
            throw new \InvalidArgumentException(sprintf('The recordTypeCompactLayoutMappings property can only contain items of type \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recordTypeCompactLayoutMappings[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayoutsResult
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
