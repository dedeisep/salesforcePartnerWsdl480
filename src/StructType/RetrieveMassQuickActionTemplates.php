<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for retrieveMassQuickActionTemplates StructType
 * @subpackage Structs
 */
class RetrieveMassQuickActionTemplates extends AbstractStructBase
{
    /**
     * The quickActionName
     * @var string
     */
    public $quickActionName;
    /**
     * The contextIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $contextIds;
    /**
     * Constructor method for retrieveMassQuickActionTemplates
     * @uses RetrieveMassQuickActionTemplates::setQuickActionName()
     * @uses RetrieveMassQuickActionTemplates::setContextIds()
     * @param string $quickActionName
     * @param string[] $contextIds
     */
    public function __construct($quickActionName = null, array $contextIds = array())
    {
        $this
            ->setQuickActionName($quickActionName)
            ->setContextIds($contextIds);
    }
    /**
     * Get quickActionName value
     * @return string|null
     */
    public function getQuickActionName()
    {
        return $this->quickActionName;
    }
    /**
     * Set quickActionName value
     * @param string $quickActionName
     * @return \SFPartnerApi\v480\StructType\RetrieveMassQuickActionTemplates
     */
    public function setQuickActionName($quickActionName = null)
    {
        // validation for constraint: string
        if (!is_null($quickActionName) && !is_string($quickActionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quickActionName, true), gettype($quickActionName)), __LINE__);
        }
        $this->quickActionName = $quickActionName;
        return $this;
    }
    /**
     * Get contextIds value
     * @return string[]|null
     */
    public function getContextIds()
    {
        return $this->contextIds;
    }
    /**
     * This method is responsible for validating the values passed to the setContextIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContextIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextIdsForArrayConstraintsFromSetContextIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $retrieveMassQuickActionTemplatesContextIdsItem) {
            // validation for constraint: itemType
            if (!is_string($retrieveMassQuickActionTemplatesContextIdsItem)) {
                $invalidValues[] = is_object($retrieveMassQuickActionTemplatesContextIdsItem) ? get_class($retrieveMassQuickActionTemplatesContextIdsItem) : sprintf('%s(%s)', gettype($retrieveMassQuickActionTemplatesContextIdsItem), var_export($retrieveMassQuickActionTemplatesContextIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The contextIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setContextIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContextIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContextIdsForLengthConstraintFromSetContextIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $retrieveMassQuickActionTemplatesContextIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($retrieveMassQuickActionTemplatesContextIdsItem) !== 18) {
                $invalidValues[] = var_export($retrieveMassQuickActionTemplatesContextIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set contextIds value
     * @throws \InvalidArgumentException
     * @param string[] $contextIds
     * @return \SFPartnerApi\v480\StructType\RetrieveMassQuickActionTemplates
     */
    public function setContextIds(array $contextIds = array())
    {
        // validation for constraint: array
        if ('' !== ($contextIdsArrayErrorMessage = self::validateContextIdsForArrayConstraintsFromSetContextIds($contextIds))) {
            throw new \InvalidArgumentException($contextIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($contextIdsLengthErrorMessage = self::validateContextIdsForLengthConstraintFromSetContextIds($contextIds))) {
            throw new \InvalidArgumentException($contextIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($contextIds) && !preg_match('/[a-zA-Z0-9]{18}/', $contextIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($contextIds, true)), __LINE__);
        }
        $this->contextIds = $contextIds;
        return $this;
    }
    /**
     * Add item to contextIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\RetrieveMassQuickActionTemplates
     */
    public function addToContextIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The contextIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->contextIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RetrieveMassQuickActionTemplates
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
