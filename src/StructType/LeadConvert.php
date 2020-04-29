<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeadConvert StructType
 * @subpackage Structs
 */
class LeadConvert extends AbstractStructBase
{
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $accountId;
    /**
     * The accountRecord
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $accountRecord;
    /**
     * The bypassAccountDedupeCheck
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $bypassAccountDedupeCheck;
    /**
     * The bypassContactDedupeCheck
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $bypassContactDedupeCheck;
    /**
     * The contactId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $contactId;
    /**
     * The contactRecord
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $contactRecord;
    /**
     * The convertedStatus
     * @var string
     */
    public $convertedStatus;
    /**
     * The doNotCreateOpportunity
     * @var bool
     */
    public $doNotCreateOpportunity;
    /**
     * The leadId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $leadId;
    /**
     * The opportunityId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $opportunityId;
    /**
     * The opportunityName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $opportunityName;
    /**
     * The opportunityRecord
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\SObject
     */
    public $opportunityRecord;
    /**
     * The overwriteLeadSource
     * @var bool
     */
    public $overwriteLeadSource;
    /**
     * The ownerId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $ownerId;
    /**
     * The sendNotificationEmail
     * @var bool
     */
    public $sendNotificationEmail;
    /**
     * Constructor method for LeadConvert
     * @uses LeadConvert::setAccountId()
     * @uses LeadConvert::setAccountRecord()
     * @uses LeadConvert::setBypassAccountDedupeCheck()
     * @uses LeadConvert::setBypassContactDedupeCheck()
     * @uses LeadConvert::setContactId()
     * @uses LeadConvert::setContactRecord()
     * @uses LeadConvert::setConvertedStatus()
     * @uses LeadConvert::setDoNotCreateOpportunity()
     * @uses LeadConvert::setLeadId()
     * @uses LeadConvert::setOpportunityId()
     * @uses LeadConvert::setOpportunityName()
     * @uses LeadConvert::setOpportunityRecord()
     * @uses LeadConvert::setOverwriteLeadSource()
     * @uses LeadConvert::setOwnerId()
     * @uses LeadConvert::setSendNotificationEmail()
     * @param string $accountId
     * @param \SFPartnerApi\v480\StructType\SObject $accountRecord
     * @param bool $bypassAccountDedupeCheck
     * @param bool $bypassContactDedupeCheck
     * @param string $contactId
     * @param \SFPartnerApi\v480\StructType\SObject $contactRecord
     * @param string $convertedStatus
     * @param bool $doNotCreateOpportunity
     * @param string $leadId
     * @param string $opportunityId
     * @param string $opportunityName
     * @param \SFPartnerApi\v480\StructType\SObject $opportunityRecord
     * @param bool $overwriteLeadSource
     * @param string $ownerId
     * @param bool $sendNotificationEmail
     */
    public function __construct($accountId = null, \SFPartnerApi\v480\StructType\SObject $accountRecord = null, $bypassAccountDedupeCheck = null, $bypassContactDedupeCheck = null, $contactId = null, \SFPartnerApi\v480\StructType\SObject $contactRecord = null, $convertedStatus = null, $doNotCreateOpportunity = null, $leadId = null, $opportunityId = null, $opportunityName = null, \SFPartnerApi\v480\StructType\SObject $opportunityRecord = null, $overwriteLeadSource = null, $ownerId = null, $sendNotificationEmail = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAccountRecord($accountRecord)
            ->setBypassAccountDedupeCheck($bypassAccountDedupeCheck)
            ->setBypassContactDedupeCheck($bypassContactDedupeCheck)
            ->setContactId($contactId)
            ->setContactRecord($contactRecord)
            ->setConvertedStatus($convertedStatus)
            ->setDoNotCreateOpportunity($doNotCreateOpportunity)
            ->setLeadId($leadId)
            ->setOpportunityId($opportunityId)
            ->setOpportunityName($opportunityName)
            ->setOpportunityRecord($opportunityRecord)
            ->setOverwriteLeadSource($overwriteLeadSource)
            ->setOwnerId($ownerId)
            ->setSendNotificationEmail($sendNotificationEmail);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setAccountId($accountId = null)
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($accountId) && mb_strlen($accountId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($accountId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($accountId) && !preg_match('/[a-zA-Z0-9]{18}/', $accountId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($accountId, true)), __LINE__);
        }
        $this->accountId = $accountId;
        return $this;
    }
    /**
     * Get accountRecord value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getAccountRecord()
    {
        return $this->accountRecord;
    }
    /**
     * Set accountRecord value
     * @param \SFPartnerApi\v480\StructType\SObject $accountRecord
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setAccountRecord(\SFPartnerApi\v480\StructType\SObject $accountRecord = null)
    {
        $this->accountRecord = $accountRecord;
        return $this;
    }
    /**
     * Get bypassAccountDedupeCheck value
     * @return bool|null
     */
    public function getBypassAccountDedupeCheck()
    {
        return $this->bypassAccountDedupeCheck;
    }
    /**
     * Set bypassAccountDedupeCheck value
     * @param bool $bypassAccountDedupeCheck
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setBypassAccountDedupeCheck($bypassAccountDedupeCheck = null)
    {
        // validation for constraint: boolean
        if (!is_null($bypassAccountDedupeCheck) && !is_bool($bypassAccountDedupeCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bypassAccountDedupeCheck, true), gettype($bypassAccountDedupeCheck)), __LINE__);
        }
        $this->bypassAccountDedupeCheck = $bypassAccountDedupeCheck;
        return $this;
    }
    /**
     * Get bypassContactDedupeCheck value
     * @return bool|null
     */
    public function getBypassContactDedupeCheck()
    {
        return $this->bypassContactDedupeCheck;
    }
    /**
     * Set bypassContactDedupeCheck value
     * @param bool $bypassContactDedupeCheck
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setBypassContactDedupeCheck($bypassContactDedupeCheck = null)
    {
        // validation for constraint: boolean
        if (!is_null($bypassContactDedupeCheck) && !is_bool($bypassContactDedupeCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bypassContactDedupeCheck, true), gettype($bypassContactDedupeCheck)), __LINE__);
        }
        $this->bypassContactDedupeCheck = $bypassContactDedupeCheck;
        return $this;
    }
    /**
     * Get contactId value
     * @return string|null
     */
    public function getContactId()
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param string $contactId
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setContactId($contactId = null)
    {
        // validation for constraint: string
        if (!is_null($contactId) && !is_string($contactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($contactId) && mb_strlen($contactId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($contactId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($contactId) && !preg_match('/[a-zA-Z0-9]{18}/', $contactId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($contactId, true)), __LINE__);
        }
        $this->contactId = $contactId;
        return $this;
    }
    /**
     * Get contactRecord value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getContactRecord()
    {
        return $this->contactRecord;
    }
    /**
     * Set contactRecord value
     * @param \SFPartnerApi\v480\StructType\SObject $contactRecord
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setContactRecord(\SFPartnerApi\v480\StructType\SObject $contactRecord = null)
    {
        $this->contactRecord = $contactRecord;
        return $this;
    }
    /**
     * Get convertedStatus value
     * @return string|null
     */
    public function getConvertedStatus()
    {
        return $this->convertedStatus;
    }
    /**
     * Set convertedStatus value
     * @param string $convertedStatus
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setConvertedStatus($convertedStatus = null)
    {
        // validation for constraint: string
        if (!is_null($convertedStatus) && !is_string($convertedStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($convertedStatus, true), gettype($convertedStatus)), __LINE__);
        }
        $this->convertedStatus = $convertedStatus;
        return $this;
    }
    /**
     * Get doNotCreateOpportunity value
     * @return bool|null
     */
    public function getDoNotCreateOpportunity()
    {
        return $this->doNotCreateOpportunity;
    }
    /**
     * Set doNotCreateOpportunity value
     * @param bool $doNotCreateOpportunity
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setDoNotCreateOpportunity($doNotCreateOpportunity = null)
    {
        // validation for constraint: boolean
        if (!is_null($doNotCreateOpportunity) && !is_bool($doNotCreateOpportunity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doNotCreateOpportunity, true), gettype($doNotCreateOpportunity)), __LINE__);
        }
        $this->doNotCreateOpportunity = $doNotCreateOpportunity;
        return $this;
    }
    /**
     * Get leadId value
     * @return string|null
     */
    public function getLeadId()
    {
        return $this->leadId;
    }
    /**
     * Set leadId value
     * @param string $leadId
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setLeadId($leadId = null)
    {
        // validation for constraint: string
        if (!is_null($leadId) && !is_string($leadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leadId, true), gettype($leadId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($leadId) && mb_strlen($leadId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($leadId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($leadId) && !preg_match('/[a-zA-Z0-9]{18}/', $leadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($leadId, true)), __LINE__);
        }
        $this->leadId = $leadId;
        return $this;
    }
    /**
     * Get opportunityId value
     * @return string|null
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }
    /**
     * Set opportunityId value
     * @param string $opportunityId
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setOpportunityId($opportunityId = null)
    {
        // validation for constraint: string
        if (!is_null($opportunityId) && !is_string($opportunityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opportunityId, true), gettype($opportunityId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($opportunityId) && mb_strlen($opportunityId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($opportunityId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($opportunityId) && !preg_match('/[a-zA-Z0-9]{18}/', $opportunityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($opportunityId, true)), __LINE__);
        }
        $this->opportunityId = $opportunityId;
        return $this;
    }
    /**
     * Get opportunityName value
     * @return string|null
     */
    public function getOpportunityName()
    {
        return $this->opportunityName;
    }
    /**
     * Set opportunityName value
     * @param string $opportunityName
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setOpportunityName($opportunityName = null)
    {
        // validation for constraint: string
        if (!is_null($opportunityName) && !is_string($opportunityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opportunityName, true), gettype($opportunityName)), __LINE__);
        }
        $this->opportunityName = $opportunityName;
        return $this;
    }
    /**
     * Get opportunityRecord value
     * @return \SFPartnerApi\v480\StructType\SObject|null
     */
    public function getOpportunityRecord()
    {
        return $this->opportunityRecord;
    }
    /**
     * Set opportunityRecord value
     * @param \SFPartnerApi\v480\StructType\SObject $opportunityRecord
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setOpportunityRecord(\SFPartnerApi\v480\StructType\SObject $opportunityRecord = null)
    {
        $this->opportunityRecord = $opportunityRecord;
        return $this;
    }
    /**
     * Get overwriteLeadSource value
     * @return bool|null
     */
    public function getOverwriteLeadSource()
    {
        return $this->overwriteLeadSource;
    }
    /**
     * Set overwriteLeadSource value
     * @param bool $overwriteLeadSource
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setOverwriteLeadSource($overwriteLeadSource = null)
    {
        // validation for constraint: boolean
        if (!is_null($overwriteLeadSource) && !is_bool($overwriteLeadSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overwriteLeadSource, true), gettype($overwriteLeadSource)), __LINE__);
        }
        $this->overwriteLeadSource = $overwriteLeadSource;
        return $this;
    }
    /**
     * Get ownerId value
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }
    /**
     * Set ownerId value
     * @param string $ownerId
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setOwnerId($ownerId = null)
    {
        // validation for constraint: string
        if (!is_null($ownerId) && !is_string($ownerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerId, true), gettype($ownerId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($ownerId) && mb_strlen($ownerId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($ownerId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($ownerId) && !preg_match('/[a-zA-Z0-9]{18}/', $ownerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($ownerId, true)), __LINE__);
        }
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
     * Get sendNotificationEmail value
     * @return bool|null
     */
    public function getSendNotificationEmail()
    {
        return $this->sendNotificationEmail;
    }
    /**
     * Set sendNotificationEmail value
     * @param bool $sendNotificationEmail
     * @return \SFPartnerApi\v480\StructType\LeadConvert
     */
    public function setSendNotificationEmail($sendNotificationEmail = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendNotificationEmail) && !is_bool($sendNotificationEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendNotificationEmail, true), gettype($sendNotificationEmail)), __LINE__);
        }
        $this->sendNotificationEmail = $sendNotificationEmail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\LeadConvert
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
