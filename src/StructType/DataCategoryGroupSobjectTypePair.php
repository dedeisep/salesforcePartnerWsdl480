<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataCategoryGroupSobjectTypePair StructType
 * @subpackage Structs
 */
class DataCategoryGroupSobjectTypePair extends AbstractStructBase
{
    /**
     * The dataCategoryGroupName
     * @var string
     */
    public $dataCategoryGroupName;
    /**
     * The sobject
     * @var string
     */
    public $sobject;
    /**
     * Constructor method for DataCategoryGroupSobjectTypePair
     * @uses DataCategoryGroupSobjectTypePair::setDataCategoryGroupName()
     * @uses DataCategoryGroupSobjectTypePair::setSobject()
     * @param string $dataCategoryGroupName
     * @param string $sobject
     */
    public function __construct($dataCategoryGroupName = null, $sobject = null)
    {
        $this
            ->setDataCategoryGroupName($dataCategoryGroupName)
            ->setSobject($sobject);
    }
    /**
     * Get dataCategoryGroupName value
     * @return string|null
     */
    public function getDataCategoryGroupName()
    {
        return $this->dataCategoryGroupName;
    }
    /**
     * Set dataCategoryGroupName value
     * @param string $dataCategoryGroupName
     * @return \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair
     */
    public function setDataCategoryGroupName($dataCategoryGroupName = null)
    {
        // validation for constraint: string
        if (!is_null($dataCategoryGroupName) && !is_string($dataCategoryGroupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataCategoryGroupName, true), gettype($dataCategoryGroupName)), __LINE__);
        }
        $this->dataCategoryGroupName = $dataCategoryGroupName;
        return $this;
    }
    /**
     * Get sobject value
     * @return string|null
     */
    public function getSobject()
    {
        return $this->sobject;
    }
    /**
     * Set sobject value
     * @param string $sobject
     * @return \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair
     */
    public function setSobject($sobject = null)
    {
        // validation for constraint: string
        if (!is_null($sobject) && !is_string($sobject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sobject, true), gettype($sobject)), __LINE__);
        }
        $this->sobject = $sobject;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DataCategoryGroupSobjectTypePair
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
