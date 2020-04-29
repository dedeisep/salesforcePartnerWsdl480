<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateRuleHeader StructType
 * @subpackage Structs
 */
class DuplicateRuleHeader extends AbstractStructBase
{
    /**
     * The allowSave
     * @var bool
     */
    public $allowSave;
    /**
     * The includeRecordDetails
     * @var bool
     */
    public $includeRecordDetails;
    /**
     * The runAsCurrentUser
     * @var bool
     */
    public $runAsCurrentUser;
    /**
     * Constructor method for DuplicateRuleHeader
     * @uses DuplicateRuleHeader::setAllowSave()
     * @uses DuplicateRuleHeader::setIncludeRecordDetails()
     * @uses DuplicateRuleHeader::setRunAsCurrentUser()
     * @param bool $allowSave
     * @param bool $includeRecordDetails
     * @param bool $runAsCurrentUser
     */
    public function __construct($allowSave = null, $includeRecordDetails = null, $runAsCurrentUser = null)
    {
        $this
            ->setAllowSave($allowSave)
            ->setIncludeRecordDetails($includeRecordDetails)
            ->setRunAsCurrentUser($runAsCurrentUser);
    }
    /**
     * Get allowSave value
     * @return bool|null
     */
    public function getAllowSave()
    {
        return $this->allowSave;
    }
    /**
     * Set allowSave value
     * @param bool $allowSave
     * @return \SFPartnerApi\v480\StructType\DuplicateRuleHeader
     */
    public function setAllowSave($allowSave = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowSave) && !is_bool($allowSave)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowSave, true), gettype($allowSave)), __LINE__);
        }
        $this->allowSave = $allowSave;
        return $this;
    }
    /**
     * Get includeRecordDetails value
     * @return bool|null
     */
    public function getIncludeRecordDetails()
    {
        return $this->includeRecordDetails;
    }
    /**
     * Set includeRecordDetails value
     * @param bool $includeRecordDetails
     * @return \SFPartnerApi\v480\StructType\DuplicateRuleHeader
     */
    public function setIncludeRecordDetails($includeRecordDetails = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeRecordDetails) && !is_bool($includeRecordDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeRecordDetails, true), gettype($includeRecordDetails)), __LINE__);
        }
        $this->includeRecordDetails = $includeRecordDetails;
        return $this;
    }
    /**
     * Get runAsCurrentUser value
     * @return bool|null
     */
    public function getRunAsCurrentUser()
    {
        return $this->runAsCurrentUser;
    }
    /**
     * Set runAsCurrentUser value
     * @param bool $runAsCurrentUser
     * @return \SFPartnerApi\v480\StructType\DuplicateRuleHeader
     */
    public function setRunAsCurrentUser($runAsCurrentUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($runAsCurrentUser) && !is_bool($runAsCurrentUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($runAsCurrentUser, true), gettype($runAsCurrentUser)), __LINE__);
        }
        $this->runAsCurrentUser = $runAsCurrentUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DuplicateRuleHeader
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
