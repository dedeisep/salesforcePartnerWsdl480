<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageVersion StructType
 * @subpackage Structs
 */
class PackageVersion extends AbstractStructBase
{
    /**
     * The majorNumber
     * @var int
     */
    public $majorNumber;
    /**
     * The minorNumber
     * @var int
     */
    public $minorNumber;
    /**
     * The namespace
     * @var string
     */
    public $namespace;
    /**
     * Constructor method for PackageVersion
     * @uses PackageVersion::setMajorNumber()
     * @uses PackageVersion::setMinorNumber()
     * @uses PackageVersion::setNamespace()
     * @param int $majorNumber
     * @param int $minorNumber
     * @param string $namespace
     */
    public function __construct($majorNumber = null, $minorNumber = null, $namespace = null)
    {
        $this
            ->setMajorNumber($majorNumber)
            ->setMinorNumber($minorNumber)
            ->setNamespace($namespace);
    }
    /**
     * Get majorNumber value
     * @return int|null
     */
    public function getMajorNumber()
    {
        return $this->majorNumber;
    }
    /**
     * Set majorNumber value
     * @param int $majorNumber
     * @return \SFPartnerApi\v480\StructType\PackageVersion
     */
    public function setMajorNumber($majorNumber = null)
    {
        // validation for constraint: int
        if (!is_null($majorNumber) && !(is_int($majorNumber) || ctype_digit($majorNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($majorNumber, true), gettype($majorNumber)), __LINE__);
        }
        $this->majorNumber = $majorNumber;
        return $this;
    }
    /**
     * Get minorNumber value
     * @return int|null
     */
    public function getMinorNumber()
    {
        return $this->minorNumber;
    }
    /**
     * Set minorNumber value
     * @param int $minorNumber
     * @return \SFPartnerApi\v480\StructType\PackageVersion
     */
    public function setMinorNumber($minorNumber = null)
    {
        // validation for constraint: int
        if (!is_null($minorNumber) && !(is_int($minorNumber) || ctype_digit($minorNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minorNumber, true), gettype($minorNumber)), __LINE__);
        }
        $this->minorNumber = $minorNumber;
        return $this;
    }
    /**
     * Get namespace value
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
    /**
     * Set namespace value
     * @param string $namespace
     * @return \SFPartnerApi\v480\StructType\PackageVersion
     */
    public function setNamespace($namespace = null)
    {
        // validation for constraint: string
        if (!is_null($namespace) && !is_string($namespace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namespace, true), gettype($namespace)), __LINE__);
        }
        $this->namespace = $namespace;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\PackageVersion
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
