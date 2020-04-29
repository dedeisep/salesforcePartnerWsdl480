<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageVersionHeader StructType
 * @subpackage Structs
 */
class PackageVersionHeader extends AbstractStructBase
{
    /**
     * The packageVersions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\PackageVersion[]
     */
    public $packageVersions;
    /**
     * Constructor method for PackageVersionHeader
     * @uses PackageVersionHeader::setPackageVersions()
     * @param \SFPartnerApi\v480\StructType\PackageVersion[] $packageVersions
     */
    public function __construct(array $packageVersions = array())
    {
        $this
            ->setPackageVersions($packageVersions);
    }
    /**
     * Get packageVersions value
     * @return \SFPartnerApi\v480\StructType\PackageVersion[]|null
     */
    public function getPackageVersions()
    {
        return $this->packageVersions;
    }
    /**
     * This method is responsible for validating the values passed to the setPackageVersions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPackageVersions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePackageVersionsForArrayConstraintsFromSetPackageVersions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $packageVersionHeaderPackageVersionsItem) {
            // validation for constraint: itemType
            if (!$packageVersionHeaderPackageVersionsItem instanceof \SFPartnerApi\v480\StructType\PackageVersion) {
                $invalidValues[] = is_object($packageVersionHeaderPackageVersionsItem) ? get_class($packageVersionHeaderPackageVersionsItem) : sprintf('%s(%s)', gettype($packageVersionHeaderPackageVersionsItem), var_export($packageVersionHeaderPackageVersionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The packageVersions property can only contain items of type \SFPartnerApi\v480\StructType\PackageVersion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set packageVersions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PackageVersion[] $packageVersions
     * @return \SFPartnerApi\v480\StructType\PackageVersionHeader
     */
    public function setPackageVersions(array $packageVersions = array())
    {
        // validation for constraint: array
        if ('' !== ($packageVersionsArrayErrorMessage = self::validatePackageVersionsForArrayConstraintsFromSetPackageVersions($packageVersions))) {
            throw new \InvalidArgumentException($packageVersionsArrayErrorMessage, __LINE__);
        }
        $this->packageVersions = $packageVersions;
        return $this;
    }
    /**
     * Add item to packageVersions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\PackageVersion $item
     * @return \SFPartnerApi\v480\StructType\PackageVersionHeader
     */
    public function addToPackageVersions(\SFPartnerApi\v480\StructType\PackageVersion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\PackageVersion) {
            throw new \InvalidArgumentException(sprintf('The packageVersions property can only contain items of type \SFPartnerApi\v480\StructType\PackageVersion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->packageVersions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\PackageVersionHeader
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
