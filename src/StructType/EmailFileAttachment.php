<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailFileAttachment StructType
 * @subpackage Structs
 */
class EmailFileAttachment extends AbstractStructBase
{
    /**
     * The body
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $body;
    /**
     * The contentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $contentType;
    /**
     * The fileName
     * @var string
     */
    public $fileName;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * The inline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $inline;
    /**
     * Constructor method for EmailFileAttachment
     * @uses EmailFileAttachment::setBody()
     * @uses EmailFileAttachment::setContentType()
     * @uses EmailFileAttachment::setFileName()
     * @uses EmailFileAttachment::setId()
     * @uses EmailFileAttachment::setInline()
     * @param string $body
     * @param string $contentType
     * @param string $fileName
     * @param string $id
     * @param bool $inline
     */
    public function __construct($body = null, $contentType = null, $fileName = null, $id = null, $inline = null)
    {
        $this
            ->setBody($body)
            ->setContentType($contentType)
            ->setFileName($fileName)
            ->setId($id)
            ->setInline($inline);
    }
    /**
     * Get body value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBody()
    {
        return isset($this->body) ? $this->body : null;
    }
    /**
     * Set body value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $body
     * @return \SFPartnerApi\v480\StructType\EmailFileAttachment
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        if (is_null($body) || (is_array($body) && empty($body))) {
            unset($this->body);
        } else {
            $this->body = $body;
        }
        return $this;
    }
    /**
     * Get contentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentType()
    {
        return isset($this->contentType) ? $this->contentType : null;
    }
    /**
     * Set contentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentType
     * @return \SFPartnerApi\v480\StructType\EmailFileAttachment
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        if (is_null($contentType) || (is_array($contentType) && empty($contentType))) {
            unset($this->contentType);
        } else {
            $this->contentType = $contentType;
        }
        return $this;
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \SFPartnerApi\v480\StructType\EmailFileAttachment
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \SFPartnerApi\v480\StructType\EmailFileAttachment
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($id) && mb_strlen($id) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($id)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($id) && !preg_match('/[a-zA-Z0-9]{18}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($id, true)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        return $this;
    }
    /**
     * Get inline value
     * @return bool|null
     */
    public function getInline()
    {
        return $this->inline;
    }
    /**
     * Set inline value
     * @param bool $inline
     * @return \SFPartnerApi\v480\StructType\EmailFileAttachment
     */
    public function setInline($inline = null)
    {
        // validation for constraint: boolean
        if (!is_null($inline) && !is_bool($inline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inline, true), gettype($inline)), __LINE__);
        }
        $this->inline = $inline;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\EmailFileAttachment
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
