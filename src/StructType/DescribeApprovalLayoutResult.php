<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeApprovalLayoutResult StructType
 * @subpackage Structs
 */
class DescribeApprovalLayoutResult extends AbstractStructBase
{
    /**
     * The approvalLayouts
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeApprovalLayout[]
     */
    public $approvalLayouts;
    /**
     * Constructor method for DescribeApprovalLayoutResult
     * @uses DescribeApprovalLayoutResult::setApprovalLayouts()
     * @param \SFPartnerApi\v480\StructType\DescribeApprovalLayout[] $approvalLayouts
     */
    public function __construct(array $approvalLayouts = array())
    {
        $this
            ->setApprovalLayouts($approvalLayouts);
    }
    /**
     * Get approvalLayouts value
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayout[]|null
     */
    public function getApprovalLayouts()
    {
        return $this->approvalLayouts;
    }
    /**
     * This method is responsible for validating the values passed to the setApprovalLayouts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApprovalLayouts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApprovalLayoutsForArrayConstraintsFromSetApprovalLayouts(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeApprovalLayoutResultApprovalLayoutsItem) {
            // validation for constraint: itemType
            if (!$describeApprovalLayoutResultApprovalLayoutsItem instanceof \SFPartnerApi\v480\StructType\DescribeApprovalLayout) {
                $invalidValues[] = is_object($describeApprovalLayoutResultApprovalLayoutsItem) ? get_class($describeApprovalLayoutResultApprovalLayoutsItem) : sprintf('%s(%s)', gettype($describeApprovalLayoutResultApprovalLayoutsItem), var_export($describeApprovalLayoutResultApprovalLayoutsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The approvalLayouts property can only contain items of type \SFPartnerApi\v480\StructType\DescribeApprovalLayout, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set approvalLayouts value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeApprovalLayout[] $approvalLayouts
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayoutResult
     */
    public function setApprovalLayouts(array $approvalLayouts = array())
    {
        // validation for constraint: array
        if ('' !== ($approvalLayoutsArrayErrorMessage = self::validateApprovalLayoutsForArrayConstraintsFromSetApprovalLayouts($approvalLayouts))) {
            throw new \InvalidArgumentException($approvalLayoutsArrayErrorMessage, __LINE__);
        }
        $this->approvalLayouts = $approvalLayouts;
        return $this;
    }
    /**
     * Add item to approvalLayouts value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeApprovalLayout $item
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayoutResult
     */
    public function addToApprovalLayouts(\SFPartnerApi\v480\StructType\DescribeApprovalLayout $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeApprovalLayout) {
            throw new \InvalidArgumentException(sprintf('The approvalLayouts property can only contain items of type \SFPartnerApi\v480\StructType\DescribeApprovalLayout, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->approvalLayouts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayoutResult
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
