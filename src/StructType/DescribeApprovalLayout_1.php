<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeApprovalLayout StructType
 * @subpackage Structs
 */
class DescribeApprovalLayout_1 extends AbstractStructBase
{
    /**
     * The sObjectType
     * @var string
     */
    public $sObjectType;
    /**
     * The approvalProcessNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $approvalProcessNames;
    /**
     * Constructor method for describeApprovalLayout
     * @uses DescribeApprovalLayout_1::setSObjectType()
     * @uses DescribeApprovalLayout_1::setApprovalProcessNames()
     * @param string $sObjectType
     * @param string[] $approvalProcessNames
     */
    public function __construct($sObjectType = null, array $approvalProcessNames = array())
    {
        $this
            ->setSObjectType($sObjectType)
            ->setApprovalProcessNames($approvalProcessNames);
    }
    /**
     * Get sObjectType value
     * @return string|null
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }
    /**
     * Set sObjectType value
     * @param string $sObjectType
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout_1
     */
    public function setSObjectType($sObjectType = null)
    {
        // validation for constraint: string
        if (!is_null($sObjectType) && !is_string($sObjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sObjectType, true), gettype($sObjectType)), __LINE__);
        }
        $this->sObjectType = $sObjectType;
        return $this;
    }
    /**
     * Get approvalProcessNames value
     * @return string[]|null
     */
    public function getApprovalProcessNames()
    {
        return $this->approvalProcessNames;
    }
    /**
     * This method is responsible for validating the values passed to the setApprovalProcessNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApprovalProcessNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApprovalProcessNamesForArrayConstraintsFromSetApprovalProcessNames(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeApprovalLayoutApprovalProcessNamesItem) {
            // validation for constraint: itemType
            if (!is_string($describeApprovalLayoutApprovalProcessNamesItem)) {
                $invalidValues[] = is_object($describeApprovalLayoutApprovalProcessNamesItem) ? get_class($describeApprovalLayoutApprovalProcessNamesItem) : sprintf('%s(%s)', gettype($describeApprovalLayoutApprovalProcessNamesItem), var_export($describeApprovalLayoutApprovalProcessNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The approvalProcessNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set approvalProcessNames value
     * @throws \InvalidArgumentException
     * @param string[] $approvalProcessNames
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout_1
     */
    public function setApprovalProcessNames(array $approvalProcessNames = array())
    {
        // validation for constraint: array
        if ('' !== ($approvalProcessNamesArrayErrorMessage = self::validateApprovalProcessNamesForArrayConstraintsFromSetApprovalProcessNames($approvalProcessNames))) {
            throw new \InvalidArgumentException($approvalProcessNamesArrayErrorMessage, __LINE__);
        }
        $this->approvalProcessNames = $approvalProcessNames;
        return $this;
    }
    /**
     * Add item to approvalProcessNames value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout_1
     */
    public function addToApprovalProcessNames($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The approvalProcessNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->approvalProcessNames[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout_1
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
