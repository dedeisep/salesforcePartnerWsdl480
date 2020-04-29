<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeQuickActionsForRecordType StructType
 * @subpackage Structs
 */
class DescribeQuickActionsForRecordType extends AbstractStructBase
{
    /**
     * The quickActions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $quickActions;
    /**
     * The recordTypeId
     * @var string
     */
    public $recordTypeId;
    /**
     * Constructor method for describeQuickActionsForRecordType
     * @uses DescribeQuickActionsForRecordType::setQuickActions()
     * @uses DescribeQuickActionsForRecordType::setRecordTypeId()
     * @param string[] $quickActions
     * @param string $recordTypeId
     */
    public function __construct(array $quickActions = array(), $recordTypeId = null)
    {
        $this
            ->setQuickActions($quickActions)
            ->setRecordTypeId($recordTypeId);
    }
    /**
     * Get quickActions value
     * @return string[]|null
     */
    public function getQuickActions()
    {
        return $this->quickActions;
    }
    /**
     * This method is responsible for validating the values passed to the setQuickActions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQuickActions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQuickActionsForArrayConstraintsFromSetQuickActions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeQuickActionsForRecordTypeQuickActionsItem) {
            // validation for constraint: itemType
            if (!is_string($describeQuickActionsForRecordTypeQuickActionsItem)) {
                $invalidValues[] = is_object($describeQuickActionsForRecordTypeQuickActionsItem) ? get_class($describeQuickActionsForRecordTypeQuickActionsItem) : sprintf('%s(%s)', gettype($describeQuickActionsForRecordTypeQuickActionsItem), var_export($describeQuickActionsForRecordTypeQuickActionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The quickActions property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set quickActions value
     * @throws \InvalidArgumentException
     * @param string[] $quickActions
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionsForRecordType
     */
    public function setQuickActions(array $quickActions = array())
    {
        // validation for constraint: array
        if ('' !== ($quickActionsArrayErrorMessage = self::validateQuickActionsForArrayConstraintsFromSetQuickActions($quickActions))) {
            throw new \InvalidArgumentException($quickActionsArrayErrorMessage, __LINE__);
        }
        $this->quickActions = $quickActions;
        return $this;
    }
    /**
     * Add item to quickActions value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionsForRecordType
     */
    public function addToQuickActions($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The quickActions property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->quickActions[] = $item;
        return $this;
    }
    /**
     * Get recordTypeId value
     * @return string|null
     */
    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }
    /**
     * Set recordTypeId value
     * @param string $recordTypeId
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionsForRecordType
     */
    public function setRecordTypeId($recordTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($recordTypeId) && !is_string($recordTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordTypeId, true), gettype($recordTypeId)), __LINE__);
        }
        $this->recordTypeId = $recordTypeId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionsForRecordType
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
