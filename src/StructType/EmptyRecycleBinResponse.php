<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emptyRecycleBinResponse StructType
 * @subpackage Structs
 */
class EmptyRecycleBinResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\EmptyRecycleBinResult[]
     */
    public $result;
    /**
     * Constructor method for emptyRecycleBinResponse
     * @uses EmptyRecycleBinResponse::setResult()
     * @param \SFPartnerApi\v480\StructType\EmptyRecycleBinResult[] $result
     */
    public function __construct(array $result = array())
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return \SFPartnerApi\v480\StructType\EmptyRecycleBinResult[]
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
        foreach ($values as $emptyRecycleBinResponseResultItem) {
            // validation for constraint: itemType
            if (!$emptyRecycleBinResponseResultItem instanceof \SFPartnerApi\v480\StructType\EmptyRecycleBinResult) {
                $invalidValues[] = is_object($emptyRecycleBinResponseResultItem) ? get_class($emptyRecycleBinResponseResultItem) : sprintf('%s(%s)', gettype($emptyRecycleBinResponseResultItem), var_export($emptyRecycleBinResponseResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The result property can only contain items of type \SFPartnerApi\v480\StructType\EmptyRecycleBinResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set result value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\EmptyRecycleBinResult[] $result
     * @return \SFPartnerApi\v480\StructType\EmptyRecycleBinResponse
     */
    public function setResult(array $result = array())
    {
        // validation for constraint: array
        if ('' !== ($resultArrayErrorMessage = self::validateResultForArrayConstraintsFromSetResult($result))) {
            throw new \InvalidArgumentException($resultArrayErrorMessage, __LINE__);
        }
        $this->result = $result;
        return $this;
    }
    /**
     * Add item to result value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\EmptyRecycleBinResult $item
     * @return \SFPartnerApi\v480\StructType\EmptyRecycleBinResponse
     */
    public function addToResult(\SFPartnerApi\v480\StructType\EmptyRecycleBinResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\EmptyRecycleBinResult) {
            throw new \InvalidArgumentException(sprintf('The result property can only contain items of type \SFPartnerApi\v480\StructType\EmptyRecycleBinResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \SFPartnerApi\v480\StructType\EmptyRecycleBinResponse
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