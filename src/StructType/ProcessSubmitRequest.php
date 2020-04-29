<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessSubmitRequest StructType
 * @subpackage Structs
 */
class ProcessSubmitRequest extends ProcessRequest
{
    /**
     * The objectId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $objectId;
    /**
     * The submitterId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $submitterId;
    /**
     * The processDefinitionNameOrId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $processDefinitionNameOrId;
    /**
     * The skipEntryCriteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $skipEntryCriteria;
    /**
     * Constructor method for ProcessSubmitRequest
     * @uses ProcessSubmitRequest::setObjectId()
     * @uses ProcessSubmitRequest::setSubmitterId()
     * @uses ProcessSubmitRequest::setProcessDefinitionNameOrId()
     * @uses ProcessSubmitRequest::setSkipEntryCriteria()
     * @param string $objectId
     * @param string $submitterId
     * @param string $processDefinitionNameOrId
     * @param bool $skipEntryCriteria
     */
    public function __construct($objectId = null, $submitterId = null, $processDefinitionNameOrId = null, $skipEntryCriteria = null)
    {
        $this
            ->setObjectId($objectId)
            ->setSubmitterId($submitterId)
            ->setProcessDefinitionNameOrId($processDefinitionNameOrId)
            ->setSkipEntryCriteria($skipEntryCriteria);
    }
    /**
     * Get objectId value
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->objectId;
    }
    /**
     * Set objectId value
     * @param string $objectId
     * @return \SFPartnerApi\v480\StructType\ProcessSubmitRequest
     */
    public function setObjectId($objectId = null)
    {
        // validation for constraint: string
        if (!is_null($objectId) && !is_string($objectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectId, true), gettype($objectId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($objectId) && mb_strlen($objectId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($objectId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($objectId) && !preg_match('/[a-zA-Z0-9]{18}/', $objectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($objectId, true)), __LINE__);
        }
        $this->objectId = $objectId;
        return $this;
    }
    /**
     * Get submitterId value
     * @return string|null
     */
    public function getSubmitterId()
    {
        return $this->submitterId;
    }
    /**
     * Set submitterId value
     * @param string $submitterId
     * @return \SFPartnerApi\v480\StructType\ProcessSubmitRequest
     */
    public function setSubmitterId($submitterId = null)
    {
        // validation for constraint: string
        if (!is_null($submitterId) && !is_string($submitterId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($submitterId, true), gettype($submitterId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($submitterId) && mb_strlen($submitterId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($submitterId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($submitterId) && !preg_match('/[a-zA-Z0-9]{18}/', $submitterId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($submitterId, true)), __LINE__);
        }
        $this->submitterId = $submitterId;
        return $this;
    }
    /**
     * Get processDefinitionNameOrId value
     * @return string|null
     */
    public function getProcessDefinitionNameOrId()
    {
        return $this->processDefinitionNameOrId;
    }
    /**
     * Set processDefinitionNameOrId value
     * @param string $processDefinitionNameOrId
     * @return \SFPartnerApi\v480\StructType\ProcessSubmitRequest
     */
    public function setProcessDefinitionNameOrId($processDefinitionNameOrId = null)
    {
        // validation for constraint: string
        if (!is_null($processDefinitionNameOrId) && !is_string($processDefinitionNameOrId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processDefinitionNameOrId, true), gettype($processDefinitionNameOrId)), __LINE__);
        }
        $this->processDefinitionNameOrId = $processDefinitionNameOrId;
        return $this;
    }
    /**
     * Get skipEntryCriteria value
     * @return bool|null
     */
    public function getSkipEntryCriteria()
    {
        return $this->skipEntryCriteria;
    }
    /**
     * Set skipEntryCriteria value
     * @param bool $skipEntryCriteria
     * @return \SFPartnerApi\v480\StructType\ProcessSubmitRequest
     */
    public function setSkipEntryCriteria($skipEntryCriteria = null)
    {
        // validation for constraint: boolean
        if (!is_null($skipEntryCriteria) && !is_bool($skipEntryCriteria)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skipEntryCriteria, true), gettype($skipEntryCriteria)), __LINE__);
        }
        $this->skipEntryCriteria = $skipEntryCriteria;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ProcessSubmitRequest
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
