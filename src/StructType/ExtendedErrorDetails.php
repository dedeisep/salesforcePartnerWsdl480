<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedErrorDetails StructType
 * @subpackage Structs
 */
class ExtendedErrorDetails extends AbstractStructBase
{
    /**
     * The extendedErrorCode
     * @var string
     */
    public $extendedErrorCode;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExtendedErrorDetails
     * @uses ExtendedErrorDetails::setExtendedErrorCode()
     * @uses ExtendedErrorDetails::setAny()
     * @param string $extendedErrorCode
     * @param \DOMDocument $any
     */
    public function __construct($extendedErrorCode = null, \DOMDocument $any = null)
    {
        $this
            ->setExtendedErrorCode($extendedErrorCode)
            ->setAny($any);
    }
    /**
     * Get extendedErrorCode value
     * @return string|null
     */
    public function getExtendedErrorCode()
    {
        return $this->extendedErrorCode;
    }
    /**
     * Set extendedErrorCode value
     * @uses \SFPartnerApi\v480\EnumType\ExtendedErrorCode::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\ExtendedErrorCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $extendedErrorCode
     * @return \SFPartnerApi\v480\StructType\ExtendedErrorDetails
     */
    public function setExtendedErrorCode($extendedErrorCode = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\ExtendedErrorCode::valueIsValid($extendedErrorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\ExtendedErrorCode', is_array($extendedErrorCode) ? implode(', ', $extendedErrorCode) : var_export($extendedErrorCode, true), implode(', ', \SFPartnerApi\v480\EnumType\ExtendedErrorCode::getValidValues())), __LINE__);
        }
        $this->extendedErrorCode = $extendedErrorCode;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \SFPartnerApi\v480\StructType\ExtendedErrorDetails
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ExtendedErrorDetails
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
