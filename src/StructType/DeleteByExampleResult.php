<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteByExampleResult StructType
 * @subpackage Structs
 */
class DeleteByExampleResult extends AbstractStructBase
{
    /**
     * The entity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $entity;
    /**
     * The errors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\Error[]
     */
    public $errors;
    /**
     * The rowCount
     * Meta information extracted from the WSDL
     * - nillable: false
     * @var int
     */
    public $rowCount;
    /**
     * The success
     * @var bool
     */
    public $success;
    /**
     * Constructor method for DeleteByExampleResult
     * @uses DeleteByExampleResult::setEntity()
     * @uses DeleteByExampleResult::setErrors()
     * @uses DeleteByExampleResult::setRowCount()
     * @uses DeleteByExampleResult::setSuccess()
     * @param \SFPartnerApi\v480\StructType\SObject $entity
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @param int $rowCount
     * @param bool $success
     */
    public function __construct(\SFPartnerApi\v480\StructType\SObject $entity = null, array $errors = array(), $rowCount = null, $success = null)
    {
        $this
            ->setEntity($entity)
            ->setErrors($errors)
            ->setRowCount($rowCount)
            ->setSuccess($success);
    }
    /**
     * Get entity value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getEntity()
    {
        return $this->entity;
    }
    /**
     * Set entity value
     * @param \SFPartnerApi\v480\StructType\SObject $entity
     * @return \SFPartnerApi\v480\StructType\DeleteByExampleResult
     */
    public function setEntity(\SFPartnerApi\v480\StructType\SObject $entity = null)
    {
        $this->entity = $entity;
        return $this;
    }
    /**
     * Get errors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\Error[]|null
     */
    public function getErrors()
    {
        return isset($this->errors) ? $this->errors : null;
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
        foreach ($values as $deleteByExampleResultErrorsItem) {
            // validation for constraint: itemType
            if (!$deleteByExampleResultErrorsItem instanceof \SFPartnerApi\v480\StructType\Error) {
                $invalidValues[] = is_object($deleteByExampleResultErrorsItem) ? get_class($deleteByExampleResultErrorsItem) : sprintf('%s(%s)', gettype($deleteByExampleResultErrorsItem), var_export($deleteByExampleResultErrorsItem, true));
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
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Error[] $errors
     * @return \SFPartnerApi\v480\StructType\DeleteByExampleResult
     */
    public function setErrors(array $errors = array())
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new \InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        if (is_null($errors) || (is_array($errors) && empty($errors))) {
            unset($this->errors);
        } else {
            $this->errors = $errors;
        }
        return $this;
    }
    /**
     * Add item to errors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\Error $item
     * @return \SFPartnerApi\v480\StructType\DeleteByExampleResult
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
     * Get rowCount value
     * @return int|null
     */
    public function getRowCount()
    {
        return $this->rowCount;
    }
    /**
     * Set rowCount value
     * @param int $rowCount
     * @return \SFPartnerApi\v480\StructType\DeleteByExampleResult
     */
    public function setRowCount($rowCount = null)
    {
        // validation for constraint: int
        if (!is_null($rowCount) && !(is_int($rowCount) || ctype_digit($rowCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rowCount, true), gettype($rowCount)), __LINE__);
        }
        $this->rowCount = $rowCount;
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
     * @return \SFPartnerApi\v480\StructType\DeleteByExampleResult
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
     * @return \SFPartnerApi\v480\StructType\DeleteByExampleResult
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
