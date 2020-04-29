<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for renderStoredEmailTemplate StructType
 * @subpackage Structs
 */
class RenderStoredEmailTemplate extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest
     */
    public $request;
    /**
     * Constructor method for renderStoredEmailTemplate
     * @uses RenderStoredEmailTemplate::setRequest()
     * @param \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest $request
     */
    public function __construct(\SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest $request
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplate
     */
    public function setRequest(\SFPartnerApi\v480\StructType\RenderStoredEmailTemplateRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplate
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
