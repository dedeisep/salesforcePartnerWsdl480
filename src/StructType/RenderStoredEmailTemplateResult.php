<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenderStoredEmailTemplateResult StructType
 * @subpackage Structs
 */
class RenderStoredEmailTemplateResult extends AbstractStructBase
{
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The renderedEmail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public $renderedEmail;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for RenderStoredEmailTemplateResult
     * @uses RenderStoredEmailTemplateResult::setErrors()
     * @uses RenderStoredEmailTemplateResult::setRenderedEmail()
     * @uses RenderStoredEmailTemplateResult::setSuccess()
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param \SFPartnerApi\v480\StructType\SingleEmailMessage $renderedEmail
     * @param bool $success
     */
    public function __construct(array $errors = array(), \SFPartnerApi\v480\StructType\SingleEmailMessage $renderedEmail = null, $success = null)
    {
        $this
            ->setErrors($errors)
            ->setRenderedEmail($renderedEmail)
            ->setSuccess($success);
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
        foreach ($values as $renderStoredEmailTemplateResultErrorsItem) {
            // validation for constraint: itemType
            if (!$renderStoredEmailTemplateResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($renderStoredEmailTemplateResultErrorsItem) ? get_class($renderStoredEmailTemplateResultErrorsItem) : sprintf('%s(%s)', gettype($renderStoredEmailTemplateResultErrorsItem), var_export($renderStoredEmailTemplateResultErrorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult
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
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult
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
     * Get renderedEmail value
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage|null
     */
    public function getRenderedEmail()
    {
        return $this->renderedEmail;
    }
    /**
     * Set renderedEmail value
     * @param \SFPartnerApi\v480\StructType\SingleEmailMessage $renderedEmail
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult
     */
    public function setRenderedEmail(\SFPartnerApi\v480\StructType\SingleEmailMessage $renderedEmail = null)
    {
        $this->renderedEmail = $renderedEmail;
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
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult
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
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult
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
