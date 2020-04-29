<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Logout ServiceType
 * @subpackage Services
 */
class Logout extends AbstractSoapClientBase
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
     * Method to call the operation originally named logout
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions
     * - SOAPHeaders: required, required
     * - documentation: Logout the current user, invalidating the current session.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\Logout $parameters
     * @return \SFPartnerApi\v480\StructType\LogoutResponse|bool
     */
    public function logout(\SFPartnerApi\v480\StructType\Logout $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->logout($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\LogoutResponse
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
