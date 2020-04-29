<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessRequest StructType
 * @subpackage Structs
 */
class ProcessRequest extends AbstractStructBase
{
    /**
     * The comments
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comments;
    /**
     * The nextApproverIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $nextApproverIds;
    /**
     * Constructor method for ProcessRequest
     * @uses ProcessRequest::setComments()
     * @uses ProcessRequest::setNextApproverIds()
     * @param string $comments
     * @param string[] $nextApproverIds
     */
    public function __construct($comments = null, array $nextApproverIds = array())
    {
        $this
            ->setComments($comments)
            ->setNextApproverIds($nextApproverIds);
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \SFPartnerApi\v480\StructType\ProcessRequest
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get nextApproverIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getNextApproverIds()
    {
        return isset($this->nextApproverIds) ? $this->nextApproverIds : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNextApproverIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNextApproverIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNextApproverIdsForArrayConstraintsFromSetNextApproverIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processRequestNextApproverIdsItem) {
            // validation for constraint: itemType
            if (!is_string($processRequestNextApproverIdsItem)) {
                $invalidValues[] = is_object($processRequestNextApproverIdsItem) ? get_class($processRequestNextApproverIdsItem) : sprintf('%s(%s)', gettype($processRequestNextApproverIdsItem), var_export($processRequestNextApproverIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The nextApproverIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setNextApproverIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNextApproverIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNextApproverIdsForLengthConstraintFromSetNextApproverIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processRequestNextApproverIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($processRequestNextApproverIdsItem) !== 18) {
                $invalidValues[] = var_export($processRequestNextApproverIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set nextApproverIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $nextApproverIds
     * @return \SFPartnerApi\v480\StructType\ProcessRequest
     */
    public function setNextApproverIds(array $nextApproverIds = array())
    {
        // validation for constraint: array
        if ('' !== ($nextApproverIdsArrayErrorMessage = self::validateNextApproverIdsForArrayConstraintsFromSetNextApproverIds($nextApproverIds))) {
            throw new \InvalidArgumentException($nextApproverIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($nextApproverIdsLengthErrorMessage = self::validateNextApproverIdsForLengthConstraintFromSetNextApproverIds($nextApproverIds))) {
            throw new \InvalidArgumentException($nextApproverIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($nextApproverIds) && !preg_match('/[a-zA-Z0-9]{18}/', $nextApproverIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($nextApproverIds, true)), __LINE__);
        }
        if (is_null($nextApproverIds) || (is_array($nextApproverIds) && empty($nextApproverIds))) {
            unset($this->nextApproverIds);
        } else {
            $this->nextApproverIds = $nextApproverIds;
        }
        return $this;
    }
    /**
     * Add item to nextApproverIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ProcessRequest
     */
    public function addToNextApproverIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The nextApproverIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->nextApproverIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ProcessRequest
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
