<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenderEmailTemplateRequest StructType
 * @subpackage Structs
 */
class RenderEmailTemplateRequest extends AbstractStructBase
{
    /**
     * The templateBodies
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 1
     * - nillable: false
     * @var string[]
     */
    public $templateBodies;
    /**
     * The escapeHtmlInMergeFields
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $escapeHtmlInMergeFields;
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
     * Constructor method for RenderEmailTemplateRequest
     * @uses RenderEmailTemplateRequest::setTemplateBodies()
     * @uses RenderEmailTemplateRequest::setEscapeHtmlInMergeFields()
     * @uses RenderEmailTemplateRequest::setWhatId()
     * @uses RenderEmailTemplateRequest::setWhoId()
     * @param string[] $templateBodies
     * @param bool $escapeHtmlInMergeFields
     * @param string $whatId
     * @param string $whoId
     */
    public function __construct(array $templateBodies = array(), $escapeHtmlInMergeFields = null, $whatId = null, $whoId = null)
    {
        $this
            ->setTemplateBodies($templateBodies)
            ->setEscapeHtmlInMergeFields($escapeHtmlInMergeFields)
            ->setWhatId($whatId)
            ->setWhoId($whoId);
    }
    /**
     * Get templateBodies value
     * @return string[]
     */
    public function getTemplateBodies()
    {
        return $this->templateBodies;
    }
    /**
     * This method is responsible for validating the values passed to the setTemplateBodies method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTemplateBodies method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTemplateBodiesForArrayConstraintsFromSetTemplateBodies(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $renderEmailTemplateRequestTemplateBodiesItem) {
            // validation for constraint: itemType
            if (!is_string($renderEmailTemplateRequestTemplateBodiesItem)) {
                $invalidValues[] = is_object($renderEmailTemplateRequestTemplateBodiesItem) ? get_class($renderEmailTemplateRequestTemplateBodiesItem) : sprintf('%s(%s)', gettype($renderEmailTemplateRequestTemplateBodiesItem), var_export($renderEmailTemplateRequestTemplateBodiesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The templateBodies property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set templateBodies value
     * @throws \InvalidArgumentException
     * @param string[] $templateBodies
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest
     */
    public function setTemplateBodies(array $templateBodies = array())
    {
        // validation for constraint: array
        if ('' !== ($templateBodiesArrayErrorMessage = self::validateTemplateBodiesForArrayConstraintsFromSetTemplateBodies($templateBodies))) {
            throw new \InvalidArgumentException($templateBodiesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($templateBodies) && count($templateBodies) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($templateBodies)), __LINE__);
        }
        $this->templateBodies = $templateBodies;
        return $this;
    }
    /**
     * Add item to templateBodies value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest
     */
    public function addToTemplateBodies($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The templateBodies property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->templateBodies) && count($this->templateBodies) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->templateBodies)), __LINE__);
        }
        $this->templateBodies[] = $item;
        return $this;
    }
    /**
     * Get escapeHtmlInMergeFields value
     * @return bool|null
     */
    public function getEscapeHtmlInMergeFields()
    {
        return $this->escapeHtmlInMergeFields;
    }
    /**
     * Set escapeHtmlInMergeFields value
     * @param bool $escapeHtmlInMergeFields
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest
     */
    public function setEscapeHtmlInMergeFields($escapeHtmlInMergeFields = null)
    {
        // validation for constraint: boolean
        if (!is_null($escapeHtmlInMergeFields) && !is_bool($escapeHtmlInMergeFields)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($escapeHtmlInMergeFields, true), gettype($escapeHtmlInMergeFields)), __LINE__);
        }
        $this->escapeHtmlInMergeFields = $escapeHtmlInMergeFields;
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest
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
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest
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
