<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for process StructType
 * @subpackage Structs
 */
class Process extends AbstractStructBase
{
    /**
     * The actions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\ProcessRequest[]
     */
    public $actions;
    /**
     * Constructor method for process
     * @uses Process::setActions()
     * @param \SFPartnerApi\v480\StructType\ProcessRequest[] $actions
     */
    public function __construct(array $actions = array())
    {
        $this
            ->setActions($actions);
    }
    /**
     * Get actions value
     * @return \SFPartnerApi\v480\StructType\ProcessRequest[]|null
     */
    public function getActions()
    {
        return $this->actions;
    }
    /**
     * This method is responsible for validating the values passed to the setActions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActionsForArrayConstraintsFromSetActions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processActionsItem) {
            // validation for constraint: itemType
            if (!$processActionsItem instanceof \SFPartnerApi\v480\StructType\ProcessRequest) {
                $invalidValues[] = is_object($processActionsItem) ? get_class($processActionsItem) : sprintf('%s(%s)', gettype($processActionsItem), var_export($processActionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The actions property can only contain items of type \SFPartnerApi\v480\StructType\ProcessRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set actions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ProcessRequest[] $actions
     * @return \SFPartnerApi\v480\StructType\Process
     */
    public function setActions(array $actions = array())
    {
        // validation for constraint: array
        if ('' !== ($actionsArrayErrorMessage = self::validateActionsForArrayConstraintsFromSetActions($actions))) {
            throw new \InvalidArgumentException($actionsArrayErrorMessage, __LINE__);
        }
        $this->actions = $actions;
        return $this;
    }
    /**
     * Add item to actions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\ProcessRequest $item
     * @return \SFPartnerApi\v480\StructType\Process
     */
    public function addToActions(\SFPartnerApi\v480\StructType\ProcessRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\ProcessRequest) {
            throw new \InvalidArgumentException(sprintf('The actions property can only contain items of type \SFPartnerApi\v480\StructType\ProcessRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->actions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Process
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
