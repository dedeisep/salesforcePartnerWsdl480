<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeGlobalResult StructType
 * @subpackage Structs
 */
class DescribeGlobalResult extends AbstractStructBase
{
    /**
     * The encoding
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $encoding;
    /**
     * The maxBatchSize
     * @var int
     */
    public $maxBatchSize;
    /**
     * The sobjects
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult[]
     */
    public $sobjects;
    /**
     * Constructor method for DescribeGlobalResult
     * @uses DescribeGlobalResult::setEncoding()
     * @uses DescribeGlobalResult::setMaxBatchSize()
     * @uses DescribeGlobalResult::setSobjects()
     * @param string $encoding
     * @param int $maxBatchSize
     * @param \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult[] $sobjects
     */
    public function __construct($encoding = null, $maxBatchSize = null, array $sobjects = array())
    {
        $this
            ->setEncoding($encoding)
            ->setMaxBatchSize($maxBatchSize)
            ->setSobjects($sobjects);
    }
    /**
     * Get encoding value
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }
    /**
     * Set encoding value
     * @param string $encoding
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalResult
     */
    public function setEncoding($encoding = null)
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoding, true), gettype($encoding)), __LINE__);
        }
        $this->encoding = $encoding;
        return $this;
    }
    /**
     * Get maxBatchSize value
     * @return int|null
     */
    public function getMaxBatchSize()
    {
        return $this->maxBatchSize;
    }
    /**
     * Set maxBatchSize value
     * @param int $maxBatchSize
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalResult
     */
    public function setMaxBatchSize($maxBatchSize = null)
    {
        // validation for constraint: int
        if (!is_null($maxBatchSize) && !(is_int($maxBatchSize) || ctype_digit($maxBatchSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxBatchSize, true), gettype($maxBatchSize)), __LINE__);
        }
        $this->maxBatchSize = $maxBatchSize;
        return $this;
    }
    /**
     * Get sobjects value
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult[]|null
     */
    public function getSobjects()
    {
        return $this->sobjects;
    }
    /**
     * This method is responsible for validating the values passed to the setSobjects method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSobjects method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSobjectsForArrayConstraintsFromSetSobjects(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeGlobalResultSobjectsItem) {
            // validation for constraint: itemType
            if (!$describeGlobalResultSobjectsItem instanceof \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult) {
                $invalidValues[] = is_object($describeGlobalResultSobjectsItem) ? get_class($describeGlobalResultSobjectsItem) : sprintf('%s(%s)', gettype($describeGlobalResultSobjectsItem), var_export($describeGlobalResultSobjectsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sobjects property can only contain items of type \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set sobjects value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult[] $sobjects
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalResult
     */
    public function setSobjects(array $sobjects = array())
    {
        // validation for constraint: array
        if ('' !== ($sobjectsArrayErrorMessage = self::validateSobjectsForArrayConstraintsFromSetSobjects($sobjects))) {
            throw new \InvalidArgumentException($sobjectsArrayErrorMessage, __LINE__);
        }
        $this->sobjects = $sobjects;
        return $this;
    }
    /**
     * Add item to sobjects value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult $item
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalResult
     */
    public function addToSobjects(\SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult) {
            throw new \InvalidArgumentException(sprintf('The sobjects property can only contain items of type \SFPartnerApi\v480\StructType\DescribeGlobalSObjectResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sobjects[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalResult
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
