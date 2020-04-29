<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for renderEmailTemplate StructType
 * @subpackage Structs
 */
class RenderEmailTemplate extends AbstractStructBase
{
    /**
     * The renderRequests
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest[]
     */
    public $renderRequests;
    /**
     * Constructor method for renderEmailTemplate
     * @uses RenderEmailTemplate::setRenderRequests()
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest[] $renderRequests
     */
    public function __construct(array $renderRequests = array())
    {
        $this
            ->setRenderRequests($renderRequests);
    }
    /**
     * Get renderRequests value
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest[]|null
     */
    public function getRenderRequests()
    {
        return $this->renderRequests;
    }
    /**
     * This method is responsible for validating the values passed to the setRenderRequests method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRenderRequests method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRenderRequestsForArrayConstraintsFromSetRenderRequests(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $renderEmailTemplateRenderRequestsItem) {
            // validation for constraint: itemType
            if (!$renderEmailTemplateRenderRequestsItem instanceof \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest) {
                $invalidValues[] = is_object($renderEmailTemplateRenderRequestsItem) ? get_class($renderEmailTemplateRenderRequestsItem) : sprintf('%s(%s)', gettype($renderEmailTemplateRenderRequestsItem), var_export($renderEmailTemplateRenderRequestsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The renderRequests property can only contain items of type \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set renderRequests value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest[] $renderRequests
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplate
     */
    public function setRenderRequests(array $renderRequests = array())
    {
        // validation for constraint: array
        if ('' !== ($renderRequestsArrayErrorMessage = self::validateRenderRequestsForArrayConstraintsFromSetRenderRequests($renderRequests))) {
            throw new \InvalidArgumentException($renderRequestsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($renderRequests) && count($renderRequests) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($renderRequests)), __LINE__);
        }
        $this->renderRequests = $renderRequests;
        return $this;
    }
    /**
     * Add item to renderRequests value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest $item
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplate
     */
    public function addToRenderRequests(\SFPartnerApi\v480\StructType\RenderEmailTemplateRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest) {
            throw new \InvalidArgumentException(sprintf('The renderRequests property can only contain items of type \SFPartnerApi\v480\StructType\RenderEmailTemplateRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->renderRequests) && count($this->renderRequests) >= 10) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->renderRequests)), __LINE__);
        }
        $this->renderRequests[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\RenderEmailTemplate
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
