<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeDataCategoryGroupStructuresResponse StructType
 * @subpackage Structs
 */
class DescribeDataCategoryGroupStructuresResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult[]
     */
    public $result;
    /**
     * Constructor method for describeDataCategoryGroupStructuresResponse
     * @uses DescribeDataCategoryGroupStructuresResponse::setResult()
     * @param \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult[] $result
     */
    public function __construct(array $result = array())
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult[]|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * This method is responsible for validating the values passed to the setResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultForArrayConstraintsFromSetResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeDataCategoryGroupStructuresResponseResultItem) {
            // validation for constraint: itemType
            if (!$describeDataCategoryGroupStructuresResponseResultItem instanceof \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult) {
                $invalidValues[] = is_object($describeDataCategoryGroupStructuresResponseResultItem) ? get_class($describeDataCategoryGroupStructuresResponseResultItem) : sprintf('%s(%s)', gettype($describeDataCategoryGroupStructuresResponseResultItem), var_export($describeDataCategoryGroupStructuresResponseResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The result property can only contain items of type \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set result value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult[] $result
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructuresResponse
     */
    public function setResult(array $result = array())
    {
        // validation for constraint: array
        if ('' !== ($resultArrayErrorMessage = self::validateResultForArrayConstraintsFromSetResult($result))) {
            throw new \InvalidArgumentException($resultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($result) && count($result) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($result)), __LINE__);
        }
        $this->result = $result;
        return $this;
    }
    /**
     * Add item to result value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult $item
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructuresResponse
     */
    public function addToResult(\SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult) {
            throw new \InvalidArgumentException(sprintf('The result property can only contain items of type \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructureResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->result) && count($this->result) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->result)), __LINE__);
        }
        $this->result[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructuresResponse
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
