<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MassEmailMessage StructType
 * @subpackage Structs
 */
class MassEmailMessage extends Email
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The targetObjectIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: 250
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $targetObjectIds;
    /**
     * The templateId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $templateId;
    /**
     * The whatIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: 250
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $whatIds;
    /**
     * Constructor method for MassEmailMessage
     * @uses MassEmailMessage::setDescription()
     * @uses MassEmailMessage::setTargetObjectIds()
     * @uses MassEmailMessage::setTemplateId()
     * @uses MassEmailMessage::setWhatIds()
     * @param string $description
     * @param string[] $targetObjectIds
     * @param string $templateId
     * @param string[] $whatIds
     */
    public function __construct($description = null, array $targetObjectIds = array(), $templateId = null, array $whatIds = array())
    {
        $this
            ->setDescription($description)
            ->setTargetObjectIds($targetObjectIds)
            ->setTemplateId($templateId)
            ->setWhatIds($whatIds);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \SFPartnerApi\v480\StructType\MassEmailMessage
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get targetObjectIds value
     * @return string[]|null
     */
    public function getTargetObjectIds()
    {
        return $this->targetObjectIds;
    }
    /**
     * This method is responsible for validating the values passed to the setTargetObjectIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTargetObjectIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTargetObjectIdsForArrayConstraintsFromSetTargetObjectIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $massEmailMessageTargetObjectIdsItem) {
            // validation for constraint: itemType
            if (!is_string($massEmailMessageTargetObjectIdsItem)) {
                $invalidValues[] = is_object($massEmailMessageTargetObjectIdsItem) ? get_class($massEmailMessageTargetObjectIdsItem) : sprintf('%s(%s)', gettype($massEmailMessageTargetObjectIdsItem), var_export($massEmailMessageTargetObjectIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The targetObjectIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setTargetObjectIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTargetObjectIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTargetObjectIdsForLengthConstraintFromSetTargetObjectIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $massEmailMessageTargetObjectIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($massEmailMessageTargetObjectIdsItem) !== 18) {
                $invalidValues[] = var_export($massEmailMessageTargetObjectIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set targetObjectIds value
     * @throws \InvalidArgumentException
     * @param string[] $targetObjectIds
     * @return \SFPartnerApi\v480\StructType\MassEmailMessage
     */
    public function setTargetObjectIds(array $targetObjectIds = array())
    {
        // validation for constraint: array
        if ('' !== ($targetObjectIdsArrayErrorMessage = self::validateTargetObjectIdsForArrayConstraintsFromSetTargetObjectIds($targetObjectIds))) {
            throw new \InvalidArgumentException($targetObjectIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($targetObjectIdsLengthErrorMessage = self::validateTargetObjectIdsForLengthConstraintFromSetTargetObjectIds($targetObjectIds))) {
            throw new \InvalidArgumentException($targetObjectIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(250)
        if (is_array($targetObjectIds) && count($targetObjectIds) > 250) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 250', count($targetObjectIds)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($targetObjectIds) && !preg_match('/[a-zA-Z0-9]{18}/', $targetObjectIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($targetObjectIds, true)), __LINE__);
        }
        $this->targetObjectIds = $targetObjectIds;
        return $this;
    }
    /**
     * Add item to targetObjectIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\MassEmailMessage
     */
    public function addToTargetObjectIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The targetObjectIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: maxOccurs(250)
        if (is_array($this->targetObjectIds) && count($this->targetObjectIds) >= 250) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 250', count($this->targetObjectIds)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->targetObjectIds[] = $item;
        return $this;
    }
    /**
     * Get templateId value
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param string $templateId
     * @return \SFPartnerApi\v480\StructType\MassEmailMessage
     */
    public function setTemplateId($templateId = null)
    {
        // validation for constraint: string
        if (!is_null($templateId) && !is_string($templateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($templateId) && mb_strlen($templateId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($templateId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($templateId) && !preg_match('/[a-zA-Z0-9]{18}/', $templateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($templateId, true)), __LINE__);
        }
        $this->templateId = $templateId;
        return $this;
    }
    /**
     * Get whatIds value
     * @return string[]|null
     */
    public function getWhatIds()
    {
        return $this->whatIds;
    }
    /**
     * This method is responsible for validating the values passed to the setWhatIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWhatIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWhatIdsForArrayConstraintsFromSetWhatIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $massEmailMessageWhatIdsItem) {
            // validation for constraint: itemType
            if (!is_string($massEmailMessageWhatIdsItem)) {
                $invalidValues[] = is_object($massEmailMessageWhatIdsItem) ? get_class($massEmailMessageWhatIdsItem) : sprintf('%s(%s)', gettype($massEmailMessageWhatIdsItem), var_export($massEmailMessageWhatIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The whatIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setWhatIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWhatIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWhatIdsForLengthConstraintFromSetWhatIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $massEmailMessageWhatIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($massEmailMessageWhatIdsItem) !== 18) {
                $invalidValues[] = var_export($massEmailMessageWhatIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set whatIds value
     * @throws \InvalidArgumentException
     * @param string[] $whatIds
     * @return \SFPartnerApi\v480\StructType\MassEmailMessage
     */
    public function setWhatIds(array $whatIds = array())
    {
        // validation for constraint: array
        if ('' !== ($whatIdsArrayErrorMessage = self::validateWhatIdsForArrayConstraintsFromSetWhatIds($whatIds))) {
            throw new \InvalidArgumentException($whatIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($whatIdsLengthErrorMessage = self::validateWhatIdsForLengthConstraintFromSetWhatIds($whatIds))) {
            throw new \InvalidArgumentException($whatIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(250)
        if (is_array($whatIds) && count($whatIds) > 250) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 250', count($whatIds)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($whatIds) && !preg_match('/[a-zA-Z0-9]{18}/', $whatIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($whatIds, true)), __LINE__);
        }
        $this->whatIds = $whatIds;
        return $this;
    }
    /**
     * Add item to whatIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\MassEmailMessage
     */
    public function addToWhatIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The whatIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: maxOccurs(250)
        if (is_array($this->whatIds) && count($this->whatIds) >= 250) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 250', count($this->whatIds)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->whatIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\MassEmailMessage
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
