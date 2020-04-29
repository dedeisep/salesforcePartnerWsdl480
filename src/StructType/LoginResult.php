<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginResult StructType
 * @subpackage Structs
 */
class LoginResult extends AbstractStructBase
{
    /**
     * The metadataServerUrl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $metadataServerUrl;
    /**
     * The passwordExpired
     * @var bool
     */
    public $passwordExpired;
    /**
     * The sandbox
     * @var bool
     */
    public $sandbox;
    /**
     * The serverUrl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $serverUrl;
    /**
     * The sessionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sessionId;
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $userId;
    /**
     * The userInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\GetUserInfoResult
     */
    public $userInfo;
    /**
     * Constructor method for LoginResult
     * @uses LoginResult::setMetadataServerUrl()
     * @uses LoginResult::setPasswordExpired()
     * @uses LoginResult::setSandbox()
     * @uses LoginResult::setServerUrl()
     * @uses LoginResult::setSessionId()
     * @uses LoginResult::setUserId()
     * @uses LoginResult::setUserInfo()
     * @param string $metadataServerUrl
     * @param bool $passwordExpired
     * @param bool $sandbox
     * @param string $serverUrl
     * @param string $sessionId
     * @param string $userId
     * @param \SFPartnerApi\v480\StructType\GetUserInfoResult $userInfo
     */
    public function __construct($metadataServerUrl = null, $passwordExpired = null, $sandbox = null, $serverUrl = null, $sessionId = null, $userId = null, \SFPartnerApi\v480\StructType\GetUserInfoResult $userInfo = null)
    {
        $this
            ->setMetadataServerUrl($metadataServerUrl)
            ->setPasswordExpired($passwordExpired)
            ->setSandbox($sandbox)
            ->setServerUrl($serverUrl)
            ->setSessionId($sessionId)
            ->setUserId($userId)
            ->setUserInfo($userInfo);
    }
    /**
     * Get metadataServerUrl value
     * @return string|null
     */
    public function getMetadataServerUrl()
    {
        return $this->metadataServerUrl;
    }
    /**
     * Set metadataServerUrl value
     * @param string $metadataServerUrl
     * @return \SFPartnerApi\v480\StructType\LoginResult
     */
    public function setMetadataServerUrl($metadataServerUrl = null)
    {
        // validation for constraint: string
        if (!is_null($metadataServerUrl) && !is_string($metadataServerUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($metadataServerUrl, true), gettype($metadataServerUrl)), __LINE__);
        }
        $this->metadataServerUrl = $metadataServerUrl;
        return $this;
    }
    /**
     * Get passwordExpired value
     * @return bool|null
     */
    public function getPasswordExpired()
    {
        return $this->passwordExpired;
    }
    /**
     * Set passwordExpired value
     * @param bool $passwordExpired
     * @return \SFPartnerApi\v480\StructType\LoginResult
     */
    public function setPasswordExpired($passwordExpired = null)
    {
        // validation for constraint: boolean
        if (!is_null($passwordExpired) && !is_bool($passwordExpired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passwordExpired, true), gettype($passwordExpired)), __LINE__);
        }
        $this->passwordExpired = $passwordExpired;
        return $this;
    }
    /**
     * Get sandbox value
     * @return bool|null
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }
    /**
     * Set sandbox value
     * @param bool $sandbox
     * @return \SFPartnerApi\v480\StructType\LoginResult
     */
    public function setSandbox($sandbox = null)
    {
        // validation for constraint: boolean
        if (!is_null($sandbox) && !is_bool($sandbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sandbox, true), gettype($sandbox)), __LINE__);
        }
        $this->sandbox = $sandbox;
        return $this;
    }
    /**
     * Get serverUrl value
     * @return string|null
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }
    /**
     * Set serverUrl value
     * @param string $serverUrl
     * @return \SFPartnerApi\v480\StructType\LoginResult
     */
    public function setServerUrl($serverUrl = null)
    {
        // validation for constraint: string
        if (!is_null($serverUrl) && !is_string($serverUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverUrl, true), gettype($serverUrl)), __LINE__);
        }
        $this->serverUrl = $serverUrl;
        return $this;
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $sessionId
     * @return \SFPartnerApi\v480\StructType\LoginResult
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
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
     * @return \SFPartnerApi\v480\StructType\LoginResult
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
     * Get userInfo value
     * @return \SFPartnerApi\v480\StructType\GetUserInfoResult|null
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }
    /**
     * Set userInfo value
     * @param \SFPartnerApi\v480\StructType\GetUserInfoResult $userInfo
     * @return \SFPartnerApi\v480\StructType\LoginResult
     */
    public function setUserInfo(\SFPartnerApi\v480\StructType\GetUserInfoResult $userInfo = null)
    {
        $this->userInfo = $userInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\LoginResult
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
