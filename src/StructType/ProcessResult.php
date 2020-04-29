<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessResult StructType
 * @subpackage Structs
 */
class ProcessResult extends AbstractStructBase
{
    /**
     * The actorIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: false
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $actorIds;
    /**
     * The entityId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $entityId;
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The instanceId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $instanceId;
    /**
     * The instanceStatus
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $instanceStatus;
    /**
     * The newWorkitemIds
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $newWorkitemIds;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for ProcessResult
     * @uses ProcessResult::setActorIds()
     * @uses ProcessResult::setEntityId()
     * @uses ProcessResult::setErrors()
     * @uses ProcessResult::setInstanceId()
     * @uses ProcessResult::setInstanceStatus()
     * @uses ProcessResult::setNewWorkitemIds()
     * @uses ProcessResult::setSuccess()
     * @param string[] $actorIds
     * @param string $entityId
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param string $instanceId
     * @param string $instanceStatus
     * @param string[] $newWorkitemIds
     * @param bool $success
     */
    public function __construct(array $actorIds = array(), $entityId = null, array $errors = array(), $instanceId = null, $instanceStatus = null, array $newWorkitemIds = array(), $success = null)
    {
        $this
            ->setActorIds($actorIds)
            ->setEntityId($entityId)
            ->setErrors($errors)
            ->setInstanceId($instanceId)
            ->setInstanceStatus($instanceStatus)
            ->setNewWorkitemIds($newWorkitemIds)
            ->setSuccess($success);
    }
    /**
     * Get actorIds value
     * @return string[]|null
     */
    public function getActorIds()
    {
        return $this->actorIds;
    }
    /**
     * This method is responsible for validating the values passed to the setActorIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActorIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActorIdsForArrayConstraintsFromSetActorIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processResultActorIdsItem) {
            // validation for constraint: itemType
            if (!is_string($processResultActorIdsItem)) {
                $invalidValues[] = is_object($processResultActorIdsItem) ? get_class($processResultActorIdsItem) : sprintf('%s(%s)', gettype($processResultActorIdsItem), var_export($processResultActorIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The actorIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setActorIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setActorIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateActorIdsForLengthConstraintFromSetActorIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processResultActorIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($processResultActorIdsItem) !== 18) {
                $invalidValues[] = var_export($processResultActorIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set actorIds value
     * @throws \InvalidArgumentException
     * @param string[] $actorIds
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function setActorIds(array $actorIds = array())
    {
        // validation for constraint: array
        if ('' !== ($actorIdsArrayErrorMessage = self::validateActorIdsForArrayConstraintsFromSetActorIds($actorIds))) {
            throw new \InvalidArgumentException($actorIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($actorIdsLengthErrorMessage = self::validateActorIdsForLengthConstraintFromSetActorIds($actorIds))) {
            throw new \InvalidArgumentException($actorIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($actorIds) && !preg_match('/[a-zA-Z0-9]{18}/', $actorIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($actorIds, true)), __LINE__);
        }
        $this->actorIds = $actorIds;
        return $this;
    }
    /**
     * Add item to actorIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function addToActorIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The actorIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->actorIds[] = $item;
        return $this;
    }
    /**
     * Get entityId value
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->entityId;
    }
    /**
     * Set entityId value
     * @param string $entityId
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function setEntityId($entityId = null)
    {
        // validation for constraint: string
        if (!is_null($entityId) && !is_string($entityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityId, true), gettype($entityId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($entityId) && mb_strlen($entityId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($entityId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($entityId) && !preg_match('/[a-zA-Z0-9]{18}/', $entityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($entityId, true)), __LINE__);
        }
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Get errors value
     * @return \SFPartnerApi\v480\StructType\Error[]|null
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * This method is responsible for validating the values passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintsFromSetErrors(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processResultErrorsItem) {
            // validation for constraint: itemType
            if (!$processResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($processResultErrorsItem) ? get_class($processResultErrorsItem) : sprintf('%s(%s)', gettype($processResultErrorsItem), var_export($processResultErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errors property can only contain items of type \SFPartnerApi\v480\StructType\Error, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set errors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function setErrors(array $errors = array())
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new \InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->errors = $errors;
        return $this;
    }
    /**
     * Add item to errors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Error $item
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function addToErrors(\SFPartnerApi\v480\StructType\Error $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\Error) {
            throw new \InvalidArgumentException(sprintf('The errors property can only contain items of type \SFPartnerApi\v480\StructType\Error, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errors[] = $item;
        return $this;
    }
    /**
     * Get instanceId value
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->instanceId;
    }
    /**
     * Set instanceId value
     * @param string $instanceId
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function setInstanceId($instanceId = null)
    {
        // validation for constraint: string
        if (!is_null($instanceId) && !is_string($instanceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instanceId, true), gettype($instanceId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($instanceId) && mb_strlen($instanceId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($instanceId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($instanceId) && !preg_match('/[a-zA-Z0-9]{18}/', $instanceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($instanceId, true)), __LINE__);
        }
        $this->instanceId = $instanceId;
        return $this;
    }
    /**
     * Get instanceStatus value
     * @return string|null
     */
    public function getInstanceStatus()
    {
        return $this->instanceStatus;
    }
    /**
     * Set instanceStatus value
     * @param string $instanceStatus
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function setInstanceStatus($instanceStatus = null)
    {
        // validation for constraint: string
        if (!is_null($instanceStatus) && !is_string($instanceStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instanceStatus, true), gettype($instanceStatus)), __LINE__);
        }
        $this->instanceStatus = $instanceStatus;
        return $this;
    }
    /**
     * Get newWorkitemIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getNewWorkitemIds()
    {
        return isset($this->newWorkitemIds) ? $this->newWorkitemIds : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNewWorkitemIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNewWorkitemIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNewWorkitemIdsForArrayConstraintsFromSetNewWorkitemIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processResultNewWorkitemIdsItem) {
            // validation for constraint: itemType
            if (!is_string($processResultNewWorkitemIdsItem)) {
                $invalidValues[] = is_object($processResultNewWorkitemIdsItem) ? get_class($processResultNewWorkitemIdsItem) : sprintf('%s(%s)', gettype($processResultNewWorkitemIdsItem), var_export($processResultNewWorkitemIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The newWorkitemIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setNewWorkitemIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNewWorkitemIds method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNewWorkitemIdsForLengthConstraintFromSetNewWorkitemIds($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processResultNewWorkitemIdsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($processResultNewWorkitemIdsItem) !== 18) {
                $invalidValues[] = var_export($processResultNewWorkitemIdsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set newWorkitemIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $newWorkitemIds
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function setNewWorkitemIds(array $newWorkitemIds = array())
    {
        // validation for constraint: array
        if ('' !== ($newWorkitemIdsArrayErrorMessage = self::validateNewWorkitemIdsForArrayConstraintsFromSetNewWorkitemIds($newWorkitemIds))) {
            throw new \InvalidArgumentException($newWorkitemIdsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($newWorkitemIdsLengthErrorMessage = self::validateNewWorkitemIdsForLengthConstraintFromSetNewWorkitemIds($newWorkitemIds))) {
            throw new \InvalidArgumentException($newWorkitemIdsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($newWorkitemIds) && !preg_match('/[a-zA-Z0-9]{18}/', $newWorkitemIds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($newWorkitemIds, true)), __LINE__);
        }
        if (is_null($newWorkitemIds) || (is_array($newWorkitemIds) && empty($newWorkitemIds))) {
            unset($this->newWorkitemIds);
        } else {
            $this->newWorkitemIds = $newWorkitemIds;
        }
        return $this;
    }
    /**
     * Add item to newWorkitemIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function addToNewWorkitemIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The newWorkitemIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->newWorkitemIds[] = $item;
        return $this;
    }
    /**
     * Get success value
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \SFPartnerApi\v480\StructType\ProcessResult
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ProcessResult
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
