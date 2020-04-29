<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuickActionTemplateResult StructType
 * @subpackage Structs
 */
class QuickActionTemplateResult extends AbstractStructBase
{
    /**
     * The contextId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contextId;
    /**
     * The defaultValueFormulas
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $defaultValueFormulas;
    /**
     * The defaultValues
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $defaultValues;
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for QuickActionTemplateResult
     * @uses QuickActionTemplateResult::setContextId()
     * @uses QuickActionTemplateResult::setDefaultValueFormulas()
     * @uses QuickActionTemplateResult::setDefaultValues()
     * @uses QuickActionTemplateResult::setErrors()
     * @uses QuickActionTemplateResult::setSuccess()
     * @param string $contextId
     * @param \SFPartnerApi\v480\StructType\SObject $defaultValueFormulas
     * @param \SFPartnerApi\v480\StructType\SObject $defaultValues
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param bool $success
     */
    public function __construct($contextId = null, \SFPartnerApi\v480\StructType\SObject $defaultValueFormulas = null, \SFPartnerApi\v480\StructType\SObject $defaultValues = null, array $errors = array(), $success = null)
    {
        $this
            ->setContextId($contextId)
            ->setDefaultValueFormulas($defaultValueFormulas)
            ->setDefaultValues($defaultValues)
            ->setErrors($errors)
            ->setSuccess($success);
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
     * @return \SFPartnerApi\v480\StructType\QuickActionTemplateResult
     */
    public function setContextId($contextId = null)
    {
        // validation for constraint: string
        if (!is_null($contextId) && !is_string($contextId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextId, true), gettype($contextId)), __LINE__);
        }
        $this->contextId = $contextId;
        return $this;
    }
    /**
     * Get defaultValueFormulas value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getDefaultValueFormulas()
    {
        return $this->defaultValueFormulas;
    }
    /**
     * Set defaultValueFormulas value
     * @param \SFPartnerApi\v480\StructType\SObject $defaultValueFormulas
     * @return \SFPartnerApi\v480\StructType\QuickActionTemplateResult
     */
    public function setDefaultValueFormulas(\SFPartnerApi\v480\StructType\SObject $defaultValueFormulas = null)
    {
        $this->defaultValueFormulas = $defaultValueFormulas;
        return $this;
    }
    /**
     * Get defaultValues value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getDefaultValues()
    {
        return $this->defaultValues;
    }
    /**
     * Set defaultValues value
     * @param \SFPartnerApi\v480\StructType\SObject $defaultValues
     * @return \SFPartnerApi\v480\StructType\QuickActionTemplateResult
     */
    public function setDefaultValues(\SFPartnerApi\v480\StructType\SObject $defaultValues = null)
    {
        $this->defaultValues = $defaultValues;
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
        foreach ($values as $quickActionTemplateResultErrorsItem) {
            // validation for constraint: itemType
            if (!$quickActionTemplateResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($quickActionTemplateResultErrorsItem) ? get_class($quickActionTemplateResultErrorsItem) : sprintf('%s(%s)', gettype($quickActionTemplateResultErrorsItem), var_export($quickActionTemplateResultErrorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\QuickActionTemplateResult
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
     * @return \SFPartnerApi\v480\StructType\QuickActionTemplateResult
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
     * @return \SFPartnerApi\v480\StructType\QuickActionTemplateResult
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
     * @return \SFPartnerApi\v480\StructType\QuickActionTemplateResult
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
