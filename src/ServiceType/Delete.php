<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
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
     * Sets the UserTerritoryDeleteHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\UserTerritoryDeleteHeader $userTerritoryDeleteHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderUserTerritoryDeleteHeader(\SFPartnerApi\v480\StructType\UserTerritoryDeleteHeader $userTerritoryDeleteHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UserTerritoryDeleteHeader', $userTerritoryDeleteHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the EmailHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\EmailHeader $emailHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderEmailHeader(\SFPartnerApi\v480\StructType\EmailHeader $emailHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'EmailHeader', $emailHeader, $mustUnderstand, $actor);
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
     * Sets the AllOrNoneHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \SFPartnerApi\v480\StructType\AllOrNoneHeader $allOrNoneHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAllOrNoneHeader(\SFPartnerApi\v480\StructType\AllOrNoneHeader $allOrNoneHeader, $nameSpace = 'urn:partner.soap.sforce.com', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'AllOrNoneHeader', $allOrNoneHeader, $mustUnderstand, $actor);
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
     * Method to call the operation originally named delete
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, UserTerritoryDeleteHeader, EmailHeader, AllowFieldTruncationHeader, DisableFeedTrackingHeader, StreamingEnabledHeader, AllOrNoneHeader, DuplicateRuleHeader, LocaleOptions, DebuggingHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\UserTerritoryDeleteHeader, \SFPartnerApi\v480\StructType\EmailHeader, \SFPartnerApi\v480\StructType\AllowFieldTruncationHeader, \SFPartnerApi\v480\StructType\DisableFeedTrackingHeader, \SFPartnerApi\v480\StructType\StreamingEnabledHeader, \SFPartnerApi\v480\StructType\AllOrNoneHeader, \SFPartnerApi\v480\StructType\DuplicateRuleHeader, \SFPartnerApi\v480\StructType\LocaleOptions, \SFPartnerApi\v480\StructType\DebuggingHeader
     * - SOAPHeaders: required, required, required, required, required, required, required, required, required, required, required, required
     * - documentation: Delete a set of sObjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\Delete $parameters
     * @return \SFPartnerApi\v480\StructType\DeleteResponse|bool
     */
    public function delete(\SFPartnerApi\v480\StructType\Delete $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->delete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteByExample
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, UserTerritoryDeleteHeader, EmailHeader, AllowFieldTruncationHeader, DisableFeedTrackingHeader, StreamingEnabledHeader, AllOrNoneHeader, DuplicateRuleHeader, LocaleOptions, DebuggingHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\UserTerritoryDeleteHeader, \SFPartnerApi\v480\StructType\EmailHeader, \SFPartnerApi\v480\StructType\AllowFieldTruncationHeader, \SFPartnerApi\v480\StructType\DisableFeedTrackingHeader, \SFPartnerApi\v480\StructType\StreamingEnabledHeader, \SFPartnerApi\v480\StructType\AllOrNoneHeader, \SFPartnerApi\v480\StructType\DuplicateRuleHeader, \SFPartnerApi\v480\StructType\LocaleOptions, \SFPartnerApi\v480\StructType\DebuggingHeader
     * - SOAPHeaders: required, required, required, required, required, required, required, required, required, required, required, required
     * - documentation: Delete a set of sObjects by example. The passed SOBject is a template for the object to delete
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DeleteByExample $parameters
     * @return \SFPartnerApi\v480\StructType\DeleteByExampleResponse|bool
     */
    public function deleteByExample(\SFPartnerApi\v480\StructType\DeleteByExample $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteByExample($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\DeleteByExampleResponse|\SFPartnerApi\v480\StructType\DeleteResponse
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
