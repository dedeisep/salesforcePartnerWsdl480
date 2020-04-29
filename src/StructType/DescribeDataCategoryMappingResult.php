<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeDataCategoryMappingResult StructType
 * @subpackage Structs
 */
class DescribeDataCategoryMappingResult extends AbstractStructBase
{
    /**
     * The dataCategoryGroupId
     * @var string
     */
    public $dataCategoryGroupId;
    /**
     * The dataCategoryGroupLabel
     * @var string
     */
    public $dataCategoryGroupLabel;
    /**
     * The dataCategoryGroupName
     * @var string
     */
    public $dataCategoryGroupName;
    /**
     * The dataCategoryId
     * @var string
     */
    public $dataCategoryId;
    /**
     * The dataCategoryLabel
     * @var string
     */
    public $dataCategoryLabel;
    /**
     * The dataCategoryName
     * @var string
     */
    public $dataCategoryName;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The mappedEntity
     * @var string
     */
    public $mappedEntity;
    /**
     * The mappedField
     * @var string
     */
    public $mappedField;
    /**
     * Constructor method for DescribeDataCategoryMappingResult
     * @uses DescribeDataCategoryMappingResult::setDataCategoryGroupId()
     * @uses DescribeDataCategoryMappingResult::setDataCategoryGroupLabel()
     * @uses DescribeDataCategoryMappingResult::setDataCategoryGroupName()
     * @uses DescribeDataCategoryMappingResult::setDataCategoryId()
     * @uses DescribeDataCategoryMappingResult::setDataCategoryLabel()
     * @uses DescribeDataCategoryMappingResult::setDataCategoryName()
     * @uses DescribeDataCategoryMappingResult::setId()
     * @uses DescribeDataCategoryMappingResult::setMappedEntity()
     * @uses DescribeDataCategoryMappingResult::setMappedField()
     * @param string $dataCategoryGroupId
     * @param string $dataCategoryGroupLabel
     * @param string $dataCategoryGroupName
     * @param string $dataCategoryId
     * @param string $dataCategoryLabel
     * @param string $dataCategoryName
     * @param string $id
     * @param string $mappedEntity
     * @param string $mappedField
     */
    public function __construct($dataCategoryGroupId = null, $dataCategoryGroupLabel = null, $dataCategoryGroupName = null, $dataCategoryId = null, $dataCategoryLabel = null, $dataCategoryName = null, $id = null, $mappedEntity = null, $mappedField = null)
    {
        $this
            ->setDataCategoryGroupId($dataCategoryGroupId)
            ->setDataCategoryGroupLabel($dataCategoryGroupLabel)
            ->setDataCategoryGroupName($dataCategoryGroupName)
            ->setDataCategoryId($dataCategoryId)
            ->setDataCategoryLabel($dataCategoryLabel)
            ->setDataCategoryName($dataCategoryName)
            ->setId($id)
            ->setMappedEntity($mappedEntity)
            ->setMappedField($mappedField);
    }
    /**
     * Get dataCategoryGroupId value
     * @return string|null
     */
    public function getDataCategoryGroupId()
    {
        return $this->dataCategoryGroupId;
    }
    /**
     * Set dataCategoryGroupId value
     * @param string $dataCategoryGroupId
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryGroupId($dataCategoryGroupId = null)
    {
        // validation for constraint: string
        if (!is_null($dataCategoryGroupId) && !is_string($dataCategoryGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataCategoryGroupId, true), gettype($dataCategoryGroupId)), __LINE__);
        }
        $this->dataCategoryGroupId = $dataCategoryGroupId;
        return $this;
    }
    /**
     * Get dataCategoryGroupLabel value
     * @return string|null
     */
    public function getDataCategoryGroupLabel()
    {
        return $this->dataCategoryGroupLabel;
    }
    /**
     * Set dataCategoryGroupLabel value
     * @param string $dataCategoryGroupLabel
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryGroupLabel($dataCategoryGroupLabel = null)
    {
        // validation for constraint: string
        if (!is_null($dataCategoryGroupLabel) && !is_string($dataCategoryGroupLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataCategoryGroupLabel, true), gettype($dataCategoryGroupLabel)), __LINE__);
        }
        $this->dataCategoryGroupLabel = $dataCategoryGroupLabel;
        return $this;
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
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
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
     * Get dataCategoryId value
     * @return string|null
     */
    public function getDataCategoryId()
    {
        return $this->dataCategoryId;
    }
    /**
     * Set dataCategoryId value
     * @param string $dataCategoryId
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryId($dataCategoryId = null)
    {
        // validation for constraint: string
        if (!is_null($dataCategoryId) && !is_string($dataCategoryId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataCategoryId, true), gettype($dataCategoryId)), __LINE__);
        }
        $this->dataCategoryId = $dataCategoryId;
        return $this;
    }
    /**
     * Get dataCategoryLabel value
     * @return string|null
     */
    public function getDataCategoryLabel()
    {
        return $this->dataCategoryLabel;
    }
    /**
     * Set dataCategoryLabel value
     * @param string $dataCategoryLabel
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryLabel($dataCategoryLabel = null)
    {
        // validation for constraint: string
        if (!is_null($dataCategoryLabel) && !is_string($dataCategoryLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataCategoryLabel, true), gettype($dataCategoryLabel)), __LINE__);
        }
        $this->dataCategoryLabel = $dataCategoryLabel;
        return $this;
    }
    /**
     * Get dataCategoryName value
     * @return string|null
     */
    public function getDataCategoryName()
    {
        return $this->dataCategoryName;
    }
    /**
     * Set dataCategoryName value
     * @param string $dataCategoryName
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryName($dataCategoryName = null)
    {
        // validation for constraint: string
        if (!is_null($dataCategoryName) && !is_string($dataCategoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataCategoryName, true), gettype($dataCategoryName)), __LINE__);
        }
        $this->dataCategoryName = $dataCategoryName;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get mappedEntity value
     * @return string|null
     */
    public function getMappedEntity()
    {
        return $this->mappedEntity;
    }
    /**
     * Set mappedEntity value
     * @param string $mappedEntity
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
     */
    public function setMappedEntity($mappedEntity = null)
    {
        // validation for constraint: string
        if (!is_null($mappedEntity) && !is_string($mappedEntity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mappedEntity, true), gettype($mappedEntity)), __LINE__);
        }
        $this->mappedEntity = $mappedEntity;
        return $this;
    }
    /**
     * Get mappedField value
     * @return string|null
     */
    public function getMappedField()
    {
        return $this->mappedField;
    }
    /**
     * Set mappedField value
     * @param string $mappedField
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
     */
    public function setMappedField($mappedField = null)
    {
        // validation for constraint: string
        if (!is_null($mappedField) && !is_string($mappedField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mappedField, true), gettype($mappedField)), __LINE__);
        }
        $this->mappedField = $mappedField;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeDataCategoryMappingResult
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
