<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named getDeleted
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions
     * - SOAPHeaders: required, required
     * - documentation: Get the IDs for deleted sObjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\GetDeleted $parameters
     * @return \SFPartnerApi\v480\StructType\GetDeletedResponse|bool
     */
    public function getDeleted(\SFPartnerApi\v480\StructType\GetDeleted $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDeleted($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUpdated
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions
     * - SOAPHeaders: required, required
     * - documentation: Get the IDs for updated sObjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\GetUpdated $parameters
     * @return \SFPartnerApi\v480\StructType\GetUpdatedResponse|bool
     */
    public function getUpdated(\SFPartnerApi\v480\StructType\GetUpdated $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getUpdated($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getServerTimestamp
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions
     * - SOAPHeaders: required, required
     * - documentation: Gets server timestamp
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\GetServerTimestamp $parameters
     * @return \SFPartnerApi\v480\StructType\GetServerTimestampResponse|bool
     */
    public function getServerTimestamp(\SFPartnerApi\v480\StructType\GetServerTimestamp $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getServerTimestamp($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions
     * - SOAPHeaders: required, required
     * - documentation: Returns standard information relevant to the current user
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\GetUserInfo $parameters
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResponse|bool
     */
    public function getUserInfo(\SFPartnerApi\v480\StructType\GetUserInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getUserInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\GetDeletedResponse|\SFPartnerApi\v480\StructType\GetServerTimestampResponse|\SFPartnerApi\v480\StructType\GetUpdatedResponse|\SFPartnerApi\v480\StructType\GetUserInfoResponse
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
