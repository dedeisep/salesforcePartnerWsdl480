<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleEmailMessage StructType
 * @subpackage Structs
 */
class SingleEmailMessage extends Email
{
    /**
     * The bccAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 25
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $bccAddresses;
    /**
     * The ccAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 25
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $ccAddresses;
    /**
     * The charset
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $charset;
    /**
     * The documentAttachments
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $documentAttachments;
    /**
     * The entityAttachments
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string[]
     */
    public $entityAttachments;
    /**
     * The fileAttachments
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\EmailFileAttachment[]
     */
    public $fileAttachments;
    /**
     * The htmlBody
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $htmlBody;
    /**
     * The inReplyTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $inReplyTo;
    /**
     * The optOutPolicy
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $optOutPolicy;
    /**
     * The orgWideEmailAddressId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $orgWideEmailAddressId;
    /**
     * The plainTextBody
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $plainTextBody;
    /**
     * The references
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $references;
    /**
     * The targetObjectId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $targetObjectId;
    /**
     * The templateId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $templateId;
    /**
     * The templateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $templateName;
    /**
     * The toAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $toAddresses;
    /**
     * The treatBodiesAsTemplate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $treatBodiesAsTemplate;
    /**
     * The treatTargetObjectAsRecipient
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $treatTargetObjectAsRecipient;
    /**
     * The whatId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $whatId;
    /**
     * Constructor method for SingleEmailMessage
     * @uses SingleEmailMessage::setBccAddresses()
     * @uses SingleEmailMessage::setCcAddresses()
     * @uses SingleEmailMessage::setCharset()
     * @uses SingleEmailMessage::setDocumentAttachments()
     * @uses SingleEmailMessage::setEntityAttachments()
     * @uses SingleEmailMessage::setFileAttachments()
     * @uses SingleEmailMessage::setHtmlBody()
     * @uses SingleEmailMessage::setInReplyTo()
     * @uses SingleEmailMessage::setOptOutPolicy()
     * @uses SingleEmailMessage::setOrgWideEmailAddressId()
     * @uses SingleEmailMessage::setPlainTextBody()
     * @uses SingleEmailMessage::setReferences()
     * @uses SingleEmailMessage::setTargetObjectId()
     * @uses SingleEmailMessage::setTemplateId()
     * @uses SingleEmailMessage::setTemplateName()
     * @uses SingleEmailMessage::setToAddresses()
     * @uses SingleEmailMessage::setTreatBodiesAsTemplate()
     * @uses SingleEmailMessage::setTreatTargetObjectAsRecipient()
     * @uses SingleEmailMessage::setWhatId()
     * @param string[] $bccAddresses
     * @param string[] $ccAddresses
     * @param string $charset
     * @param string[] $documentAttachments
     * @param string[] $entityAttachments
     * @param \SFPartnerApi\v480\StructType\EmailFileAttachment[] $fileAttachments
     * @param string $htmlBody
     * @param string $inReplyTo
     * @param string $optOutPolicy
     * @param string $orgWideEmailAddressId
     * @param string $plainTextBody
     * @param string $references
     * @param string $targetObjectId
     * @param string $templateId
     * @param string $templateName
     * @param string[] $toAddresses
     * @param bool $treatBodiesAsTemplate
     * @param bool $treatTargetObjectAsRecipient
     * @param string $whatId
     */
    public function __construct(array $bccAddresses = array(), array $ccAddresses = array(), $charset = null, array $documentAttachments = array(), array $entityAttachments = array(), array $fileAttachments = array(), $htmlBody = null, $inReplyTo = null, $optOutPolicy = null, $orgWideEmailAddressId = null, $plainTextBody = null, $references = null, $targetObjectId = null, $templateId = null, $templateName = null, array $toAddresses = array(), $treatBodiesAsTemplate = null, $treatTargetObjectAsRecipient = null, $whatId = null)
    {
        $this
            ->setBccAddresses($bccAddresses)
            ->setCcAddresses($ccAddresses)
            ->setCharset($charset)
            ->setDocumentAttachments($documentAttachments)
            ->setEntityAttachments($entityAttachments)
            ->setFileAttachments($fileAttachments)
            ->setHtmlBody($htmlBody)
            ->setInReplyTo($inReplyTo)
            ->setOptOutPolicy($optOutPolicy)
            ->setOrgWideEmailAddressId($orgWideEmailAddressId)
            ->setPlainTextBody($plainTextBody)
            ->setReferences($references)
            ->setTargetObjectId($targetObjectId)
            ->setTemplateId($templateId)
            ->setTemplateName($templateName)
            ->setToAddresses($toAddresses)
            ->setTreatBodiesAsTemplate($treatBodiesAsTemplate)
            ->setTreatTargetObjectAsRecipient($treatTargetObjectAsRecipient)
            ->setWhatId($whatId);
    }
    /**
     * Get bccAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getBccAddresses()
    {
        return isset($this->bccAddresses) ? $this->bccAddresses : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBccAddresses method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBccAddresses method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBccAddressesForArrayConstraintsFromSetBccAddresses(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $singleEmailMessageBccAddressesItem) {
            // validation for constraint: itemType
            if (!is_string($singleEmailMessageBccAddressesItem)) {
                $invalidValues[] = is_object($singleEmailMessageBccAddressesItem) ? get_class($singleEmailMessageBccAddressesItem) : sprintf('%s(%s)', gettype($singleEmailMessageBccAddressesItem), var_export($singleEmailMessageBccAddressesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bccAddresses property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set bccAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $bccAddresses
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setBccAddresses(array $bccAddresses = array())
    {
        // validation for constraint: array
        if ('' !== ($bccAddressesArrayErrorMessage = self::validateBccAddressesForArrayConstraintsFromSetBccAddresses($bccAddresses))) {
            throw new \InvalidArgumentException($bccAddressesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(25)
        if (is_array($bccAddresses) && count($bccAddresses) > 25) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 25', count($bccAddresses)), __LINE__);
        }
        if (is_null($bccAddresses) || (is_array($bccAddresses) && empty($bccAddresses))) {
            unset($this->bccAddresses);
        } else {
            $this->bccAddresses = $bccAddresses;
        }
        return $this;
    }
    /**
     * Add item to bccAddresses value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function addToBccAddresses($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The bccAddresses property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(25)
        if (is_array($this->bccAddresses) && count($this->bccAddresses) >= 25) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 25', count($this->bccAddresses)), __LINE__);
        }
        $this->bccAddresses[] = $item;
        return $this;
    }
    /**
     * Get ccAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getCcAddresses()
    {
        return isset($this->ccAddresses) ? $this->ccAddresses : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCcAddresses method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCcAddresses method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcAddressesForArrayConstraintsFromSetCcAddresses(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $singleEmailMessageCcAddressesItem) {
            // validation for constraint: itemType
            if (!is_string($singleEmailMessageCcAddressesItem)) {
                $invalidValues[] = is_object($singleEmailMessageCcAddressesItem) ? get_class($singleEmailMessageCcAddressesItem) : sprintf('%s(%s)', gettype($singleEmailMessageCcAddressesItem), var_export($singleEmailMessageCcAddressesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ccAddresses property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ccAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $ccAddresses
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setCcAddresses(array $ccAddresses = array())
    {
        // validation for constraint: array
        if ('' !== ($ccAddressesArrayErrorMessage = self::validateCcAddressesForArrayConstraintsFromSetCcAddresses($ccAddresses))) {
            throw new \InvalidArgumentException($ccAddressesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(25)
        if (is_array($ccAddresses) && count($ccAddresses) > 25) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 25', count($ccAddresses)), __LINE__);
        }
        if (is_null($ccAddresses) || (is_array($ccAddresses) && empty($ccAddresses))) {
            unset($this->ccAddresses);
        } else {
            $this->ccAddresses = $ccAddresses;
        }
        return $this;
    }
    /**
     * Add item to ccAddresses value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function addToCcAddresses($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ccAddresses property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(25)
        if (is_array($this->ccAddresses) && count($this->ccAddresses) >= 25) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 25', count($this->ccAddresses)), __LINE__);
        }
        $this->ccAddresses[] = $item;
        return $this;
    }
    /**
     * Get charset value
     * @return string|null
     */
    public function getCharset()
    {
        return $this->charset;
    }
    /**
     * Set charset value
     * @param string $charset
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setCharset($charset = null)
    {
        // validation for constraint: string
        if (!is_null($charset) && !is_string($charset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charset, true), gettype($charset)), __LINE__);
        }
        $this->charset = $charset;
        return $this;
    }
    /**
     * Get documentAttachments value
     * @return string[]|null
     */
    public function getDocumentAttachments()
    {
        return $this->documentAttachments;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentAttachments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentAttachmentsForArrayConstraintsFromSetDocumentAttachments(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $singleEmailMessageDocumentAttachmentsItem) {
            // validation for constraint: itemType
            if (!is_string($singleEmailMessageDocumentAttachmentsItem)) {
                $invalidValues[] = is_object($singleEmailMessageDocumentAttachmentsItem) ? get_class($singleEmailMessageDocumentAttachmentsItem) : sprintf('%s(%s)', gettype($singleEmailMessageDocumentAttachmentsItem), var_export($singleEmailMessageDocumentAttachmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The documentAttachments property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setDocumentAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentAttachments method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentAttachmentsForLengthConstraintFromSetDocumentAttachments($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $singleEmailMessageDocumentAttachmentsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($singleEmailMessageDocumentAttachmentsItem) !== 18) {
                $invalidValues[] = var_export($singleEmailMessageDocumentAttachmentsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set documentAttachments value
     * @throws \InvalidArgumentException
     * @param string[] $documentAttachments
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setDocumentAttachments(array $documentAttachments = array())
    {
        // validation for constraint: array
        if ('' !== ($documentAttachmentsArrayErrorMessage = self::validateDocumentAttachmentsForArrayConstraintsFromSetDocumentAttachments($documentAttachments))) {
            throw new \InvalidArgumentException($documentAttachmentsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($documentAttachmentsLengthErrorMessage = self::validateDocumentAttachmentsForLengthConstraintFromSetDocumentAttachments($documentAttachments))) {
            throw new \InvalidArgumentException($documentAttachmentsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($documentAttachments) && !preg_match('/[a-zA-Z0-9]{18}/', $documentAttachments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($documentAttachments, true)), __LINE__);
        }
        $this->documentAttachments = $documentAttachments;
        return $this;
    }
    /**
     * Add item to documentAttachments value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function addToDocumentAttachments($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The documentAttachments property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->documentAttachments[] = $item;
        return $this;
    }
    /**
     * Get entityAttachments value
     * @return string[]|null
     */
    public function getEntityAttachments()
    {
        return $this->entityAttachments;
    }
    /**
     * This method is responsible for validating the values passed to the setEntityAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntityAttachments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntityAttachmentsForArrayConstraintsFromSetEntityAttachments(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $singleEmailMessageEntityAttachmentsItem) {
            // validation for constraint: itemType
            if (!is_string($singleEmailMessageEntityAttachmentsItem)) {
                $invalidValues[] = is_object($singleEmailMessageEntityAttachmentsItem) ? get_class($singleEmailMessageEntityAttachmentsItem) : sprintf('%s(%s)', gettype($singleEmailMessageEntityAttachmentsItem), var_export($singleEmailMessageEntityAttachmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entityAttachments property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setEntityAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntityAttachments method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntityAttachmentsForLengthConstraintFromSetEntityAttachments($values)
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $singleEmailMessageEntityAttachmentsItem) {
            // validation for constraint: length(18)
            if (mb_strlen($singleEmailMessageEntityAttachmentsItem) !== 18) {
                $invalidValues[] = var_export($singleEmailMessageEntityAttachmentsItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 18', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set entityAttachments value
     * @throws \InvalidArgumentException
     * @param string[] $entityAttachments
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setEntityAttachments(array $entityAttachments = array())
    {
        // validation for constraint: array
        if ('' !== ($entityAttachmentsArrayErrorMessage = self::validateEntityAttachmentsForArrayConstraintsFromSetEntityAttachments($entityAttachments))) {
            throw new \InvalidArgumentException($entityAttachmentsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(18)
        if ('' !== ($entityAttachmentsLengthErrorMessage = self::validateEntityAttachmentsForLengthConstraintFromSetEntityAttachments($entityAttachments))) {
            throw new \InvalidArgumentException($entityAttachmentsLengthErrorMessage, __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($entityAttachments) && !preg_match('/[a-zA-Z0-9]{18}/', $entityAttachments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($entityAttachments, true)), __LINE__);
        }
        $this->entityAttachments = $entityAttachments;
        return $this;
    }
    /**
     * Add item to entityAttachments value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function addToEntityAttachments($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The entityAttachments property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(18)
        if (mb_strlen($item) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($item)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!preg_match('/[a-zA-Z0-9]{18}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($item, true)), __LINE__);
        }
        $this->entityAttachments[] = $item;
        return $this;
    }
    /**
     * Get fileAttachments value
     * @return \SFPartnerApi\v480\StructType\EmailFileAttachment[]|null
     */
    public function getFileAttachments()
    {
        return $this->fileAttachments;
    }
    /**
     * This method is responsible for validating the values passed to the setFileAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileAttachments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFileAttachmentsForArrayConstraintsFromSetFileAttachments(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $singleEmailMessageFileAttachmentsItem) {
            // validation for constraint: itemType
            if (!$singleEmailMessageFileAttachmentsItem instanceof \SFPartnerApi\v480\StructType\EmailFileAttachment) {
                $invalidValues[] = is_object($singleEmailMessageFileAttachmentsItem) ? get_class($singleEmailMessageFileAttachmentsItem) : sprintf('%s(%s)', gettype($singleEmailMessageFileAttachmentsItem), var_export($singleEmailMessageFileAttachmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fileAttachments property can only contain items of type \SFPartnerApi\v480\StructType\EmailFileAttachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set fileAttachments value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\EmailFileAttachment[] $fileAttachments
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setFileAttachments(array $fileAttachments = array())
    {
        // validation for constraint: array
        if ('' !== ($fileAttachmentsArrayErrorMessage = self::validateFileAttachmentsForArrayConstraintsFromSetFileAttachments($fileAttachments))) {
            throw new \InvalidArgumentException($fileAttachmentsArrayErrorMessage, __LINE__);
        }
        $this->fileAttachments = $fileAttachments;
        return $this;
    }
    /**
     * Add item to fileAttachments value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\EmailFileAttachment $item
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function addToFileAttachments(\SFPartnerApi\v480\StructType\EmailFileAttachment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\EmailFileAttachment) {
            throw new \InvalidArgumentException(sprintf('The fileAttachments property can only contain items of type \SFPartnerApi\v480\StructType\EmailFileAttachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fileAttachments[] = $item;
        return $this;
    }
    /**
     * Get htmlBody value
     * @return string|null
     */
    public function getHtmlBody()
    {
        return $this->htmlBody;
    }
    /**
     * Set htmlBody value
     * @param string $htmlBody
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setHtmlBody($htmlBody = null)
    {
        // validation for constraint: string
        if (!is_null($htmlBody) && !is_string($htmlBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($htmlBody, true), gettype($htmlBody)), __LINE__);
        }
        $this->htmlBody = $htmlBody;
        return $this;
    }
    /**
     * Get inReplyTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInReplyTo()
    {
        return isset($this->inReplyTo) ? $this->inReplyTo : null;
    }
    /**
     * Set inReplyTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inReplyTo
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setInReplyTo($inReplyTo = null)
    {
        // validation for constraint: string
        if (!is_null($inReplyTo) && !is_string($inReplyTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inReplyTo, true), gettype($inReplyTo)), __LINE__);
        }
        if (is_null($inReplyTo) || (is_array($inReplyTo) && empty($inReplyTo))) {
            unset($this->inReplyTo);
        } else {
            $this->inReplyTo = $inReplyTo;
        }
        return $this;
    }
    /**
     * Get optOutPolicy value
     * @return string|null
     */
    public function getOptOutPolicy()
    {
        return $this->optOutPolicy;
    }
    /**
     * Set optOutPolicy value
     * @uses \SFPartnerApi\v480\EnumType\SendEmailOptOutPolicy::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\SendEmailOptOutPolicy::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $optOutPolicy
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setOptOutPolicy($optOutPolicy = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\SendEmailOptOutPolicy::valueIsValid($optOutPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\SendEmailOptOutPolicy', is_array($optOutPolicy) ? implode(', ', $optOutPolicy) : var_export($optOutPolicy, true), implode(', ', \SFPartnerApi\v480\EnumType\SendEmailOptOutPolicy::getValidValues())), __LINE__);
        }
        $this->optOutPolicy = $optOutPolicy;
        return $this;
    }
    /**
     * Get orgWideEmailAddressId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrgWideEmailAddressId()
    {
        return isset($this->orgWideEmailAddressId) ? $this->orgWideEmailAddressId : null;
    }
    /**
     * Set orgWideEmailAddressId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orgWideEmailAddressId
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setOrgWideEmailAddressId($orgWideEmailAddressId = null)
    {
        // validation for constraint: string
        if (!is_null($orgWideEmailAddressId) && !is_string($orgWideEmailAddressId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgWideEmailAddressId, true), gettype($orgWideEmailAddressId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($orgWideEmailAddressId) && mb_strlen($orgWideEmailAddressId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($orgWideEmailAddressId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($orgWideEmailAddressId) && !preg_match('/[a-zA-Z0-9]{18}/', $orgWideEmailAddressId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($orgWideEmailAddressId, true)), __LINE__);
        }
        if (is_null($orgWideEmailAddressId) || (is_array($orgWideEmailAddressId) && empty($orgWideEmailAddressId))) {
            unset($this->orgWideEmailAddressId);
        } else {
            $this->orgWideEmailAddressId = $orgWideEmailAddressId;
        }
        return $this;
    }
    /**
     * Get plainTextBody value
     * @return string|null
     */
    public function getPlainTextBody()
    {
        return $this->plainTextBody;
    }
    /**
     * Set plainTextBody value
     * @param string $plainTextBody
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setPlainTextBody($plainTextBody = null)
    {
        // validation for constraint: string
        if (!is_null($plainTextBody) && !is_string($plainTextBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plainTextBody, true), gettype($plainTextBody)), __LINE__);
        }
        $this->plainTextBody = $plainTextBody;
        return $this;
    }
    /**
     * Get references value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReferences()
    {
        return isset($this->references) ? $this->references : null;
    }
    /**
     * Set references value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $references
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setReferences($references = null)
    {
        // validation for constraint: string
        if (!is_null($references) && !is_string($references)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($references, true), gettype($references)), __LINE__);
        }
        if (is_null($references) || (is_array($references) && empty($references))) {
            unset($this->references);
        } else {
            $this->references = $references;
        }
        return $this;
    }
    /**
     * Get targetObjectId value
     * @return string|null
     */
    public function getTargetObjectId()
    {
        return $this->targetObjectId;
    }
    /**
     * Set targetObjectId value
     * @param string $targetObjectId
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setTargetObjectId($targetObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($targetObjectId) && !is_string($targetObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetObjectId, true), gettype($targetObjectId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($targetObjectId) && mb_strlen($targetObjectId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($targetObjectId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($targetObjectId) && !preg_match('/[a-zA-Z0-9]{18}/', $targetObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($targetObjectId, true)), __LINE__);
        }
        $this->targetObjectId = $targetObjectId;
        return $this;
    }
    /**
     * Get templateId value
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param string $templateId
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
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
     * Get templateName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTemplateName()
    {
        return isset($this->templateName) ? $this->templateName : null;
    }
    /**
     * Set templateName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $templateName
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setTemplateName($templateName = null)
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        if (is_null($templateName) || (is_array($templateName) && empty($templateName))) {
            unset($this->templateName);
        } else {
            $this->templateName = $templateName;
        }
        return $this;
    }
    /**
     * Get toAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getToAddresses()
    {
        return isset($this->toAddresses) ? $this->toAddresses : null;
    }
    /**
     * This method is responsible for validating the values passed to the setToAddresses method
     * This method is willingly generated in order to preserve the one-line inline validation within the setToAddresses method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateToAddressesForArrayConstraintsFromSetToAddresses(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $singleEmailMessageToAddressesItem) {
            // validation for constraint: itemType
            if (!is_string($singleEmailMessageToAddressesItem)) {
                $invalidValues[] = is_object($singleEmailMessageToAddressesItem) ? get_class($singleEmailMessageToAddressesItem) : sprintf('%s(%s)', gettype($singleEmailMessageToAddressesItem), var_export($singleEmailMessageToAddressesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The toAddresses property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set toAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $toAddresses
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setToAddresses(array $toAddresses = array())
    {
        // validation for constraint: array
        if ('' !== ($toAddressesArrayErrorMessage = self::validateToAddressesForArrayConstraintsFromSetToAddresses($toAddresses))) {
            throw new \InvalidArgumentException($toAddressesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($toAddresses) && count($toAddresses) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($toAddresses)), __LINE__);
        }
        if (is_null($toAddresses) || (is_array($toAddresses) && empty($toAddresses))) {
            unset($this->toAddresses);
        } else {
            $this->toAddresses = $toAddresses;
        }
        return $this;
    }
    /**
     * Add item to toAddresses value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function addToToAddresses($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The toAddresses property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->toAddresses) && count($this->toAddresses) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->toAddresses)), __LINE__);
        }
        $this->toAddresses[] = $item;
        return $this;
    }
    /**
     * Get treatBodiesAsTemplate value
     * @return bool|null
     */
    public function getTreatBodiesAsTemplate()
    {
        return $this->treatBodiesAsTemplate;
    }
    /**
     * Set treatBodiesAsTemplate value
     * @param bool $treatBodiesAsTemplate
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setTreatBodiesAsTemplate($treatBodiesAsTemplate = null)
    {
        // validation for constraint: boolean
        if (!is_null($treatBodiesAsTemplate) && !is_bool($treatBodiesAsTemplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($treatBodiesAsTemplate, true), gettype($treatBodiesAsTemplate)), __LINE__);
        }
        $this->treatBodiesAsTemplate = $treatBodiesAsTemplate;
        return $this;
    }
    /**
     * Get treatTargetObjectAsRecipient value
     * @return bool|null
     */
    public function getTreatTargetObjectAsRecipient()
    {
        return $this->treatTargetObjectAsRecipient;
    }
    /**
     * Set treatTargetObjectAsRecipient value
     * @param bool $treatTargetObjectAsRecipient
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
     */
    public function setTreatTargetObjectAsRecipient($treatTargetObjectAsRecipient = null)
    {
        // validation for constraint: boolean
        if (!is_null($treatTargetObjectAsRecipient) && !is_bool($treatTargetObjectAsRecipient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($treatTargetObjectAsRecipient, true), gettype($treatTargetObjectAsRecipient)), __LINE__);
        }
        $this->treatTargetObjectAsRecipient = $treatTargetObjectAsRecipient;
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
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\SingleEmailMessage
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
