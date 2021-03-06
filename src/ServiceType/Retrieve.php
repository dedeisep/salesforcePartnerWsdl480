<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Retrieve ServiceType
 * @subpackage Services
 */
class Retrieve extends AbstractSoapClientBase
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
     * Sets the QueryOptions SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\QueryOptions $queryOptions
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderQueryOptions(\SFPartnerApi\v480\StructType\QueryOptions $queryOptions, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'QueryOptions', $queryOptions, $mustUnderstand, $actor);
    }
    /**
     * Sets the MruHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\MruHeader $mruHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderMruHeader(\SFPartnerApi\v480\StructType\MruHeader $mruHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'MruHeader', $mruHeader, $mustUnderstand, $actor);
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
     * Sets the LocaleOptions SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\LocaleOptions $localeOptions
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderLocaleOptions(\SFPartnerApi\v480\StructType\LocaleOptions $localeOptions, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'LocaleOptions', $localeOptions, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named retrieve
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, QueryOptions, MruHeader, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\QueryOptions, \SFPartnerApi\v480\StructType\MruHeader, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required, required, required
     * - documentation: Get a set of sObjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\Retrieve $parameters
     * @return \SFPartnerApi\v480\StructType\RetrieveResponse|bool
     */
    public function retrieve(\SFPartnerApi\v480\StructType\Retrieve $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->retrieve($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveQuickActionTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Retrieve the template sobjects, if appropriate, for the given quick action names in a given context
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\RetrieveQuickActionTemplates $parameters
     * @return \SFPartnerApi\v480\StructType\RetrieveQuickActionTemplatesResponse|bool
     */
    public function retrieveQuickActionTemplates(\SFPartnerApi\v480\StructType\RetrieveQuickActionTemplates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->retrieveQuickActionTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveMassQuickActionTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Retrieve the template sobjects, if appropriate, for the given quick action names in a given contexts when used a mass quick action
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\RetrieveMassQuickActionTemplates $parameters
     * @return \SFPartnerApi\v480\StructType\RetrieveMassQuickActionTemplatesResponse|bool
     */
    public function retrieveMassQuickActionTemplates(\SFPartnerApi\v480\StructType\RetrieveMassQuickActionTemplates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->retrieveMassQuickActionTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\RetrieveMassQuickActionTemplatesResponse|\SFPartnerApi\v480\StructType\RetrieveQuickActionTemplatesResponse|\SFPartnerApi\v480\StructType\RetrieveResponse
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
