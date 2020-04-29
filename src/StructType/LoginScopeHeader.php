<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginScopeHeader StructType
 * @subpackage Structs
 */
class LoginScopeHeader extends AbstractStructBase
{
    /**
     * The organizationId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $organizationId;
    /**
     * The portalId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - minOccurs: 0
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $portalId;
    /**
     * Constructor method for LoginScopeHeader
     * @uses LoginScopeHeader::setOrganizationId()
     * @uses LoginScopeHeader::setPortalId()
     * @param string $organizationId
     * @param string $portalId
     */
    public function __construct($organizationId = null, $portalId = null)
    {
        $this
            ->setOrganizationId($organizationId)
            ->setPortalId($portalId);
    }
    /**
     * Get organizationId value
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }
    /**
     * Set organizationId value
     * @param string $organizationId
     * @return \SFPartnerApi\v480\StructType\LoginScopeHeader
     */
    public function setOrganizationId($organizationId = null)
    {
        // validation for constraint: string
        if (!is_null($organizationId) && !is_string($organizationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationId, true), gettype($organizationId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($organizationId) && mb_strlen($organizationId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($organizationId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($organizationId) && !preg_match('/[a-zA-Z0-9]{18}/', $organizationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($organizationId, true)), __LINE__);
        }
        $this->organizationId = $organizationId;
        return $this;
    }
    /**
     * Get portalId value
     * @return string|null
     */
    public function getPortalId()
    {
        return $this->portalId;
    }
    /**
     * Set portalId value
     * @param string $portalId
     * @return \SFPartnerApi\v480\StructType\LoginScopeHeader
     */
    public function setPortalId($portalId = null)
    {
        // validation for constraint: string
        if (!is_null($portalId) && !is_string($portalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portalId, true), gettype($portalId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($portalId) && mb_strlen($portalId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($portalId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($portalId) && !preg_match('/[a-zA-Z0-9]{18}/', $portalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($portalId, true)), __LINE__);
        }
        $this->portalId = $portalId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\LoginScopeHeader
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
