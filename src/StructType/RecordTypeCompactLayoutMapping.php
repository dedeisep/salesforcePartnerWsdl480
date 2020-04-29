<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecordTypeCompactLayoutMapping StructType
 * @subpackage Structs
 */
class RecordTypeCompactLayoutMapping extends AbstractStructBase
{
    /**
     * The available
     * @var bool
     */
    public $available;
    /**
     * The compactLayoutId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $compactLayoutId;
    /**
     * The compactLayoutName
     * @var string
     */
    public $compactLayoutName;
    /**
     * The recordTypeId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $recordTypeId;
    /**
     * The recordTypeName
     * @var string
     */
    public $recordTypeName;
    /**
     * Constructor method for RecordTypeCompactLayoutMapping
     * @uses RecordTypeCompactLayoutMapping::setAvailable()
     * @uses RecordTypeCompactLayoutMapping::setCompactLayoutId()
     * @uses RecordTypeCompactLayoutMapping::setCompactLayoutName()
     * @uses RecordTypeCompactLayoutMapping::setRecordTypeId()
     * @uses RecordTypeCompactLayoutMapping::setRecordTypeName()
     * @param bool $available
     * @param string $compactLayoutId
     * @param string $compactLayoutName
     * @param string $recordTypeId
     * @param string $recordTypeName
     */
    public function __construct($available = null, $compactLayoutId = null, $compactLayoutName = null, $recordTypeId = null, $recordTypeName = null)
    {
        $this
            ->setAvailable($available)
            ->setCompactLayoutId($compactLayoutId)
            ->setCompactLayoutName($compactLayoutName)
            ->setRecordTypeId($recordTypeId)
            ->setRecordTypeName($recordTypeName);
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping
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
     * Get compactLayoutId value
     * @return string|null
     */
    public function getCompactLayoutId()
    {
        return $this->compactLayoutId;
    }
    /**
     * Set compactLayoutId value
     * @param string $compactLayoutId
     * @return \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping
     */
    public function setCompactLayoutId($compactLayoutId = null)
    {
        // validation for constraint: string
        if (!is_null($compactLayoutId) && !is_string($compactLayoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compactLayoutId, true), gettype($compactLayoutId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($compactLayoutId) && mb_strlen($compactLayoutId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($compactLayoutId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($compactLayoutId) && !preg_match('/[a-zA-Z0-9]{18}/', $compactLayoutId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($compactLayoutId, true)), __LINE__);
        }
        $this->compactLayoutId = $compactLayoutId;
        return $this;
    }
    /**
     * Get compactLayoutName value
     * @return string|null
     */
    public function getCompactLayoutName()
    {
        return $this->compactLayoutName;
    }
    /**
     * Set compactLayoutName value
     * @param string $compactLayoutName
     * @return \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping
     */
    public function setCompactLayoutName($compactLayoutName = null)
    {
        // validation for constraint: string
        if (!is_null($compactLayoutName) && !is_string($compactLayoutName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compactLayoutName, true), gettype($compactLayoutName)), __LINE__);
        }
        $this->compactLayoutName = $compactLayoutName;
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
     * @return \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping
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
     * Get recordTypeName value
     * @return string|null
     */
    public function getRecordTypeName()
    {
        return $this->recordTypeName;
    }
    /**
     * Set recordTypeName value
     * @param string $recordTypeName
     * @return \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping
     */
    public function setRecordTypeName($recordTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($recordTypeName) && !is_string($recordTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordTypeName, true), gettype($recordTypeName)), __LINE__);
        }
        $this->recordTypeName = $recordTypeName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RecordTypeCompactLayoutMapping
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
