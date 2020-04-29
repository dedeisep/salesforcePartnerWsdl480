<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecordTypeMapping StructType
 * @subpackage Structs
 */
class RecordTypeMapping extends AbstractStructBase
{
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The available
     * @var bool
     */
    public $available;
    /**
     * The defaultRecordTypeMapping
     * @var bool
     */
    public $defaultRecordTypeMapping;
    /**
     * The developerName
     * @var string
     */
    public $developerName;
    /**
     * The layoutId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $layoutId;
    /**
     * The master
     * @var bool
     */
    public $master;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The picklistsForRecordType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\PicklistForRecordType[]
     */
    public $picklistsForRecordType;
    /**
     * The recordTypeId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $recordTypeId;
    /**
     * Constructor method for RecordTypeMapping
     * @uses RecordTypeMapping::setActive()
     * @uses RecordTypeMapping::setAvailable()
     * @uses RecordTypeMapping::setDefaultRecordTypeMapping()
     * @uses RecordTypeMapping::setDeveloperName()
     * @uses RecordTypeMapping::setLayoutId()
     * @uses RecordTypeMapping::setMaster()
     * @uses RecordTypeMapping::setName()
     * @uses RecordTypeMapping::setPicklistsForRecordType()
     * @uses RecordTypeMapping::setRecordTypeId()
     * @param bool $active
     * @param bool $available
     * @param bool $defaultRecordTypeMapping
     * @param string $developerName
     * @param string $layoutId
     * @param bool $master
     * @param string $name
     * @param \SFPartnerApi\v480\StructType\PicklistForRecordType[] $picklistsForRecordType
     * @param string $recordTypeId
     */
    public function __construct($active = null, $available = null, $defaultRecordTypeMapping = null, $developerName = null, $layoutId = null, $master = null, $name = null, array $picklistsForRecordType = array(), $recordTypeId = null)
    {
        $this
            ->setActive($active)
            ->setAvailable($available)
            ->setDefaultRecordTypeMapping($defaultRecordTypeMapping)
            ->setDeveloperName($developerName)
            ->setLayoutId($layoutId)
            ->setMaster($master)
            ->setName($name)
            ->setPicklistsForRecordType($picklistsForRecordType)
            ->setRecordTypeId($recordTypeId);
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get available value
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->available;
    }
    /**
     * Set available value
     * @param bool $available
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function setAvailable($available = null)
    {
        // validation for constraint: boolean
        if (!is_null($available) && !is_bool($available)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($available, true), gettype($available)), __LINE__);
        }
        $this->available = $available;
        return $this;
    }
    /**
     * Get defaultRecordTypeMapping value
     * @return bool|null
     */
    public function getDefaultRecordTypeMapping()
    {
        return $this->defaultRecordTypeMapping;
    }
    /**
     * Set defaultRecordTypeMapping value
     * @param bool $defaultRecordTypeMapping
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function setDefaultRecordTypeMapping($defaultRecordTypeMapping = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultRecordTypeMapping) && !is_bool($defaultRecordTypeMapping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultRecordTypeMapping, true), gettype($defaultRecordTypeMapping)), __LINE__);
        }
        $this->defaultRecordTypeMapping = $defaultRecordTypeMapping;
        return $this;
    }
    /**
     * Get developerName value
     * @return string|null
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }
    /**
     * Set developerName value
     * @param string $developerName
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function setDeveloperName($developerName = null)
    {
        // validation for constraint: string
        if (!is_null($developerName) && !is_string($developerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($developerName, true), gettype($developerName)), __LINE__);
        }
        $this->developerName = $developerName;
        return $this;
    }
    /**
     * Get layoutId value
     * @return string|null
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }
    /**
     * Set layoutId value
     * @param string $layoutId
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function setLayoutId($layoutId = null)
    {
        // validation for constraint: string
        if (!is_null($layoutId) && !is_string($layoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($layoutId, true), gettype($layoutId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($layoutId) && mb_strlen($layoutId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($layoutId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($layoutId) && !preg_match('/[a-zA-Z0-9]{18}/', $layoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($layoutId, true)), __LINE__);
        }
        $this->layoutId = $layoutId;
        return $this;
    }
    /**
     * Get master value
     * @return bool|null
     */
    public function getMaster()
    {
        return $this->master;
    }
    /**
     * Set master value
     * @param bool $master
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function setMaster($master = null)
    {
        // validation for constraint: boolean
        if (!is_null($master) && !is_bool($master)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($master, true), gettype($master)), __LINE__);
        }
        $this->master = $master;
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
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
     * Get picklistsForRecordType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\PicklistForRecordType[]|null
     */
    public function getPicklistsForRecordType()
    {
        return isset($this->picklistsForRecordType) ? $this->picklistsForRecordType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPicklistsForRecordType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicklistsForRecordType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePicklistsForRecordTypeForArrayConstraintsFromSetPicklistsForRecordType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $recordTypeMappingPicklistsForRecordTypeItem) {
            // validation for constraint: itemType
            if (!$recordTypeMappingPicklistsForRecordTypeItem instanceof \SFPartnerApi\v480\StructType\PicklistForRecordType) {
                $invalidValues[] = is_object($recordTypeMappingPicklistsForRecordTypeItem) ? get_class($recordTypeMappingPicklistsForRecordTypeItem) : sprintf('%s(%s)', gettype($recordTypeMappingPicklistsForRecordTypeItem), var_export($recordTypeMappingPicklistsForRecordTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The picklistsForRecordType property can only contain items of type \SFPartnerApi\v480\StructType\PicklistForRecordType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set picklistsForRecordType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PicklistForRecordType[] $picklistsForRecordType
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function setPicklistsForRecordType(array $picklistsForRecordType = array())
    {
        // validation for constraint: array
        if ('' !== ($picklistsForRecordTypeArrayErrorMessage = self::validatePicklistsForRecordTypeForArrayConstraintsFromSetPicklistsForRecordType($picklistsForRecordType))) {
            throw new \InvalidArgumentException($picklistsForRecordTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($picklistsForRecordType) || (is_array($picklistsForRecordType) && empty($picklistsForRecordType))) {
            unset($this->picklistsForRecordType);
        } else {
            $this->picklistsForRecordType = $picklistsForRecordType;
        }
        return $this;
    }
    /**
     * Add item to picklistsForRecordType value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PicklistForRecordType $item
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function addToPicklistsForRecordType(\SFPartnerApi\v480\StructType\PicklistForRecordType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\PicklistForRecordType) {
            throw new \InvalidArgumentException(sprintf('The picklistsForRecordType property can only contain items of type \SFPartnerApi\v480\StructType\PicklistForRecordType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->picklistsForRecordType[] = $item;
        return $this;
    }
    /**
     * Get recordTypeId value
     * @return string|null
     */
    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }
    /**
     * Set recordTypeId value
     * @param string $recordTypeId
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
     */
    public function setRecordTypeId($recordTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($recordTypeId) && !is_string($recordTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordTypeId, true), gettype($recordTypeId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($recordTypeId) && mb_strlen($recordTypeId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($recordTypeId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($recordTypeId) && !preg_match('/[a-zA-Z0-9]{18}/', $recordTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($recordTypeId, true)), __LINE__);
        }
        $this->recordTypeId = $recordTypeId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RecordTypeMapping
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
