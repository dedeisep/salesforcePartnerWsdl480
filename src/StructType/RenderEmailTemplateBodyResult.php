<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenderEmailTemplateBodyResult StructType
 * @subpackage Structs
 */
class RenderEmailTemplateBodyResult extends AbstractStructBase
{
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RenderEmailTemplateError[]
     */
    public $errors;
    /**
     * The mergedBody
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mergedBody;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for RenderEmailTemplateBodyResult
     * @uses RenderEmailTemplateBodyResult::setErrors()
     * @uses RenderEmailTemplateBodyResult::setMergedBody()
     * @uses RenderEmailTemplateBodyResult::setSuccess()
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateError[] $errors
     * @param string $mergedBody
     * @param bool $success
     */
    public function __construct(array $errors = array(), $mergedBody = null, $success = null)
    {
        $this
            ->setErrors($errors)
            ->setMergedBody($mergedBody)
            ->setSuccess($success);
    }
    /**
     * Get errors value
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateError[]|null
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
        foreach ($values as $renderEmailTemplateBodyResultErrorsItem) {
            // validation for constraint: itemType
            if (!$renderEmailTemplateBodyResultErrorsItem instanceof \SFPartnerApi\v480\StructType\RenderEmailTemplateError) {
                $invalidValues[] = is_object($renderEmailTemplateBodyResultErrorsItem) ? get_class($renderEmailTemplateBodyResultErrorsItem) : sprintf('%s(%s)', gettype($renderEmailTemplateBodyResultErrorsItem), var_export($renderEmailTemplateBodyResultErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errors property can only contain items of type \SFPartnerApi\v480\StructType\RenderEmailTemplateError, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set errors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateError[] $errors
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult
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
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateError $item
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult
     */
    public function addToErrors(\SFPartnerApi\v480\StructType\RenderEmailTemplateError $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RenderEmailTemplateError) {
            throw new \InvalidArgumentException(sprintf('The errors property can only contain items of type \SFPartnerApi\v480\StructType\RenderEmailTemplateError, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errors[] = $item;
        return $this;
    }
    /**
     * Get mergedBody value
     * @return string|null
     */
    public function getMergedBody()
    {
        return $this->mergedBody;
    }
    /**
     * Set mergedBody value
     * @param string $mergedBody
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult
     */
    public function setMergedBody($mergedBody = null)
    {
        // validation for constraint: string
        if (!is_null($mergedBody) && !is_string($mergedBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mergedBody, true), gettype($mergedBody)), __LINE__);
        }
        $this->mergedBody = $mergedBody;
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult
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
