<?php

namespace SFPartnerApi\v480\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Describe ServiceType
 * @subpackage Services
 */
class Describe extends AbstractSoapClientBase
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
     * Method to call the operation originally named describeSObject
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describe an sObject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeSObject $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectResponse|bool
     */
    public function describeSObject(\SFPartnerApi\v480\StructType\DescribeSObject $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeSObject($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeSObjects
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describe multiple sObjects (upto 100)
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeSObjects $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectsResponse|bool
     */
    public function describeSObjects(\SFPartnerApi\v480\StructType\DescribeSObjects $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeSObjects($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeGlobal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the Global state
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeGlobal $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalResponse|bool
     */
    public function describeGlobal(\SFPartnerApi\v480\StructType\DescribeGlobal $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeGlobal($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeDataCategoryGroups
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describe all the data category groups available for a given set of types
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeDataCategoryGroups $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupsResponse|bool
     */
    public function describeDataCategoryGroups(\SFPartnerApi\v480\StructType\DescribeDataCategoryGroups $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeDataCategoryGroups($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * describeDataCategoryGroupStructures
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describe the data category group structures for a given set of pair of types and data category group name
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructures $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructuresResponse|bool
     */
    public function describeDataCategoryGroupStructures(\SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructures $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeDataCategoryGroupStructures($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeDataCategoryMappings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describe your Data Category Mappings.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeDataCategoryMappings $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingsResponse|bool
     */
    public function describeDataCategoryMappings(\SFPartnerApi\v480\StructType\DescribeDataCategoryMappings $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeDataCategoryMappings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeKnowledgeSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describes your Knowledge settings, such as if knowledgeEnabled is on or off, its default language and supported languages
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeKnowledgeSettings $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeKnowledgeSettingsResponse|bool
     */
    public function describeKnowledgeSettings(\SFPartnerApi\v480\StructType\DescribeKnowledgeSettings $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeKnowledgeSettings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeAppMenu
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the items in an AppMenu
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeAppMenu $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeAppMenuResponse|bool
     */
    public function describeAppMenu(\SFPartnerApi\v480\StructType\DescribeAppMenu $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeAppMenu($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeGlobalTheme
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe Gloal and Themes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeGlobalTheme_1 $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeGlobalThemeResponse|bool
     */
    public function describeGlobalTheme(\SFPartnerApi\v480\StructType\DescribeGlobalTheme_1 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeGlobalTheme($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeTheme
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe Themes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeTheme $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeThemeResponse|bool
     */
    public function describeTheme(\SFPartnerApi\v480\StructType\DescribeTheme $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeTheme($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeLayout
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the layout of the given sObject or the given actionable global page.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeLayout_1 $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutResponse|bool
     */
    public function describeLayout(\SFPartnerApi\v480\StructType\DescribeLayout_1 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeLayout($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeSoftphoneLayout
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the layout of the SoftPhone
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeSoftphoneLayout $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutResponse|bool
     */
    public function describeSoftphoneLayout(\SFPartnerApi\v480\StructType\DescribeSoftphoneLayout $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeSoftphoneLayout($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeSearchLayouts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the search view of an sObject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeSearchLayouts $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeSearchLayoutsResponse|bool
     */
    public function describeSearchLayouts(\SFPartnerApi\v480\StructType\DescribeSearchLayouts $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeSearchLayouts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeSearchableEntities
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe a list of entity names that reflects the current user's searchable entities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeSearchableEntities $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeSearchableEntitiesResponse|bool
     */
    public function describeSearchableEntities(\SFPartnerApi\v480\StructType\DescribeSearchableEntities $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeSearchableEntities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeSearchScopeOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe a list of objects representing the order and scope of objects on a users search result page
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeSearchScopeOrder $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeSearchScopeOrderResponse|bool
     */
    public function describeSearchScopeOrder(\SFPartnerApi\v480\StructType\DescribeSearchScopeOrder $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeSearchScopeOrder($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeCompactLayouts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the compact layouts of the given sObject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeCompactLayouts $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeCompactLayoutsResponse|bool
     */
    public function describeCompactLayouts(\SFPartnerApi\v480\StructType\DescribeCompactLayouts $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeCompactLayouts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describePathAssistants
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the Path Assistants for the given sObject and optionally RecordTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribePathAssistants $parameters
     * @return \SFPartnerApi\v480\StructType\DescribePathAssistantsResponse|bool
     */
    public function describePathAssistants(\SFPartnerApi\v480\StructType\DescribePathAssistants $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describePathAssistants($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeApprovalLayout
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the approval layouts of the given sObject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeApprovalLayout_1 $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeApprovalLayoutResponse|bool
     */
    public function describeApprovalLayout(\SFPartnerApi\v480\StructType\DescribeApprovalLayout_1 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeApprovalLayout($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeSoqlListViews
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the ListViews as SOQL metadata for the generation of SOQL.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeSoqlListViews $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeSoqlListViewsResponse|bool
     */
    public function describeSoqlListViews(\SFPartnerApi\v480\StructType\DescribeSoqlListViews $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeSoqlListViews($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeSObjectListViews
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the ListViews of a SObject as SOQL metadata for the generation of SOQL.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeSObjectListViews $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectListViewsResponse|bool
     */
    public function describeSObjectListViews(\SFPartnerApi\v480\StructType\DescribeSObjectListViews $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeSObjectListViews($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeTabs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the tabs that appear on a users page
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeTabs $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeTabsResponse|bool
     */
    public function describeTabs(\SFPartnerApi\v480\StructType\DescribeTabs $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeTabs($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeAllTabs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe all tabs available to a user
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeAllTabs $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeAllTabsResponse|bool
     */
    public function describeAllTabs(\SFPartnerApi\v480\StructType\DescribeAllTabs $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeAllTabs($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describePrimaryCompactLayouts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe the primary compact layouts for the sObjects requested
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribePrimaryCompactLayouts $parameters
     * @return \SFPartnerApi\v480\StructType\DescribePrimaryCompactLayoutsResponse|bool
     */
    public function describePrimaryCompactLayouts(\SFPartnerApi\v480\StructType\DescribePrimaryCompactLayouts $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describePrimaryCompactLayouts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeQuickActions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describe the details of a series of quick actions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActions $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionsResponse|bool
     */
    public function describeQuickActions(\SFPartnerApi\v480\StructType\DescribeQuickActions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeQuickActions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeQuickActionsForRecordType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describe the details of a series of quick actions in context of requested recordType id for Update actions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionsForRecordType $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionsForRecordTypeResponse|bool
     */
    public function describeQuickActionsForRecordType(\SFPartnerApi\v480\StructType\DescribeQuickActionsForRecordType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeQuickActionsForRecordType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeAvailableQuickActions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Describe the details of a series of quick actions available for the given contextType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeAvailableQuickActions $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeAvailableQuickActionsResponse|bool
     */
    public function describeAvailableQuickActions(\SFPartnerApi\v480\StructType\DescribeAvailableQuickActions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeAvailableQuickActions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeVisualForce
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader
     * - SOAPHeaders: required, required, required
     * - documentation: Describe visualforce for an org
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeVisualForce $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeVisualForceResponse|bool
     */
    public function describeVisualForce(\SFPartnerApi\v480\StructType\DescribeVisualForce $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeVisualForce($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named describeNouns
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: SessionHeader, CallOptions, PackageVersionHeader, LocaleOptions
     * - SOAPHeaderNamespaces: urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com, urn:partner.soap.sforce.com
     * - SOAPHeaderTypes: \SFPartnerApi\v480\StructType\SessionHeader, \SFPartnerApi\v480\StructType\CallOptions, \SFPartnerApi\v480\StructType\PackageVersionHeader, \SFPartnerApi\v480\StructType\LocaleOptions
     * - SOAPHeaders: required, required, required, required
     * - documentation: Return the renameable nouns from the server for use in presentation using the salesforce grammar engine
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SFPartnerApi\v480\StructType\DescribeNouns $parameters
     * @return \SFPartnerApi\v480\StructType\DescribeNounsResponse|bool
     */
    public function describeNouns(\SFPartnerApi\v480\StructType\DescribeNouns $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->describeNouns($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SFPartnerApi\v480\StructType\DescribeAllTabsResponse|\SFPartnerApi\v480\StructType\DescribeAppMenuResponse|\SFPartnerApi\v480\StructType\DescribeApprovalLayoutResponse|\SFPartnerApi\v480\StructType\DescribeAvailableQuickActionsResponse|\SFPartnerApi\v480\StructType\DescribeCompactLayoutsResponse|\SFPartnerApi\v480\StructType\DescribeDataCategoryGroupsResponse|\SFPartnerApi\v480\StructType\DescribeDataCategoryGroupStructuresResponse|\SFPartnerApi\v480\StructType\DescribeDataCategoryMappingsResponse|\SFPartnerApi\v480\StructType\DescribeGlobalResponse|\SFPartnerApi\v480\StructType\DescribeGlobalThemeResponse|\SFPartnerApi\v480\StructType\DescribeKnowledgeSettingsResponse|\SFPartnerApi\v480\StructType\DescribeLayoutResponse|\SFPartnerApi\v480\StructType\DescribeNounsResponse|\SFPartnerApi\v480\StructType\DescribePathAssistantsResponse|\SFPartnerApi\v480\StructType\DescribePrimaryCompactLayoutsResponse|\SFPartnerApi\v480\StructType\DescribeQuickActionsForRecordTypeResponse|\SFPartnerApi\v480\StructType\DescribeQuickActionsResponse|\SFPartnerApi\v480\StructType\DescribeSearchableEntitiesResponse|\SFPartnerApi\v480\StructType\DescribeSearchLayoutsResponse|\SFPartnerApi\v480\StructType\DescribeSearchScopeOrderResponse|\SFPartnerApi\v480\StructType\DescribeSObjectListViewsResponse|\SFPartnerApi\v480\StructType\DescribeSObjectResponse|\SFPartnerApi\v480\StructType\DescribeSObjectsResponse|\SFPartnerApi\v480\StructType\DescribeSoftphoneLayoutResponse|\SFPartnerApi\v480\StructType\DescribeSoqlListViewsResponse|\SFPartnerApi\v480\StructType\DescribeTabsResponse|\SFPartnerApi\v480\StructType\DescribeThemeResponse|\SFPartnerApi\v480\StructType\DescribeVisualForceResponse
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
