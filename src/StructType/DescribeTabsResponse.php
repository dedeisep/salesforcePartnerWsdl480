<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeTabsResponse StructType
 * @subpackage Structs
 */
class DescribeTabsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\DescribeTabSetResult[]
     */
    public $result;
    /**
     * Constructor method for describeTabsResponse
     * @uses DescribeTabsResponse::setResult()
     * @param \SFPartnerApi\v480\StructType\DescribeTabSetResult[] $result
     */
    public function __construct(array $result = array())
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\DescribeTabSetResult[]|null
     */
    public function getResult()
    {
        return isset($this->result) ? $this->result : null;
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
        foreach ($values as $describeTabsResponseResultItem) {
            // validation for constraint: itemType
            if (!$describeTabsResponseResultItem instanceof \SFPartnerApi\v480\StructType\DescribeTabSetResult) {
                $invalidValues[] = is_object($describeTabsResponseResultItem) ? get_class($describeTabsResponseResultItem) : sprintf('%s(%s)', gettype($describeTabsResponseResultItem), var_export($describeTabsResponseResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The result property can only contain items of type \SFPartnerApi\v480\StructType\DescribeTabSetResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeTabSetResult[] $result
     * @return \SFPartnerApi\v480\StructType\DescribeTabsResponse
     */
    public function setResult(array $result = array())
    {
        // validation for constraint: array
        if ('' !== ($resultArrayErrorMessage = self::validateResultForArrayConstraintsFromSetResult($result))) {
            throw new \InvalidArgumentException($resultArrayErrorMessage, __LINE__);
        }
        if (is_null($result) || (is_array($result) && empty($result))) {
            unset($this->result);
        } else {
            $this->result = $result;
        }
        return $this;
    }
    /**
     * Add item to result value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeTabSetResult $item
     * @return \SFPartnerApi\v480\StructType\DescribeTabsResponse
     */
    public function addToResult(\SFPartnerApi\v480\StructType\DescribeTabSetResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeTabSetResult) {
            throw new \InvalidArgumentException(sprintf('The result property can only contain items of type \SFPartnerApi\v480\StructType\DescribeTabSetResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \SFPartnerApi\v480\StructType\DescribeTabsResponse
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
