<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for performQuickActions StructType
 * @subpackage Structs
 */
class PerformQuickActions extends AbstractStructBase
{
    /**
     * The quickActions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\PerformQuickActionRequest[]
     */
    public $quickActions;
    /**
     * Constructor method for performQuickActions
     * @uses PerformQuickActions::setQuickActions()
     * @param \SFPartnerApi\v480\StructType\PerformQuickActionRequest[] $quickActions
     */
    public function __construct(array $quickActions = array())
    {
        $this
            ->setQuickActions($quickActions);
    }
    /**
     * Get quickActions value
     * @return \SFPartnerApi\v480\StructType\PerformQuickActionRequest[]|null
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
        foreach ($values as $performQuickActionsQuickActionsItem) {
            // validation for constraint: itemType
            if (!$performQuickActionsQuickActionsItem instanceof \SFPartnerApi\v480\StructType\PerformQuickActionRequest) {
                $invalidValues[] = is_object($performQuickActionsQuickActionsItem) ? get_class($performQuickActionsQuickActionsItem) : sprintf('%s(%s)', gettype($performQuickActionsQuickActionsItem), var_export($performQuickActionsQuickActionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The quickActions property can only contain items of type \SFPartnerApi\v480\StructType\PerformQuickActionRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set quickActions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PerformQuickActionRequest[] $quickActions
     * @return \SFPartnerApi\v480\StructType\PerformQuickActions
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
     * @param \SFPartnerApi\v480\StructType\PerformQuickActionRequest $item
     * @return \SFPartnerApi\v480\StructType\PerformQuickActions
     */
    public function addToQuickActions(\SFPartnerApi\v480\StructType\PerformQuickActionRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\PerformQuickActionRequest) {
            throw new \InvalidArgumentException(sprintf('The quickActions property can only contain items of type \SFPartnerApi\v480\StructType\PerformQuickActionRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->quickActions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\PerformQuickActions
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
