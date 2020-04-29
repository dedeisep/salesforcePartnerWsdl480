<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UndeleteResult StructType
 * @subpackage Structs
 */
class UndeleteResult extends AbstractStructBase
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
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for UndeleteResult
     * @uses UndeleteResult::setErrors()
     * @uses UndeleteResult::setId()
     * @uses UndeleteResult::setSuccess()
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param string $id
     * @param bool $success
     */
    public function __construct(array $errors = array(), $id = null, $success = null)
    {
        $this
            ->setErrors($errors)
            ->setId($id)
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
        foreach ($values as $undeleteResultErrorsItem) {
            // validation for constraint: itemType
            if (!$undeleteResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($undeleteResultErrorsItem) ? get_class($undeleteResultErrorsItem) : sprintf('%s(%s)', gettype($undeleteResultErrorsItem), var_export($undeleteResultErrorsItem, true));
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
     * @return \SFPartnerApi\v480\StructType\UndeleteResult
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
     * @return \SFPartnerApi\v480\StructType\UndeleteResult
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \SFPartnerApi\v480\StructType\UndeleteResult
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($id) && mb_strlen($id) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($id)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($id) && !preg_match('/[a-zA-Z0-9]{18}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
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
     * @return \SFPartnerApi\v480\StructType\UndeleteResult
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
     * @return \SFPartnerApi\v480\StructType\UndeleteResult
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
