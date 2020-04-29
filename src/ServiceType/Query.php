<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Query ServiceType
 * @subpackage Services
 */
class Query extends AbstractSoapClientBase
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
     * Method to call the operation originally named query
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, QueryOptions, MruHeader, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\QueryOptions, \SFPartnerApi\v480\StructType\MruHeader, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required, required, required
     * - documentation: Create a Query Cursor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\Query $parameters
     * @return \SFPartnerApi\v480\StructType\QueryResponse|bool
     */
    public function query(\SFPartnerApi\v480\StructType\Query $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->query($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named queryAll
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, QueryOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\QueryOptions
     * - SOAPHeaders: required, required, required
     * - documentation: Create a Query Cursor, including deleted sObjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\QueryAll $parameters
     * @return \SFPartnerApi\v480\StructType\QueryAllResponse|bool
     */
    public function queryAll(\SFPartnerApi\v480\StructType\QueryAll $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->queryAll($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named queryMore
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, QueryOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\QueryOptions
     * - SOAPHeaders: required, required, required
     * - documentation: Gets the next batch of sObjects from a query
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\QueryMore $parameters
     * @return \SFPartnerApi\v480\StructType\QueryMoreResponse|bool
     */
    public function queryMore(\SFPartnerApi\v480\StructType\QueryMore $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->queryMore($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\QueryAllResponse|\SFPartnerApi\v480\StructType\QueryMoreResponse|\SFPartnerApi\v480\StructType\QueryResponse
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
