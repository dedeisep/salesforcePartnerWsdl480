<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenderStoredEmailTemplateRequest StructType
 * @subpackage Structs
 */
class RenderStoredEmailTemplateRequest extends AbstractStructBase
{
    /**
     * The templateId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $templateId;
    /**
     * The attachmentRetrievalOption
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $attachmentRetrievalOption;
    /**
     * The updateTemplateUsage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $updateTemplateUsage;
    /**
     * The whatId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $whatId;
    /**
     * The whoId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $whoId;
    /**
     * Constructor method for RenderStoredEmailTemplateRequest
     * @uses RenderStoredEmailTemplateRequest::setTemplateId()
     * @uses RenderStoredEmailTemplateRequest::setAttachmentRetrievalOption()
     * @uses RenderStoredEmailTemplateRequest::setUpdateTemplateUsage()
     * @uses RenderStoredEmailTemplateRequest::setWhatId()
     * @uses RenderStoredEmailTemplateRequest::setWhoId()
     * @param string $templateId
     * @param string $attachmentRetrievalOption
     * @param bool $updateTemplateUsage
     * @param string $whatId
     * @param string $whoId
     */
    public function __construct($templateId = null, $attachmentRetrievalOption = null, $updateTemplateUsage = null, $whatId = null, $whoId = null)
    {
        $this
            ->setTemplateId($templateId)
            ->setAttachmentRetrievalOption($attachmentRetrievalOption)
            ->setUpdateTemplateUsage($updateTemplateUsage)
            ->setWhatId($whatId)
            ->setWhoId($whoId);
    }
    /**
     * Get templateId value
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param string $templateId
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest
     */
    public function setTemplateId($templateId = null)
    {
        // validation for constraint: string
        if (!is_null($templateId) && !is_string($templateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($templateId) && mb_strlen($templateId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($templateId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($templateId) && !preg_match('/[a-zA-Z0-9]{18}/', $templateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($templateId, true)), __LINE__);
        }
        $this->templateId = $templateId;
        return $this;
    }
    /**
     * Get attachmentRetrievalOption value
     * @return string|null
     */
    public function getAttachmentRetrievalOption()
    {
        return $this->attachmentRetrievalOption;
    }
    /**
     * Set attachmentRetrievalOption value
     * @uses \SFPartnerApi\v480\EnumType\AttachmentRetrievalOption::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\AttachmentRetrievalOption::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $attachmentRetrievalOption
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest
     */
    public function setAttachmentRetrievalOption($attachmentRetrievalOption = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\AttachmentRetrievalOption::valueIsValid($attachmentRetrievalOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\AttachmentRetrievalOption', is_array($attachmentRetrievalOption) ? implode(', ', $attachmentRetrievalOption) : var_export($attachmentRetrievalOption, true), implode(', ', \SFPartnerApi\v480\EnumType\AttachmentRetrievalOption::getValidValues())), __LINE__);
        }
        $this->attachmentRetrievalOption = $attachmentRetrievalOption;
        return $this;
    }
    /**
     * Get updateTemplateUsage value
     * @return bool|null
     */
    public function getUpdateTemplateUsage()
    {
        return $this->updateTemplateUsage;
    }
    /**
     * Set updateTemplateUsage value
     * @param bool $updateTemplateUsage
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest
     */
    public function setUpdateTemplateUsage($updateTemplateUsage = null)
    {
        // validation for constraint: boolean
        if (!is_null($updateTemplateUsage) && !is_bool($updateTemplateUsage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateTemplateUsage, true), gettype($updateTemplateUsage)), __LINE__);
        }
        $this->updateTemplateUsage = $updateTemplateUsage;
        return $this;
    }
    /**
     * Get whatId value
     * @return string|null
     */
    public function getWhatId()
    {
        return $this->whatId;
    }
    /**
     * Set whatId value
     * @param string $whatId
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest
     */
    public function setWhatId($whatId = null)
    {
        // validation for constraint: string
        if (!is_null($whatId) && !is_string($whatId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($whatId, true), gettype($whatId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($whatId) && mb_strlen($whatId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($whatId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($whatId) && !preg_match('/[a-zA-Z0-9]{18}/', $whatId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($whatId, true)), __LINE__);
        }
        $this->whatId = $whatId;
        return $this;
    }
    /**
     * Get whoId value
     * @return string|null
     */
    public function getWhoId()
    {
        return $this->whoId;
    }
    /**
     * Set whoId value
     * @param string $whoId
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest
     */
    public function setWhoId($whoId = null)
    {
        // validation for constraint: string
        if (!is_null($whoId) && !is_string($whoId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($whoId, true), gettype($whoId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($whoId) && mb_strlen($whoId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($whoId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($whoId) && !preg_match('/[a-zA-Z0-9]{18}/', $whoId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($whoId, true)), __LINE__);
        }
        $this->whoId = $whoId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest
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
