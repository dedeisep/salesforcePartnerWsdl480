<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Email StructType
 * @subpackage Structs
 */
class Email extends AbstractStructBase
{
    /**
     * The bccSender
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $bccSender;
    /**
     * The emailPriority
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $emailPriority;
    /**
     * The replyTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $replyTo;
    /**
     * The saveAsActivity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $saveAsActivity;
    /**
     * The senderDisplayName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderDisplayName;
    /**
     * The subject
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subject;
    /**
     * The useSignature
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $useSignature;
    /**
     * Constructor method for Email
     * @uses Email::setBccSender()
     * @uses Email::setEmailPriority()
     * @uses Email::setReplyTo()
     * @uses Email::setSaveAsActivity()
     * @uses Email::setSenderDisplayName()
     * @uses Email::setSubject()
     * @uses Email::setUseSignature()
     * @param bool $bccSender
     * @param string $emailPriority
     * @param string $replyTo
     * @param bool $saveAsActivity
     * @param string $senderDisplayName
     * @param string $subject
     * @param bool $useSignature
     */
    public function __construct($bccSender = null, $emailPriority = null, $replyTo = null, $saveAsActivity = null, $senderDisplayName = null, $subject = null, $useSignature = null)
    {
        $this
            ->setBccSender($bccSender)
            ->setEmailPriority($emailPriority)
            ->setReplyTo($replyTo)
            ->setSaveAsActivity($saveAsActivity)
            ->setSenderDisplayName($senderDisplayName)
            ->setSubject($subject)
            ->setUseSignature($useSignature);
    }
    /**
     * Get bccSender value
     * @return bool|null
     */
    public function getBccSender()
    {
        return $this->bccSender;
    }
    /**
     * Set bccSender value
     * @param bool $bccSender
     * @return \SFPartnerApi\v480\StructType\Email
     */
    public function setBccSender($bccSender = null)
    {
        // validation for constraint: boolean
        if (!is_null($bccSender) && !is_bool($bccSender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bccSender, true), gettype($bccSender)), __LINE__);
        }
        $this->bccSender = $bccSender;
        return $this;
    }
    /**
     * Get emailPriority value
     * @return string|null
     */
    public function getEmailPriority()
    {
        return $this->emailPriority;
    }
    /**
     * Set emailPriority value
     * @uses \SFPartnerApi\v480\EnumType\EmailPriority::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\EmailPriority::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $emailPriority
     * @return \SFPartnerApi\v480\StructType\Email
     */
    public function setEmailPriority($emailPriority = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\EmailPriority::valueIsValid($emailPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\EmailPriority', is_array($emailPriority) ? implode(', ', $emailPriority) : var_export($emailPriority, true), implode(', ', \SFPartnerApi\v480\EnumType\EmailPriority::getValidValues())), __LINE__);
        }
        $this->emailPriority = $emailPriority;
        return $this;
    }
    /**
     * Get replyTo value
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }
    /**
     * Set replyTo value
     * @param string $replyTo
     * @return \SFPartnerApi\v480\StructType\Email
     */
    public function setReplyTo($replyTo = null)
    {
        // validation for constraint: string
        if (!is_null($replyTo) && !is_string($replyTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($replyTo, true), gettype($replyTo)), __LINE__);
        }
        $this->replyTo = $replyTo;
        return $this;
    }
    /**
     * Get saveAsActivity value
     * @return bool|null
     */
    public function getSaveAsActivity()
    {
        return $this->saveAsActivity;
    }
    /**
     * Set saveAsActivity value
     * @param bool $saveAsActivity
     * @return \SFPartnerApi\v480\StructType\Email
     */
    public function setSaveAsActivity($saveAsActivity = null)
    {
        // validation for constraint: boolean
        if (!is_null($saveAsActivity) && !is_bool($saveAsActivity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveAsActivity, true), gettype($saveAsActivity)), __LINE__);
        }
        $this->saveAsActivity = $saveAsActivity;
        return $this;
    }
    /**
     * Get senderDisplayName value
     * @return string|null
     */
    public function getSenderDisplayName()
    {
        return $this->senderDisplayName;
    }
    /**
     * Set senderDisplayName value
     * @param string $senderDisplayName
     * @return \SFPartnerApi\v480\StructType\Email
     */
    public function setSenderDisplayName($senderDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($senderDisplayName) && !is_string($senderDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderDisplayName, true), gettype($senderDisplayName)), __LINE__);
        }
        $this->senderDisplayName = $senderDisplayName;
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \SFPartnerApi\v480\StructType\Email
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        return $this;
    }
    /**
     * Get useSignature value
     * @return bool|null
     */
    public function getUseSignature()
    {
        return $this->useSignature;
    }
    /**
     * Set useSignature value
     * @param bool $useSignature
     * @return \SFPartnerApi\v480\StructType\Email
     */
    public function setUseSignature($useSignature = null)
    {
        // validation for constraint: boolean
        if (!is_null($useSignature) && !is_bool($useSignature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useSignature, true), gettype($useSignature)), __LINE__);
        }
        $this->useSignature = $useSignature;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Email
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
