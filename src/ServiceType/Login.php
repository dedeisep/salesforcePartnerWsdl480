<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Login ServiceType
 * @subpackage Services
 */
class Login extends AbstractSoapClientBase
{
    /**
     * Sets the LoginScopeHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\LoginScopeHeader $loginScopeHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderLoginScopeHeader(\SFPartnerApi\v480\StructType\LoginScopeHeader $loginScopeHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'LoginScopeHeader', $loginScopeHeader, $mustUnderstand, $actor);
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
     * Method to call the operation originally named login
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: LoginScopeHeader, CallOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\LoginScopeHeader, \SFPartnerApi\v480\StructType\CallOptions
     * - SOAPHeaders: required, required
     * - documentation: Login to the Salesforce.com SOAP Api
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\Login $parameters
     * @return \SFPartnerApi\v480\StructType\LoginResponse|bool
     */
    public function login(\SFPartnerApi\v480\StructType\Login $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->login($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\LoginResponse
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
