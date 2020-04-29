<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sObject StructType
 * @subpackage Structs
 */
class SObject extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The fieldsToNull
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $fieldsToNull;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $Id;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for sObject
     * @uses SObject::setType()
     * @uses SObject::setFieldsToNull()
     * @uses SObject::setId()
     * @uses SObject::setAny()
     * @param string $type
     * @param string[] $fieldsToNull
     * @param string $id
     * @param \DOMDocument $any
     */
    public function __construct($type = null, array $fieldsToNull = array(), $id = null, \DOMDocument $any = null)
    {
        $this
            ->setType($type)
            ->setFieldsToNull($fieldsToNull)
            ->setId($id)
            ->setAny($any);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\SObject
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get fieldsToNull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getFieldsToNull()
    {
        return isset($this->fieldsToNull) ? $this->fieldsToNull : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFieldsToNull method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFieldsToNull method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldsToNullForArrayConstraintsFromSetFieldsToNull(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sObjectFieldsToNullItem) {
            // validation for constraint: itemType
            if (!is_string($sObjectFieldsToNullItem)) {
                $invalidValues[] = is_object($sObjectFieldsToNullItem) ? get_class($sObjectFieldsToNullItem) : sprintf('%s(%s)', gettype($sObjectFieldsToNullItem), var_export($sObjectFieldsToNullItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fieldsToNull property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fieldsToNull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $fieldsToNull
     * @return \SFPartnerApi\v480\StructType\SObject
     */
    public function setFieldsToNull(array $fieldsToNull = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldsToNullArrayErrorMessage = self::validateFieldsToNullForArrayConstraintsFromSetFieldsToNull($fieldsToNull))) {
            throw new \InvalidArgumentException($fieldsToNullArrayErrorMessage, __LINE__);
        }
        if (is_null($fieldsToNull) || (is_array($fieldsToNull) && empty($fieldsToNull))) {
            unset($this->fieldsToNull);
        } else {
            $this->fieldsToNull = $fieldsToNull;
        }
        return $this;
    }
    /**
     * Add item to fieldsToNull value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\SObject
     */
    public function addToFieldsToNull($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The fieldsToNull property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fieldsToNull[] = $item;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \SFPartnerApi\v480\StructType\SObject
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
        $this->Id = $id;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \SFPartnerApi\v480\StructType\SObject
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SObject
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
