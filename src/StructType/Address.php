<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for address StructType
 * @subpackage Structs
 */
class Address extends Location
{
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $countryCode;
    /**
     * The geocodeAccuracy
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $geocodeAccuracy;
    /**
     * The postalCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $postalCode;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * The stateCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $stateCode;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $street;
    /**
     * Constructor method for address
     * @uses Address::setCity()
     * @uses Address::setCountry()
     * @uses Address::setCountryCode()
     * @uses Address::setGeocodeAccuracy()
     * @uses Address::setPostalCode()
     * @uses Address::setState()
     * @uses Address::setStateCode()
     * @uses Address::setStreet()
     * @param string $city
     * @param string $country
     * @param string $countryCode
     * @param string $geocodeAccuracy
     * @param string $postalCode
     * @param string $state
     * @param string $stateCode
     * @param string $street
     */
    public function __construct($city = null, $country = null, $countryCode = null, $geocodeAccuracy = null, $postalCode = null, $state = null, $stateCode = null, $street = null)
    {
        $this
            ->setCity($city)
            ->setCountry($country)
            ->setCountryCode($countryCode)
            ->setGeocodeAccuracy($geocodeAccuracy)
            ->setPostalCode($postalCode)
            ->setState($state)
            ->setStateCode($stateCode)
            ->setStreet($street);
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \SFPartnerApi\v480\StructType\Address
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \SFPartnerApi\v480\StructType\Address
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \SFPartnerApi\v480\StructType\Address
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get geocodeAccuracy value
     * @return string|null
     */
    public function getGeocodeAccuracy()
    {
        return $this->geocodeAccuracy;
    }
    /**
     * Set geocodeAccuracy value
     * @param string $geocodeAccuracy
     * @return \SFPartnerApi\v480\StructType\Address
     */
    public function setGeocodeAccuracy($geocodeAccuracy = null)
    {
        // validation for constraint: string
        if (!is_null($geocodeAccuracy) && !is_string($geocodeAccuracy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geocodeAccuracy, true), gettype($geocodeAccuracy)), __LINE__);
        }
        $this->geocodeAccuracy = $geocodeAccuracy;
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \SFPartnerApi\v480\StructType\Address
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \SFPartnerApi\v480\StructType\Address
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get stateCode value
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }
    /**
     * Set stateCode value
     * @param string $stateCode
     * @return \SFPartnerApi\v480\StructType\Address
     */
    public function setStateCode($stateCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateCode) && !is_string($stateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateCode, true), gettype($stateCode)), __LINE__);
        }
        $this->stateCode = $stateCode;
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \SFPartnerApi\v480\StructType\Address
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Address
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
