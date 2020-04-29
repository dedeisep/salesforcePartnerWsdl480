<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribePathAssistant StructType
 * @subpackage Structs
 */
class DescribePathAssistant extends AbstractStructBase
{
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The animationRule
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\DescribeAnimationRule[]
     */
    public $animationRule;
    /**
     * The apiName
     * @var string
     */
    public $apiName;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The pathPicklistField
     * @var string
     */
    public $pathPicklistField;
    /**
     * The picklistsForRecordType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\PicklistForRecordType[]
     */
    public $picklistsForRecordType;
    /**
     * The recordTypeId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $recordTypeId;
    /**
     * The steps
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribePathAssistantStep[]
     */
    public $steps;
    /**
     * Constructor method for DescribePathAssistant
     * @uses DescribePathAssistant::setActive()
     * @uses DescribePathAssistant::setAnimationRule()
     * @uses DescribePathAssistant::setApiName()
     * @uses DescribePathAssistant::setLabel()
     * @uses DescribePathAssistant::setPathPicklistField()
     * @uses DescribePathAssistant::setPicklistsForRecordType()
     * @uses DescribePathAssistant::setRecordTypeId()
     * @uses DescribePathAssistant::setSteps()
     * @param bool $active
     * @param \SFPartnerApi\v480\StructType\DescribeAnimationRule[] $animationRule
     * @param string $apiName
     * @param string $label
     * @param string $pathPicklistField
     * @param \SFPartnerApi\v480\StructType\PicklistForRecordType[] $picklistsForRecordType
     * @param string $recordTypeId
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistantStep[] $steps
     */
    public function __construct($active = null, array $animationRule = array(), $apiName = null, $label = null, $pathPicklistField = null, array $picklistsForRecordType = array(), $recordTypeId = null, array $steps = array())
    {
        $this
            ->setActive($active)
            ->setAnimationRule($animationRule)
            ->setApiName($apiName)
            ->setLabel($label)
            ->setPathPicklistField($pathPicklistField)
            ->setPicklistsForRecordType($picklistsForRecordType)
            ->setRecordTypeId($recordTypeId)
            ->setSteps($steps);
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get animationRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\DescribeAnimationRule[]|null
     */
    public function getAnimationRule()
    {
        return isset($this->animationRule) ? $this->animationRule : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAnimationRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnimationRule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAnimationRuleForArrayConstraintsFromSetAnimationRule(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describePathAssistantAnimationRuleItem) {
            // validation for constraint: itemType
            if (!$describePathAssistantAnimationRuleItem instanceof \SFPartnerApi\v480\StructType\DescribeAnimationRule) {
                $invalidValues[] = is_object($describePathAssistantAnimationRuleItem) ? get_class($describePathAssistantAnimationRuleItem) : sprintf('%s(%s)', gettype($describePathAssistantAnimationRuleItem), var_export($describePathAssistantAnimationRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The animationRule property can only contain items of type \SFPartnerApi\v480\StructType\DescribeAnimationRule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set animationRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeAnimationRule[] $animationRule
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function setAnimationRule(array $animationRule = array())
    {
        // validation for constraint: array
        if ('' !== ($animationRuleArrayErrorMessage = self::validateAnimationRuleForArrayConstraintsFromSetAnimationRule($animationRule))) {
            throw new \InvalidArgumentException($animationRuleArrayErrorMessage, __LINE__);
        }
        if (is_null($animationRule) || (is_array($animationRule) && empty($animationRule))) {
            unset($this->animationRule);
        } else {
            $this->animationRule = $animationRule;
        }
        return $this;
    }
    /**
     * Add item to animationRule value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeAnimationRule $item
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function addToAnimationRule(\SFPartnerApi\v480\StructType\DescribeAnimationRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeAnimationRule) {
            throw new \InvalidArgumentException(sprintf('The animationRule property can only contain items of type \SFPartnerApi\v480\StructType\DescribeAnimationRule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->animationRule[] = $item;
        return $this;
    }
    /**
     * Get apiName value
     * @return string|null
     */
    public function getApiName()
    {
        return $this->apiName;
    }
    /**
     * Set apiName value
     * @param string $apiName
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function setApiName($apiName = null)
    {
        // validation for constraint: string
        if (!is_null($apiName) && !is_string($apiName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiName, true), gettype($apiName)), __LINE__);
        }
        $this->apiName = $apiName;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get pathPicklistField value
     * @return string|null
     */
    public function getPathPicklistField()
    {
        return $this->pathPicklistField;
    }
    /**
     * Set pathPicklistField value
     * @param string $pathPicklistField
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function setPathPicklistField($pathPicklistField = null)
    {
        // validation for constraint: string
        if (!is_null($pathPicklistField) && !is_string($pathPicklistField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pathPicklistField, true), gettype($pathPicklistField)), __LINE__);
        }
        $this->pathPicklistField = $pathPicklistField;
        return $this;
    }
    /**
     * Get picklistsForRecordType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\PicklistForRecordType[]|null
     */
    public function getPicklistsForRecordType()
    {
        return isset($this->picklistsForRecordType) ? $this->picklistsForRecordType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPicklistsForRecordType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicklistsForRecordType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePicklistsForRecordTypeForArrayConstraintsFromSetPicklistsForRecordType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describePathAssistantPicklistsForRecordTypeItem) {
            // validation for constraint: itemType
            if (!$describePathAssistantPicklistsForRecordTypeItem instanceof \SFPartnerApi\v480\StructType\PicklistForRecordType) {
                $invalidValues[] = is_object($describePathAssistantPicklistsForRecordTypeItem) ? get_class($describePathAssistantPicklistsForRecordTypeItem) : sprintf('%s(%s)', gettype($describePathAssistantPicklistsForRecordTypeItem), var_export($describePathAssistantPicklistsForRecordTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The picklistsForRecordType property can only contain items of type \SFPartnerApi\v480\StructType\PicklistForRecordType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set picklistsForRecordType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PicklistForRecordType[] $picklistsForRecordType
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function setPicklistsForRecordType(array $picklistsForRecordType = array())
    {
        // validation for constraint: array
        if ('' !== ($picklistsForRecordTypeArrayErrorMessage = self::validatePicklistsForRecordTypeForArrayConstraintsFromSetPicklistsForRecordType($picklistsForRecordType))) {
            throw new \InvalidArgumentException($picklistsForRecordTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($picklistsForRecordType) || (is_array($picklistsForRecordType) && empty($picklistsForRecordType))) {
            unset($this->picklistsForRecordType);
        } else {
            $this->picklistsForRecordType = $picklistsForRecordType;
        }
        return $this;
    }
    /**
     * Add item to picklistsForRecordType value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PicklistForRecordType $item
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function addToPicklistsForRecordType(\SFPartnerApi\v480\StructType\PicklistForRecordType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\PicklistForRecordType) {
            throw new \InvalidArgumentException(sprintf('The picklistsForRecordType property can only contain items of type \SFPartnerApi\v480\StructType\PicklistForRecordType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->picklistsForRecordType[] = $item;
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
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function setRecordTypeId($recordTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($recordTypeId) && !is_string($recordTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordTypeId, true), gettype($recordTypeId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($recordTypeId) && mb_strlen($recordTypeId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($recordTypeId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($recordTypeId) && !preg_match('/[a-zA-Z0-9]{18}/', $recordTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($recordTypeId, true)), __LINE__);
        }
        $this->recordTypeId = $recordTypeId;
        return $this;
    }
    /**
     * Get steps value
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantStep[]|null
     */
    public function getSteps()
    {
        return $this->steps;
    }
    /**
     * This method is responsible for validating the values passed to the setSteps method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSteps method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStepsForArrayConstraintsFromSetSteps(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describePathAssistantStepsItem) {
            // validation for constraint: itemType
            if (!$describePathAssistantStepsItem instanceof \SFPartnerApi\v480\StructType\DescribePathAssistantStep) {
                $invalidValues[] = is_object($describePathAssistantStepsItem) ? get_class($describePathAssistantStepsItem) : sprintf('%s(%s)', gettype($describePathAssistantStepsItem), var_export($describePathAssistantStepsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The steps property can only contain items of type \SFPartnerApi\v480\StructType\DescribePathAssistantStep, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set steps value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistantStep[] $steps
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function setSteps(array $steps = array())
    {
        // validation for constraint: array
        if ('' !== ($stepsArrayErrorMessage = self::validateStepsForArrayConstraintsFromSetSteps($steps))) {
            throw new \InvalidArgumentException($stepsArrayErrorMessage, __LINE__);
        }
        $this->steps = $steps;
        return $this;
    }
    /**
     * Add item to steps value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistantStep $item
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
     */
    public function addToSteps(\SFPartnerApi\v480\StructType\DescribePathAssistantStep $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribePathAssistantStep) {
            throw new \InvalidArgumentException(sprintf('The steps property can only contain items of type \SFPartnerApi\v480\StructType\DescribePathAssistantStep, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->steps[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistant
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
