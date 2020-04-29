<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Sets the SessionHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\SessionHeader $sessionHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderSessionHeader(\SFPartnerApi\v480\StructType\SessionHeader $sessionHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'SessionHeader', $sessionHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the CallOptions SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\CallOptions $callOptions
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderCallOptions(\SFPartnerApi\v480\StructType\CallOptions $callOptions, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'CallOptions', $callOptions, $mustUnderstand, $actor);
    }
    /**
     * Sets the PackageVersionHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\PackageVersionHeader $packageVersionHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderPackageVersionHeader(\SFPartnerApi\v480\StructType\PackageVersionHeader $packageVersionHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'PackageVersionHeader', $packageVersionHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the DuplicateRuleHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\DuplicateRuleHeader $duplicateRuleHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderDuplicateRuleHeader(\SFPartnerApi\v480\StructType\DuplicateRuleHeader $duplicateRuleHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'DuplicateRuleHeader', $duplicateRuleHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named findDuplicates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, DuplicateRuleHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\DuplicateRuleHeader
     * - SOAPHeaders: required, required, required, required
     * - documentation: Find duplicates for a set of sObjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\FindDuplicates $parameters
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesResponse|bool
     */
    public function findDuplicates(\SFPartnerApi\v480\StructType\FindDuplicates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findDuplicates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findDuplicatesByIds
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, DuplicateRuleHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\DuplicateRuleHeader
     * - SOAPHeaders: required, required, required, required
     * - documentation: Find duplicates for a set of ids
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\FindDuplicatesByIds $parameters
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesByIdsResponse|bool
     */
    public function findDuplicatesByIds(\SFPartnerApi\v480\StructType\FindDuplicatesByIds $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findDuplicatesByIds($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\FindDuplicatesByIdsResponse|\SFPartnerApi\v480\StructType\FindDuplicatesResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
