<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for convertLead StructType
 * @subpackage Structs
 */
class ConvertLead extends AbstractStructBase
{
    /**
     * The leadConverts
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\LeadConvert[]
     */
    public $leadConverts;
    /**
     * Constructor method for convertLead
     * @uses ConvertLead::setLeadConverts()
     * @param \SFPartnerApi\v480\StructType\LeadConvert[] $leadConverts
     */
    public function __construct(array $leadConverts = array())
    {
        $this
            ->setLeadConverts($leadConverts);
    }
    /**
     * Get leadConverts value
     * @return \SFPartnerApi\v480\StructType\LeadConvert[]|null
     */
    public function getLeadConverts()
    {
        return $this->leadConverts;
    }
    /**
     * This method is responsible for validating the values passed to the setLeadConverts method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLeadConverts method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLeadConvertsForArrayConstraintsFromSetLeadConverts(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $convertLeadLeadConvertsItem) {
            // validation for constraint: itemType
            if (!$convertLeadLeadConvertsItem instanceof \SFPartnerApi\v480\StructType\LeadConvert) {
                $invalidValues[] = is_object($convertLeadLeadConvertsItem) ? get_class($convertLeadLeadConvertsItem) : sprintf('%s(%s)', gettype($convertLeadLeadConvertsItem), var_export($convertLeadLeadConvertsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The leadConverts property can only contain items of type \SFPartnerApi\v480\StructType\LeadConvert, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set leadConverts value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\LeadConvert[] $leadConverts
     * @return \SFPartnerApi\v480\StructType\ConvertLead
     */
    public function setLeadConverts(array $leadConverts = array())
    {
        // validation for constraint: array
        if ('' !== ($leadConvertsArrayErrorMessage = self::validateLeadConvertsForArrayConstraintsFromSetLeadConverts($leadConverts))) {
            throw new \InvalidArgumentException($leadConvertsArrayErrorMessage, __LINE__);
        }
        $this->leadConverts = $leadConverts;
        return $this;
    }
    /**
     * Add item to leadConverts value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\LeadConvert $item
     * @return \SFPartnerApi\v480\StructType\ConvertLead
     */
    public function addToLeadConverts(\SFPartnerApi\v480\StructType\LeadConvert $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\LeadConvert) {
            throw new \InvalidArgumentException(sprintf('The leadConverts property can only contain items of type \SFPartnerApi\v480\StructType\LeadConvert, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->leadConverts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ConvertLead
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
