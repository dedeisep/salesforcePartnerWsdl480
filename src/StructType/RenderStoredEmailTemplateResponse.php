<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for renderStoredEmailTemplateResponse StructType
 * @subpackage Structs
 */
class RenderStoredEmailTemplateResponse extends AbstractStructBase
{
    /**
     * The result
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult
     */
    public $result;
    /**
     * Constructor method for renderStoredEmailTemplateResponse
     * @uses RenderStoredEmailTemplateResponse::setResult()
     * @param \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult $result
     */
    public function __construct(\SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult $result = null)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult $result
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResponse
     */
    public function setResult(\SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResult $result = null)
    {
        $this->result = $result;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RenderStoredEmailTemplateResponse
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
