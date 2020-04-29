<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecordTypeInfo StructType
 * @subpackage Structs
 */
class RecordTypeInfo extends AbstractStructBase
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
     * Constructor method for RecordTypeInfo
     * @uses RecordTypeInfo::setActive()
     * @uses RecordTypeInfo::setAvailable()
     * @uses RecordTypeInfo::setDefaultRecordTypeMapping()
     * @uses RecordTypeInfo::setDeveloperName()
     * @uses RecordTypeInfo::setMaster()
     * @uses RecordTypeInfo::setName()
     * @uses RecordTypeInfo::setRecordTypeId()
     * @param bool $active
     * @param bool $available
     * @param bool $defaultRecordTypeMapping
     * @param string $developerName
     * @param bool $master
     * @param string $name
     * @param string $recordTypeId
     */
    public function __construct($active = null, $available = null, $defaultRecordTypeMapping = null, $developerName = null, $master = null, $name = null, $recordTypeId = null)
    {
        $this
            ->setActive($active)
            ->setAvailable($available)
            ->setDefaultRecordTypeMapping($defaultRecordTypeMapping)
            ->setDeveloperName($developerName)
            ->setMaster($master)
            ->setName($name)
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeInfo
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
