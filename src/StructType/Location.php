<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for location StructType
 * @subpackage Structs
 */
class Location extends AbstractStructBase
{
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $latitude;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var float
     */
    public $longitude;
    /**
     * Constructor method for location
     * @uses Location::setLatitude()
     * @uses Location::setLongitude()
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($latitude = null, $longitude = null)
    {
        $this
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
    /**
     * Get latitude value
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \SFPartnerApi\v480\StructType\Location
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Get longitude value
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \SFPartnerApi\v480\StructType\Location
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\Location
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
