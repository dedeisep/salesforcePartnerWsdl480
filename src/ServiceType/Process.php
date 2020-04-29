<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends AbstractSoapClientBase
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
     * Sets the AllowFieldTruncationHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\AllowFieldTruncationHeader $allowFieldTruncationHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAllowFieldTruncationHeader(\SFPartnerApi\v480\StructType\AllowFieldTruncationHeader $allowFieldTruncationHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'AllowFieldTruncationHeader', $allowFieldTruncationHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the DisableFeedTrackingHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\DisableFeedTrackingHeader $disableFeedTrackingHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderDisableFeedTrackingHeader(\SFPartnerApi\v480\StructType\DisableFeedTrackingHeader $disableFeedTrackingHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'DisableFeedTrackingHeader', $disableFeedTrackingHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the StreamingEnabledHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\StreamingEnabledHeader $streamingEnabledHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderStreamingEnabledHeader(\SFPartnerApi\v480\StructType\StreamingEnabledHeader $streamingEnabledHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'StreamingEnabledHeader', $streamingEnabledHeader, $mustUnderstand, $actor);
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
     * Sets the DebuggingHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\DebuggingHeader $debuggingHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderDebuggingHeader(\SFPartnerApi\v480\StructType\DebuggingHeader $debuggingHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'DebuggingHeader', $debuggingHeader, $mustUnderstand, $actor);
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
     * Method to call the operation originally named process
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, AllowFieldTruncationHeader, DisableFeedTrackingHeader, StreamingEnabledHeader, DuplicateRuleHeader, LocaleOptions, DebuggingHeader, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\AllowFieldTruncationHeader, \SFPartnerApi\v480\StructType\DisableFeedTrackingHeader, \SFPartnerApi\v480\StructType\StreamingEnabledHeader, \SFPartnerApi\v480\StructType\DuplicateRuleHeader, \SFPartnerApi\v480\StructType\LocaleOptions, \SFPartnerApi\v480\StructType\DebuggingHeader, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required, required, required, required, required, required, required
     * - documentation: Submit an entity to a workflow process or process a workitem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\Process $parameters
     * @return \SFPartnerApi\v480\StructType\ProcessResponse|bool
     */
    public function process(\SFPartnerApi\v480\StructType\Process $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->process($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\ProcessResponse
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
