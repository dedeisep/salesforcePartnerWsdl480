<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserInfoResult StructType
 * @subpackage Structs
 */
class GetUserInfoResult extends AbstractStructBase
{
    /**
     * The accessibilityMode
     * @var bool
     */
    public $accessibilityMode;
    /**
     * The chatterExternal
     * @var bool
     */
    public $chatterExternal;
    /**
     * The currencySymbol
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currencySymbol;
    /**
     * The orgAttachmentFileSizeLimit
     * @var int
     */
    public $orgAttachmentFileSizeLimit;
    /**
     * The orgDefaultCurrencyIsoCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $orgDefaultCurrencyIsoCode;
    /**
     * The orgDefaultCurrencyLocale
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $orgDefaultCurrencyLocale;
    /**
     * The orgDisallowHtmlAttachments
     * @var bool
     */
    public $orgDisallowHtmlAttachments;
    /**
     * The orgHasPersonAccounts
     * @var bool
     */
    public $orgHasPersonAccounts;
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
     * The organizationMultiCurrency
     * @var bool
     */
    public $organizationMultiCurrency;
    /**
     * The organizationName
     * @var string
     */
    public $organizationName;
    /**
     * The profileId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $profileId;
    /**
     * The roleId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $roleId;
    /**
     * The sessionSecondsValid
     * @var int
     */
    public $sessionSecondsValid;
    /**
     * The userDefaultCurrencyIsoCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $userDefaultCurrencyIsoCode;
    /**
     * The userEmail
     * @var string
     */
    public $userEmail;
    /**
     * The userFullName
     * @var string
     */
    public $userFullName;
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $userId;
    /**
     * The userLanguage
     * @var string
     */
    public $userLanguage;
    /**
     * The userLocale
     * @var string
     */
    public $userLocale;
    /**
     * The userName
     * @var string
     */
    public $userName;
    /**
     * The userTimeZone
     * @var string
     */
    public $userTimeZone;
    /**
     * The userType
     * @var string
     */
    public $userType;
    /**
     * The userUiSkin
     * @var string
     */
    public $userUiSkin;
    /**
     * Constructor method for GetUserInfoResult
     * @uses GetUserInfoResult::setAccessibilityMode()
     * @uses GetUserInfoResult::setChatterExternal()
     * @uses GetUserInfoResult::setCurrencySymbol()
     * @uses GetUserInfoResult::setOrgAttachmentFileSizeLimit()
     * @uses GetUserInfoResult::setOrgDefaultCurrencyIsoCode()
     * @uses GetUserInfoResult::setOrgDefaultCurrencyLocale()
     * @uses GetUserInfoResult::setOrgDisallowHtmlAttachments()
     * @uses GetUserInfoResult::setOrgHasPersonAccounts()
     * @uses GetUserInfoResult::setOrganizationId()
     * @uses GetUserInfoResult::setOrganizationMultiCurrency()
     * @uses GetUserInfoResult::setOrganizationName()
     * @uses GetUserInfoResult::setProfileId()
     * @uses GetUserInfoResult::setRoleId()
     * @uses GetUserInfoResult::setSessionSecondsValid()
     * @uses GetUserInfoResult::setUserDefaultCurrencyIsoCode()
     * @uses GetUserInfoResult::setUserEmail()
     * @uses GetUserInfoResult::setUserFullName()
     * @uses GetUserInfoResult::setUserId()
     * @uses GetUserInfoResult::setUserLanguage()
     * @uses GetUserInfoResult::setUserLocale()
     * @uses GetUserInfoResult::setUserName()
     * @uses GetUserInfoResult::setUserTimeZone()
     * @uses GetUserInfoResult::setUserType()
     * @uses GetUserInfoResult::setUserUiSkin()
     * @param bool $accessibilityMode
     * @param bool $chatterExternal
     * @param string $currencySymbol
     * @param int $orgAttachmentFileSizeLimit
     * @param string $orgDefaultCurrencyIsoCode
     * @param string $orgDefaultCurrencyLocale
     * @param bool $orgDisallowHtmlAttachments
     * @param bool $orgHasPersonAccounts
     * @param string $organizationId
     * @param bool $organizationMultiCurrency
     * @param string $organizationName
     * @param string $profileId
     * @param string $roleId
     * @param int $sessionSecondsValid
     * @param string $userDefaultCurrencyIsoCode
     * @param string $userEmail
     * @param string $userFullName
     * @param string $userId
     * @param string $userLanguage
     * @param string $userLocale
     * @param string $userName
     * @param string $userTimeZone
     * @param string $userType
     * @param string $userUiSkin
     */
    public function __construct($accessibilityMode = null, $chatterExternal = null, $currencySymbol = null, $orgAttachmentFileSizeLimit = null, $orgDefaultCurrencyIsoCode = null, $orgDefaultCurrencyLocale = null, $orgDisallowHtmlAttachments = null, $orgHasPersonAccounts = null, $organizationId = null, $organizationMultiCurrency = null, $organizationName = null, $profileId = null, $roleId = null, $sessionSecondsValid = null, $userDefaultCurrencyIsoCode = null, $userEmail = null, $userFullName = null, $userId = null, $userLanguage = null, $userLocale = null, $userName = null, $userTimeZone = null, $userType = null, $userUiSkin = null)
    {
        $this
            ->setAccessibilityMode($accessibilityMode)
            ->setChatterExternal($chatterExternal)
            ->setCurrencySymbol($currencySymbol)
            ->setOrgAttachmentFileSizeLimit($orgAttachmentFileSizeLimit)
            ->setOrgDefaultCurrencyIsoCode($orgDefaultCurrencyIsoCode)
            ->setOrgDefaultCurrencyLocale($orgDefaultCurrencyLocale)
            ->setOrgDisallowHtmlAttachments($orgDisallowHtmlAttachments)
            ->setOrgHasPersonAccounts($orgHasPersonAccounts)
            ->setOrganizationId($organizationId)
            ->setOrganizationMultiCurrency($organizationMultiCurrency)
            ->setOrganizationName($organizationName)
            ->setProfileId($profileId)
            ->setRoleId($roleId)
            ->setSessionSecondsValid($sessionSecondsValid)
            ->setUserDefaultCurrencyIsoCode($userDefaultCurrencyIsoCode)
            ->setUserEmail($userEmail)
            ->setUserFullName($userFullName)
            ->setUserId($userId)
            ->setUserLanguage($userLanguage)
            ->setUserLocale($userLocale)
            ->setUserName($userName)
            ->setUserTimeZone($userTimeZone)
            ->setUserType($userType)
            ->setUserUiSkin($userUiSkin);
    }
    /**
     * Get accessibilityMode value
     * @return bool|null
     */
    public function getAccessibilityMode()
    {
        return $this->accessibilityMode;
    }
    /**
     * Set accessibilityMode value
     * @param bool $accessibilityMode
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setAccessibilityMode($accessibilityMode = null)
    {
        // validation for constraint: boolean
        if (!is_null($accessibilityMode) && !is_bool($accessibilityMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accessibilityMode, true), gettype($accessibilityMode)), __LINE__);
        }
        $this->accessibilityMode = $accessibilityMode;
        return $this;
    }
    /**
     * Get chatterExternal value
     * @return bool|null
     */
    public function getChatterExternal()
    {
        return $this->chatterExternal;
    }
    /**
     * Set chatterExternal value
     * @param bool $chatterExternal
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setChatterExternal($chatterExternal = null)
    {
        // validation for constraint: boolean
        if (!is_null($chatterExternal) && !is_bool($chatterExternal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chatterExternal, true), gettype($chatterExternal)), __LINE__);
        }
        $this->chatterExternal = $chatterExternal;
        return $this;
    }
    /**
     * Get currencySymbol value
     * @return string|null
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }
    /**
     * Set currencySymbol value
     * @param string $currencySymbol
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setCurrencySymbol($currencySymbol = null)
    {
        // validation for constraint: string
        if (!is_null($currencySymbol) && !is_string($currencySymbol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencySymbol, true), gettype($currencySymbol)), __LINE__);
        }
        $this->currencySymbol = $currencySymbol;
        return $this;
    }
    /**
     * Get orgAttachmentFileSizeLimit value
     * @return int|null
     */
    public function getOrgAttachmentFileSizeLimit()
    {
        return $this->orgAttachmentFileSizeLimit;
    }
    /**
     * Set orgAttachmentFileSizeLimit value
     * @param int $orgAttachmentFileSizeLimit
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setOrgAttachmentFileSizeLimit($orgAttachmentFileSizeLimit = null)
    {
        // validation for constraint: int
        if (!is_null($orgAttachmentFileSizeLimit) && !(is_int($orgAttachmentFileSizeLimit) || ctype_digit($orgAttachmentFileSizeLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgAttachmentFileSizeLimit, true), gettype($orgAttachmentFileSizeLimit)), __LINE__);
        }
        $this->orgAttachmentFileSizeLimit = $orgAttachmentFileSizeLimit;
        return $this;
    }
    /**
     * Get orgDefaultCurrencyIsoCode value
     * @return string|null
     */
    public function getOrgDefaultCurrencyIsoCode()
    {
        return $this->orgDefaultCurrencyIsoCode;
    }
    /**
     * Set orgDefaultCurrencyIsoCode value
     * @param string $orgDefaultCurrencyIsoCode
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setOrgDefaultCurrencyIsoCode($orgDefaultCurrencyIsoCode = null)
    {
        // validation for constraint: string
        if (!is_null($orgDefaultCurrencyIsoCode) && !is_string($orgDefaultCurrencyIsoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgDefaultCurrencyIsoCode, true), gettype($orgDefaultCurrencyIsoCode)), __LINE__);
        }
        $this->orgDefaultCurrencyIsoCode = $orgDefaultCurrencyIsoCode;
        return $this;
    }
    /**
     * Get orgDefaultCurrencyLocale value
     * @return string|null
     */
    public function getOrgDefaultCurrencyLocale()
    {
        return $this->orgDefaultCurrencyLocale;
    }
    /**
     * Set orgDefaultCurrencyLocale value
     * @param string $orgDefaultCurrencyLocale
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setOrgDefaultCurrencyLocale($orgDefaultCurrencyLocale = null)
    {
        // validation for constraint: string
        if (!is_null($orgDefaultCurrencyLocale) && !is_string($orgDefaultCurrencyLocale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgDefaultCurrencyLocale, true), gettype($orgDefaultCurrencyLocale)), __LINE__);
        }
        $this->orgDefaultCurrencyLocale = $orgDefaultCurrencyLocale;
        return $this;
    }
    /**
     * Get orgDisallowHtmlAttachments value
     * @return bool|null
     */
    public function getOrgDisallowHtmlAttachments()
    {
        return $this->orgDisallowHtmlAttachments;
    }
    /**
     * Set orgDisallowHtmlAttachments value
     * @param bool $orgDisallowHtmlAttachments
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setOrgDisallowHtmlAttachments($orgDisallowHtmlAttachments = null)
    {
        // validation for constraint: boolean
        if (!is_null($orgDisallowHtmlAttachments) && !is_bool($orgDisallowHtmlAttachments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orgDisallowHtmlAttachments, true), gettype($orgDisallowHtmlAttachments)), __LINE__);
        }
        $this->orgDisallowHtmlAttachments = $orgDisallowHtmlAttachments;
        return $this;
    }
    /**
     * Get orgHasPersonAccounts value
     * @return bool|null
     */
    public function getOrgHasPersonAccounts()
    {
        return $this->orgHasPersonAccounts;
    }
    /**
     * Set orgHasPersonAccounts value
     * @param bool $orgHasPersonAccounts
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setOrgHasPersonAccounts($orgHasPersonAccounts = null)
    {
        // validation for constraint: boolean
        if (!is_null($orgHasPersonAccounts) && !is_bool($orgHasPersonAccounts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orgHasPersonAccounts, true), gettype($orgHasPersonAccounts)), __LINE__);
        }
        $this->orgHasPersonAccounts = $orgHasPersonAccounts;
        return $this;
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
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
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
     * Get organizationMultiCurrency value
     * @return bool|null
     */
    public function getOrganizationMultiCurrency()
    {
        return $this->organizationMultiCurrency;
    }
    /**
     * Set organizationMultiCurrency value
     * @param bool $organizationMultiCurrency
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setOrganizationMultiCurrency($organizationMultiCurrency = null)
    {
        // validation for constraint: boolean
        if (!is_null($organizationMultiCurrency) && !is_bool($organizationMultiCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($organizationMultiCurrency, true), gettype($organizationMultiCurrency)), __LINE__);
        }
        $this->organizationMultiCurrency = $organizationMultiCurrency;
        return $this;
    }
    /**
     * Get organizationName value
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }
    /**
     * Set organizationName value
     * @param string $organizationName
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setOrganizationName($organizationName = null)
    {
        // validation for constraint: string
        if (!is_null($organizationName) && !is_string($organizationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationName, true), gettype($organizationName)), __LINE__);
        }
        $this->organizationName = $organizationName;
        return $this;
    }
    /**
     * Get profileId value
     * @return string|null
     */
    public function getProfileId()
    {
        return $this->profileId;
    }
    /**
     * Set profileId value
     * @param string $profileId
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setProfileId($profileId = null)
    {
        // validation for constraint: string
        if (!is_null($profileId) && !is_string($profileId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileId, true), gettype($profileId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($profileId) && mb_strlen($profileId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($profileId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($profileId) && !preg_match('/[a-zA-Z0-9]{18}/', $profileId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($profileId, true)), __LINE__);
        }
        $this->profileId = $profileId;
        return $this;
    }
    /**
     * Get roleId value
     * @return string|null
     */
    public function getRoleId()
    {
        return $this->roleId;
    }
    /**
     * Set roleId value
     * @param string $roleId
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setRoleId($roleId = null)
    {
        // validation for constraint: string
        if (!is_null($roleId) && !is_string($roleId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roleId, true), gettype($roleId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($roleId) && mb_strlen($roleId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($roleId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($roleId) && !preg_match('/[a-zA-Z0-9]{18}/', $roleId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($roleId, true)), __LINE__);
        }
        $this->roleId = $roleId;
        return $this;
    }
    /**
     * Get sessionSecondsValid value
     * @return int|null
     */
    public function getSessionSecondsValid()
    {
        return $this->sessionSecondsValid;
    }
    /**
     * Set sessionSecondsValid value
     * @param int $sessionSecondsValid
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setSessionSecondsValid($sessionSecondsValid = null)
    {
        // validation for constraint: int
        if (!is_null($sessionSecondsValid) && !(is_int($sessionSecondsValid) || ctype_digit($sessionSecondsValid))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sessionSecondsValid, true), gettype($sessionSecondsValid)), __LINE__);
        }
        $this->sessionSecondsValid = $sessionSecondsValid;
        return $this;
    }
    /**
     * Get userDefaultCurrencyIsoCode value
     * @return string|null
     */
    public function getUserDefaultCurrencyIsoCode()
    {
        return $this->userDefaultCurrencyIsoCode;
    }
    /**
     * Set userDefaultCurrencyIsoCode value
     * @param string $userDefaultCurrencyIsoCode
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserDefaultCurrencyIsoCode($userDefaultCurrencyIsoCode = null)
    {
        // validation for constraint: string
        if (!is_null($userDefaultCurrencyIsoCode) && !is_string($userDefaultCurrencyIsoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userDefaultCurrencyIsoCode, true), gettype($userDefaultCurrencyIsoCode)), __LINE__);
        }
        $this->userDefaultCurrencyIsoCode = $userDefaultCurrencyIsoCode;
        return $this;
    }
    /**
     * Get userEmail value
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }
    /**
     * Set userEmail value
     * @param string $userEmail
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserEmail($userEmail = null)
    {
        // validation for constraint: string
        if (!is_null($userEmail) && !is_string($userEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userEmail, true), gettype($userEmail)), __LINE__);
        }
        $this->userEmail = $userEmail;
        return $this;
    }
    /**
     * Get userFullName value
     * @return string|null
     */
    public function getUserFullName()
    {
        return $this->userFullName;
    }
    /**
     * Set userFullName value
     * @param string $userFullName
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserFullName($userFullName = null)
    {
        // validation for constraint: string
        if (!is_null($userFullName) && !is_string($userFullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userFullName, true), gettype($userFullName)), __LINE__);
        }
        $this->userFullName = $userFullName;
        return $this;
    }
    /**
     * Get userId value
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param string $userId
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($userId) && mb_strlen($userId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($userId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($userId) && !preg_match('/[a-zA-Z0-9]{18}/', $userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($userId, true)), __LINE__);
        }
        $this->userId = $userId;
        return $this;
    }
    /**
     * Get userLanguage value
     * @return string|null
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }
    /**
     * Set userLanguage value
     * @param string $userLanguage
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserLanguage($userLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($userLanguage) && !is_string($userLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLanguage, true), gettype($userLanguage)), __LINE__);
        }
        $this->userLanguage = $userLanguage;
        return $this;
    }
    /**
     * Get userLocale value
     * @return string|null
     */
    public function getUserLocale()
    {
        return $this->userLocale;
    }
    /**
     * Set userLocale value
     * @param string $userLocale
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserLocale($userLocale = null)
    {
        // validation for constraint: string
        if (!is_null($userLocale) && !is_string($userLocale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLocale, true), gettype($userLocale)), __LINE__);
        }
        $this->userLocale = $userLocale;
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        return $this;
    }
    /**
     * Get userTimeZone value
     * @return string|null
     */
    public function getUserTimeZone()
    {
        return $this->userTimeZone;
    }
    /**
     * Set userTimeZone value
     * @param string $userTimeZone
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserTimeZone($userTimeZone = null)
    {
        // validation for constraint: string
        if (!is_null($userTimeZone) && !is_string($userTimeZone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userTimeZone, true), gettype($userTimeZone)), __LINE__);
        }
        $this->userTimeZone = $userTimeZone;
        return $this;
    }
    /**
     * Get userType value
     * @return string|null
     */
    public function getUserType()
    {
        return $this->userType;
    }
    /**
     * Set userType value
     * @param string $userType
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserType($userType = null)
    {
        // validation for constraint: string
        if (!is_null($userType) && !is_string($userType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userType, true), gettype($userType)), __LINE__);
        }
        $this->userType = $userType;
        return $this;
    }
    /**
     * Get userUiSkin value
     * @return string|null
     */
    public function getUserUiSkin()
    {
        return $this->userUiSkin;
    }
    /**
     * Set userUiSkin value
     * @param string $userUiSkin
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public function setUserUiSkin($userUiSkin = null)
    {
        // validation for constraint: string
        if (!is_null($userUiSkin) && !is_string($userUiSkin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userUiSkin, true), gettype($userUiSkin)), __LINE__);
        }
        $this->userUiSkin = $userUiSkin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult
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
