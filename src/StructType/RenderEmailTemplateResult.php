<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenderEmailTemplateResult StructType
 * @subpackage Structs
 */
class RenderEmailTemplateResult extends AbstractStructBase
{
    /**
     * The bodyResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult[]
     */
    public $bodyResults;
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
     * Constructor method for RenderEmailTemplateResult
     * @uses RenderEmailTemplateResult::setBodyResults()
     * @uses RenderEmailTemplateResult::setErrors()
     * @uses RenderEmailTemplateResult::setSuccess()
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult[] $bodyResults
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param bool $success
     */
    public function __construct(array $bodyResults = array(), array $errors = array(), $success = null)
    {
        $this
            ->setBodyResults($bodyResults)
            ->setErrors($errors)
            ->setSuccess($success);
    }
    /**
     * Get bodyResults value
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult[]|null
     */
    public function getBodyResults()
    {
        return $this->bodyResults;
    }
    /**
     * This method is responsible for validating the values passed to the setBodyResults method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBodyResults method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBodyResultsForArrayConstraintsFromSetBodyResults(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $renderEmailTemplateResultBodyResultsItem) {
            // validation for constraint: itemType
            if (!$renderEmailTemplateResultBodyResultsItem instanceof \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult) {
                $invalidValues[] = is_object($renderEmailTemplateResultBodyResultsItem) ? get_class($renderEmailTemplateResultBodyResultsItem) : sprintf('%s(%s)', gettype($renderEmailTemplateResultBodyResultsItem), var_export($renderEmailTemplateResultBodyResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bodyResults property can only contain items of type \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set bodyResults value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult[] $bodyResults
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateResult
     */
    public function setBodyResults(array $bodyResults = array())
    {
        // validation for constraint: array
        if ('' !== ($bodyResultsArrayErrorMessage = self::validateBodyResultsForArrayConstraintsFromSetBodyResults($bodyResults))) {
            throw new \InvalidArgumentException($bodyResultsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($bodyResults) && count($bodyResults) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($bodyResults)), __LINE__);
        }
        $this->bodyResults = $bodyResults;
        return $this;
    }
    /**
     * Add item to bodyResults value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult $item
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateResult
     */
    public function addToBodyResults(\SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult) {
            throw new \InvalidArgumentException(sprintf('The bodyResults property can only contain items of type \SFPartnerApi\v480\StructType\RenderEmailTemplateBodyResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->bodyResults) && count($this->bodyResults) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->bodyResults)), __LINE__);
        }
        $this->bodyResults[] = $item;
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
        foreach ($values as $renderEmailTemplateResultErrorsItem) {
            // validation for constraint: itemType
            if (!$renderEmailTemplateResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($renderEmailTemplateResultErrorsItem) ? get_class($renderEmailTemplateResultErrorsItem) : sprintf('%s(%s)', gettype($renderEmailTemplateResultErrorsItem), var_export($renderEmailTemplateResultErrorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateResult
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateResult
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateResult
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateResult
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
