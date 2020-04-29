<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for describeSObjectListViews StructType
 * @subpackage Structs
 */
class DescribeSObjectListViews extends AbstractStructBase
{
    /**
     * The sObjectType
     * @var string
     */
    public $sObjectType;
    /**
     * The recentsOnly
     * @var bool
     */
    public $recentsOnly;
    /**
     * The isSoqlCompatible
     * @var string
     */
    public $isSoqlCompatible;
    /**
     * The limit
     * @var int
     */
    public $limit;
    /**
     * The offset
     * @var int
     */
    public $offset;
    /**
     * Constructor method for describeSObjectListViews
     * @uses DescribeSObjectListViews::setSObjectType()
     * @uses DescribeSObjectListViews::setRecentsOnly()
     * @uses DescribeSObjectListViews::setIsSoqlCompatible()
     * @uses DescribeSObjectListViews::setLimit()
     * @uses DescribeSObjectListViews::setOffset()
     * @param string $sObjectType
     * @param bool $recentsOnly
     * @param string $isSoqlCompatible
     * @param int $limit
     * @param int $offset
     */
    public function __construct($sObjectType = null, $recentsOnly = null, $isSoqlCompatible = null, $limit = null, $offset = null)
    {
        $this
            ->setSObjectType($sObjectType)
            ->setRecentsOnly($recentsOnly)
            ->setIsSoqlCompatible($isSoqlCompatible)
            ->setLimit($limit)
            ->setOffset($offset);
    }
    /**
     * Get sObjectType value
     * @return string|null
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }
    /**
     * Set sObjectType value
     * @param string $sObjectType
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectListViews
     */
    public function setSObjectType($sObjectType = null)
    {
        // validation for constraint: string
        if (!is_null($sObjectType) && !is_string($sObjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sObjectType, true), gettype($sObjectType)), __LINE__);
        }
        $this->sObjectType = $sObjectType;
        return $this;
    }
    /**
     * Get recentsOnly value
     * @return bool|null
     */
    public function getRecentsOnly()
    {
        return $this->recentsOnly;
    }
    /**
     * Set recentsOnly value
     * @param bool $recentsOnly
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectListViews
     */
    public function setRecentsOnly($recentsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($recentsOnly) && !is_bool($recentsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recentsOnly, true), gettype($recentsOnly)), __LINE__);
        }
        $this->recentsOnly = $recentsOnly;
        return $this;
    }
    /**
     * Get isSoqlCompatible value
     * @return string|null
     */
    public function getIsSoqlCompatible()
    {
        return $this->isSoqlCompatible;
    }
    /**
     * Set isSoqlCompatible value
     * @uses \SFPartnerApi\v480\EnumType\ListViewIsSoqlCompatible::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\ListViewIsSoqlCompatible::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $isSoqlCompatible
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectListViews
     */
    public function setIsSoqlCompatible($isSoqlCompatible = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\ListViewIsSoqlCompatible::valueIsValid($isSoqlCompatible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\ListViewIsSoqlCompatible', is_array($isSoqlCompatible) ? implode(', ', $isSoqlCompatible) : var_export($isSoqlCompatible, true), implode(', ', \SFPartnerApi\v480\EnumType\ListViewIsSoqlCompatible::getValidValues())), __LINE__);
        }
        $this->isSoqlCompatible = $isSoqlCompatible;
        return $this;
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectListViews
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
        return $this;
    }
    /**
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $offset
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectListViews
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->offset = $offset;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeSObjectListViews
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
