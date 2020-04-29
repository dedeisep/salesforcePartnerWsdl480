<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for retrieveQuickActionTemplates StructType
 * @subpackage Structs
 */
class RetrieveQuickActionTemplates extends AbstractStructBase
{
    /**
     * The quickActionNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $quickActionNames;
    /**
     * The contextId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $contextId;
    /**
     * Constructor method for retrieveQuickActionTemplates
     * @uses RetrieveQuickActionTemplates::setQuickActionNames()
     * @uses RetrieveQuickActionTemplates::setContextId()
     * @param string[] $quickActionNames
     * @param string $contextId
     */
    public function __construct(array $quickActionNames = array(), $contextId = null)
    {
        $this
            ->setQuickActionNames($quickActionNames)
            ->setContextId($contextId);
    }
    /**
     * Get quickActionNames value
     * @return string[]|null
     */
    public function getQuickActionNames()
    {
        return $this->quickActionNames;
    }
    /**
     * This method is responsible for validating the values passed to the setQuickActionNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQuickActionNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQuickActionNamesForArrayConstraintsFromSetQuickActionNames(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $retrieveQuickActionTemplatesQuickActionNamesItem) {
            // validation for constraint: itemType
            if (!is_string($retrieveQuickActionTemplatesQuickActionNamesItem)) {
                $invalidValues[] = is_object($retrieveQuickActionTemplatesQuickActionNamesItem) ? get_class($retrieveQuickActionTemplatesQuickActionNamesItem) : sprintf('%s(%s)', gettype($retrieveQuickActionTemplatesQuickActionNamesItem), var_export($retrieveQuickActionTemplatesQuickActionNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The quickActionNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set quickActionNames value
     * @throws \InvalidArgumentException
     * @param string[] $quickActionNames
     * @return \SFPartnerApi\v480\StructType\RetrieveQuickActionTemplates
     */
    public function setQuickActionNames(array $quickActionNames = array())
    {
        // validation for constraint: array
        if ('' !== ($quickActionNamesArrayErrorMessage = self::validateQuickActionNamesForArrayConstraintsFromSetQuickActionNames($quickActionNames))) {
            throw new \InvalidArgumentException($quickActionNamesArrayErrorMessage, __LINE__);
        }
        $this->quickActionNames = $quickActionNames;
        return $this;
    }
    /**
     * Add item to quickActionNames value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\RetrieveQuickActionTemplates
     */
    public function addToQuickActionNames($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The quickActionNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->quickActionNames[] = $item;
        return $this;
    }
    /**
     * Get contextId value
     * @return string|null
     */
    public function getContextId()
    {
        return $this->contextId;
    }
    /**
     * Set contextId value
     * @param string $contextId
     * @return \SFPartnerApi\v480\StructType\RetrieveQuickActionTemplates
     */
    public function setContextId($contextId = null)
    {
        // validation for constraint: string
        if (!is_null($contextId) && !is_string($contextId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextId, true), gettype($contextId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($contextId) && mb_strlen($contextId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($contextId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($contextId) && !preg_match('/[a-zA-Z0-9]{18}/', $contextId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($contextId, true)), __LINE__);
        }
        $this->contextId = $contextId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RetrieveQuickActionTemplates
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
