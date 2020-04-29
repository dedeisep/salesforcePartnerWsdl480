<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActionOverride StructType
 * @subpackage Structs
 */
class ActionOverride extends AbstractStructBase
{
    /**
     * The formFactor
     * @var string
     */
    public $formFactor;
    /**
     * The isAvailableInTouch
     * @var bool
     */
    public $isAvailableInTouch;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The pageId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $pageId;
    /**
     * The url
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $url;
    /**
     * Constructor method for ActionOverride
     * @uses ActionOverride::setFormFactor()
     * @uses ActionOverride::setIsAvailableInTouch()
     * @uses ActionOverride::setName()
     * @uses ActionOverride::setPageId()
     * @uses ActionOverride::setUrl()
     * @param string $formFactor
     * @param bool $isAvailableInTouch
     * @param string $name
     * @param string $pageId
     * @param string $url
     */
    public function __construct($formFactor = null, $isAvailableInTouch = null, $name = null, $pageId = null, $url = null)
    {
        $this
            ->setFormFactor($formFactor)
            ->setIsAvailableInTouch($isAvailableInTouch)
            ->setName($name)
            ->setPageId($pageId)
            ->setUrl($url);
    }
    /**
     * Get formFactor value
     * @return string|null
     */
    public function getFormFactor()
    {
        return $this->formFactor;
    }
    /**
     * Set formFactor value
     * @param string $formFactor
     * @return \SFPartnerApi\v480\StructType\ActionOverride
     */
    public function setFormFactor($formFactor = null)
    {
        // validation for constraint: string
        if (!is_null($formFactor) && !is_string($formFactor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formFactor, true), gettype($formFactor)), __LINE__);
        }
        $this->formFactor = $formFactor;
        return $this;
    }
    /**
     * Get isAvailableInTouch value
     * @return bool|null
     */
    public function getIsAvailableInTouch()
    {
        return $this->isAvailableInTouch;
    }
    /**
     * Set isAvailableInTouch value
     * @param bool $isAvailableInTouch
     * @return \SFPartnerApi\v480\StructType\ActionOverride
     */
    public function setIsAvailableInTouch($isAvailableInTouch = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAvailableInTouch) && !is_bool($isAvailableInTouch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAvailableInTouch, true), gettype($isAvailableInTouch)), __LINE__);
        }
        $this->isAvailableInTouch = $isAvailableInTouch;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\ActionOverride
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get pageId value
     * @return string|null
     */
    public function getPageId()
    {
        return $this->pageId;
    }
    /**
     * Set pageId value
     * @param string $pageId
     * @return \SFPartnerApi\v480\StructType\ActionOverride
     */
    public function setPageId($pageId = null)
    {
        // validation for constraint: string
        if (!is_null($pageId) && !is_string($pageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageId, true), gettype($pageId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($pageId) && mb_strlen($pageId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($pageId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($pageId) && !preg_match('/[a-zA-Z0-9]{18}/', $pageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($pageId, true)), __LINE__);
        }
        $this->pageId = $pageId;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \SFPartnerApi\v480\StructType\ActionOverride
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\ActionOverride
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
