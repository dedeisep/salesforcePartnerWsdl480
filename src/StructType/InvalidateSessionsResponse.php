<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for invalidateSessionsResponse StructType
 * @subpackage Structs
 */
class InvalidateSessionsResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\InvalidateSessionsResult[]
     */
    public $result;
    /**
     * Constructor method for invalidateSessionsResponse
     * @uses InvalidateSessionsResponse::setResult()
     * @param \SFPartnerApi\v480\StructType\InvalidateSessionsResult[] $result
     */
    public function __construct(array $result = array())
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return \SFPartnerApi\v480\StructType\InvalidateSessionsResult[]|null
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
        foreach ($values as $invalidateSessionsResponseResultItem) {
            // validation for constraint: itemType
            if (!$invalidateSessionsResponseResultItem instanceof \SFPartnerApi\v480\StructType\InvalidateSessionsResult) {
                $invalidValues[] = is_object($invalidateSessionsResponseResultItem) ? get_class($invalidateSessionsResponseResultItem) : sprintf('%s(%s)', gettype($invalidateSessionsResponseResultItem), var_export($invalidateSessionsResponseResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The result property can only contain items of type \SFPartnerApi\v480\StructType\InvalidateSessionsResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set result value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\InvalidateSessionsResult[] $result
     * @return \SFPartnerApi\v480\StructType\InvalidateSessionsResponse
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
     * @param \SFPartnerApi\v480\StructType\InvalidateSessionsResult $item
     * @return \SFPartnerApi\v480\StructType\InvalidateSessionsResponse
     */
    public function addToResult(\SFPartnerApi\v480\StructType\InvalidateSessionsResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\InvalidateSessionsResult) {
            throw new \InvalidArgumentException(sprintf('The result property can only contain items of type \SFPartnerApi\v480\StructType\InvalidateSessionsResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \SFPartnerApi\v480\StructType\InvalidateSessionsResponse
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
