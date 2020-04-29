<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeSoftphoneLayoutResult StructType
 * @subpackage Structs
 */
class DescribeSoftphoneLayoutResult extends AbstractStructBase
{
    /**
     * The callTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType[]
     */
    public $callTypes;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for DescribeSoftphoneLayoutResult
     * @uses DescribeSoftphoneLayoutResult::setCallTypes()
     * @uses DescribeSoftphoneLayoutResult::setId()
     * @uses DescribeSoftphoneLayoutResult::setName()
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType[] $callTypes
     * @param string $id
     * @param string $name
     */
    public function __construct(array $callTypes = array(), $id = null, $name = null)
    {
        $this
            ->setCallTypes($callTypes)
            ->setId($id)
            ->setName($name);
    }
    /**
     * Get callTypes value
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType[]
     */
    public function getCallTypes()
    {
        return $this->callTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setCallTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCallTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCallTypesForArrayConstraintsFromSetCallTypes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeSoftphoneLayoutResultCallTypesItem) {
            // validation for constraint: itemType
            if (!$describeSoftphoneLayoutResultCallTypesItem instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType) {
                $invalidValues[] = is_object($describeSoftphoneLayoutResultCallTypesItem) ? get_class($describeSoftphoneLayoutResultCallTypesItem) : sprintf('%s(%s)', gettype($describeSoftphoneLayoutResultCallTypesItem), var_export($describeSoftphoneLayoutResultCallTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The callTypes property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set callTypes value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType[] $callTypes
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutResult
     */
    public function setCallTypes(array $callTypes = array())
    {
        // validation for constraint: array
        if ('' !== ($callTypesArrayErrorMessage = self::validateCallTypesForArrayConstraintsFromSetCallTypes($callTypes))) {
            throw new \InvalidArgumentException($callTypesArrayErrorMessage, __LINE__);
        }
        $this->callTypes = $callTypes;
        return $this;
    }
    /**
     * Add item to callTypes value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType $item
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutResult
     */
    public function addToCallTypes(\SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType) {
            throw new \InvalidArgumentException(sprintf('The callTypes property can only contain items of type \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutCallType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->callTypes[] = $item;
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
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutResult
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutResult
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutResult
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
