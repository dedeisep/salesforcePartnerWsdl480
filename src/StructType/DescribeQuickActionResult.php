<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeQuickActionResult StructType
 * @subpackage Structs
 */
class DescribeQuickActionResult extends AbstractStructBase
{
    /**
     * The accessLevelRequired
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $accessLevelRequired;
    /**
     * The actionEnumOrId
     * @var string
     */
    public $actionEnumOrId;
    /**
     * The canvasApplicationId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $canvasApplicationId;
    /**
     * The canvasApplicationName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $canvasApplicationName;
    /**
     * The colors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeColor[]
     */
    public $colors;
    /**
     * The contextSobjectType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contextSobjectType;
    /**
     * The defaultValues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue[]
     */
    public $defaultValues;
    /**
     * The flowDevName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $flowDevName;
    /**
     * The flowRecordIdVar
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $flowRecordIdVar;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $height;
    /**
     * The iconName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $iconName;
    /**
     * The iconUrl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $iconUrl;
    /**
     * The icons
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeIcon[]
     */
    public $icons;
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The layout
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public $layout;
    /**
     * The lightningComponentBundleId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $lightningComponentBundleId;
    /**
     * The lightningComponentBundleName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lightningComponentBundleName;
    /**
     * The lightningComponentQualifiedName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lightningComponentQualifiedName;
    /**
     * The miniIconUrl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $miniIconUrl;
    /**
     * The mobileExtensionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mobileExtensionId;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The showQuickActionLcHeader
     * @var bool
     */
    public $showQuickActionLcHeader;
    /**
     * The showQuickActionVfHeader
     * @var bool
     */
    public $showQuickActionVfHeader;
    /**
     * The targetParentField
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $targetParentField;
    /**
     * The targetRecordTypeId
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $targetRecordTypeId;
    /**
     * The targetSobjectType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $targetSobjectType;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The visualforcePageName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $visualforcePageName;
    /**
     * The visualforcePageUrl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $visualforcePageUrl;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $width;
    /**
     * Constructor method for DescribeQuickActionResult
     * @uses DescribeQuickActionResult::setAccessLevelRequired()
     * @uses DescribeQuickActionResult::setActionEnumOrId()
     * @uses DescribeQuickActionResult::setCanvasApplicationId()
     * @uses DescribeQuickActionResult::setCanvasApplicationName()
     * @uses DescribeQuickActionResult::setColors()
     * @uses DescribeQuickActionResult::setContextSobjectType()
     * @uses DescribeQuickActionResult::setDefaultValues()
     * @uses DescribeQuickActionResult::setFlowDevName()
     * @uses DescribeQuickActionResult::setFlowRecordIdVar()
     * @uses DescribeQuickActionResult::setHeight()
     * @uses DescribeQuickActionResult::setIconName()
     * @uses DescribeQuickActionResult::setIconUrl()
     * @uses DescribeQuickActionResult::setIcons()
     * @uses DescribeQuickActionResult::setLabel()
     * @uses DescribeQuickActionResult::setLayout()
     * @uses DescribeQuickActionResult::setLightningComponentBundleId()
     * @uses DescribeQuickActionResult::setLightningComponentBundleName()
     * @uses DescribeQuickActionResult::setLightningComponentQualifiedName()
     * @uses DescribeQuickActionResult::setMiniIconUrl()
     * @uses DescribeQuickActionResult::setMobileExtensionId()
     * @uses DescribeQuickActionResult::setName()
     * @uses DescribeQuickActionResult::setShowQuickActionLcHeader()
     * @uses DescribeQuickActionResult::setShowQuickActionVfHeader()
     * @uses DescribeQuickActionResult::setTargetParentField()
     * @uses DescribeQuickActionResult::setTargetRecordTypeId()
     * @uses DescribeQuickActionResult::setTargetSobjectType()
     * @uses DescribeQuickActionResult::setType()
     * @uses DescribeQuickActionResult::setVisualforcePageName()
     * @uses DescribeQuickActionResult::setVisualforcePageUrl()
     * @uses DescribeQuickActionResult::setWidth()
     * @param string $accessLevelRequired
     * @param string $actionEnumOrId
     * @param string $canvasApplicationId
     * @param string $canvasApplicationName
     * @param \SFPartnerApi\v480\StructType\DescribeColor[] $colors
     * @param string $contextSobjectType
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue[] $defaultValues
     * @param string $flowDevName
     * @param string $flowRecordIdVar
     * @param int $height
     * @param string $iconName
     * @param string $iconUrl
     * @param \SFPartnerApi\v480\StructType\DescribeIcon[] $icons
     * @param string $label
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection $layout
     * @param string $lightningComponentBundleId
     * @param string $lightningComponentBundleName
     * @param string $lightningComponentQualifiedName
     * @param string $miniIconUrl
     * @param string $mobileExtensionId
     * @param string $name
     * @param bool $showQuickActionLcHeader
     * @param bool $showQuickActionVfHeader
     * @param string $targetParentField
     * @param string $targetRecordTypeId
     * @param string $targetSobjectType
     * @param string $type
     * @param string $visualforcePageName
     * @param string $visualforcePageUrl
     * @param int $width
     */
    public function __construct($accessLevelRequired = null, $actionEnumOrId = null, $canvasApplicationId = null, $canvasApplicationName = null, array $colors = array(), $contextSobjectType = null, array $defaultValues = array(), $flowDevName = null, $flowRecordIdVar = null, $height = null, $iconName = null, $iconUrl = null, array $icons = array(), $label = null, \SFPartnerApi\v480\StructType\DescribeLayoutSection $layout = null, $lightningComponentBundleId = null, $lightningComponentBundleName = null, $lightningComponentQualifiedName = null, $miniIconUrl = null, $mobileExtensionId = null, $name = null, $showQuickActionLcHeader = null, $showQuickActionVfHeader = null, $targetParentField = null, $targetRecordTypeId = null, $targetSobjectType = null, $type = null, $visualforcePageName = null, $visualforcePageUrl = null, $width = null)
    {
        $this
            ->setAccessLevelRequired($accessLevelRequired)
            ->setActionEnumOrId($actionEnumOrId)
            ->setCanvasApplicationId($canvasApplicationId)
            ->setCanvasApplicationName($canvasApplicationName)
            ->setColors($colors)
            ->setContextSobjectType($contextSobjectType)
            ->setDefaultValues($defaultValues)
            ->setFlowDevName($flowDevName)
            ->setFlowRecordIdVar($flowRecordIdVar)
            ->setHeight($height)
            ->setIconName($iconName)
            ->setIconUrl($iconUrl)
            ->setIcons($icons)
            ->setLabel($label)
            ->setLayout($layout)
            ->setLightningComponentBundleId($lightningComponentBundleId)
            ->setLightningComponentBundleName($lightningComponentBundleName)
            ->setLightningComponentQualifiedName($lightningComponentQualifiedName)
            ->setMiniIconUrl($miniIconUrl)
            ->setMobileExtensionId($mobileExtensionId)
            ->setName($name)
            ->setShowQuickActionLcHeader($showQuickActionLcHeader)
            ->setShowQuickActionVfHeader($showQuickActionVfHeader)
            ->setTargetParentField($targetParentField)
            ->setTargetRecordTypeId($targetRecordTypeId)
            ->setTargetSobjectType($targetSobjectType)
            ->setType($type)
            ->setVisualforcePageName($visualforcePageName)
            ->setVisualforcePageUrl($visualforcePageUrl)
            ->setWidth($width);
    }
    /**
     * Get accessLevelRequired value
     * @return string|null
     */
    public function getAccessLevelRequired()
    {
        return $this->accessLevelRequired;
    }
    /**
     * Set accessLevelRequired value
     * @uses \SFPartnerApi\v480\EnumType\ShareAccessLevel::valueIsValid()
     * @uses \SFPartnerApi\v480\EnumType\ShareAccessLevel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessLevelRequired
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setAccessLevelRequired($accessLevelRequired = null)
    {
        // validation for constraint: enumeration
        if (!\SFPartnerApi\v480\EnumType\ShareAccessLevel::valueIsValid($accessLevelRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \SFPartnerApi\v480\EnumType\ShareAccessLevel', is_array($accessLevelRequired) ? implode(', ', $accessLevelRequired) : var_export($accessLevelRequired, true), implode(', ', \SFPartnerApi\v480\EnumType\ShareAccessLevel::getValidValues())), __LINE__);
        }
        $this->accessLevelRequired = $accessLevelRequired;
        return $this;
    }
    /**
     * Get actionEnumOrId value
     * @return string|null
     */
    public function getActionEnumOrId()
    {
        return $this->actionEnumOrId;
    }
    /**
     * Set actionEnumOrId value
     * @param string $actionEnumOrId
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setActionEnumOrId($actionEnumOrId = null)
    {
        // validation for constraint: string
        if (!is_null($actionEnumOrId) && !is_string($actionEnumOrId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionEnumOrId, true), gettype($actionEnumOrId)), __LINE__);
        }
        $this->actionEnumOrId = $actionEnumOrId;
        return $this;
    }
    /**
     * Get canvasApplicationId value
     * @return string|null
     */
    public function getCanvasApplicationId()
    {
        return $this->canvasApplicationId;
    }
    /**
     * Set canvasApplicationId value
     * @param string $canvasApplicationId
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setCanvasApplicationId($canvasApplicationId = null)
    {
        // validation for constraint: string
        if (!is_null($canvasApplicationId) && !is_string($canvasApplicationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($canvasApplicationId, true), gettype($canvasApplicationId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($canvasApplicationId) && mb_strlen($canvasApplicationId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($canvasApplicationId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($canvasApplicationId) && !preg_match('/[a-zA-Z0-9]{18}/', $canvasApplicationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($canvasApplicationId, true)), __LINE__);
        }
        $this->canvasApplicationId = $canvasApplicationId;
        return $this;
    }
    /**
     * Get canvasApplicationName value
     * @return string|null
     */
    public function getCanvasApplicationName()
    {
        return $this->canvasApplicationName;
    }
    /**
     * Set canvasApplicationName value
     * @param string $canvasApplicationName
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setCanvasApplicationName($canvasApplicationName = null)
    {
        // validation for constraint: string
        if (!is_null($canvasApplicationName) && !is_string($canvasApplicationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($canvasApplicationName, true), gettype($canvasApplicationName)), __LINE__);
        }
        $this->canvasApplicationName = $canvasApplicationName;
        return $this;
    }
    /**
     * Get colors value
     * @return \SFPartnerApi\v480\StructType\DescribeColor[]|null
     */
    public function getColors()
    {
        return $this->colors;
    }
    /**
     * This method is responsible for validating the values passed to the setColors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setColors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateColorsForArrayConstraintsFromSetColors(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeQuickActionResultColorsItem) {
            // validation for constraint: itemType
            if (!$describeQuickActionResultColorsItem instanceof \SFPartnerApi\v480\StructType\DescribeColor) {
                $invalidValues[] = is_object($describeQuickActionResultColorsItem) ? get_class($describeQuickActionResultColorsItem) : sprintf('%s(%s)', gettype($describeQuickActionResultColorsItem), var_export($describeQuickActionResultColorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The colors property can only contain items of type \SFPartnerApi\v480\StructType\DescribeColor, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set colors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeColor[] $colors
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setColors(array $colors = array())
    {
        // validation for constraint: array
        if ('' !== ($colorsArrayErrorMessage = self::validateColorsForArrayConstraintsFromSetColors($colors))) {
            throw new \InvalidArgumentException($colorsArrayErrorMessage, __LINE__);
        }
        $this->colors = $colors;
        return $this;
    }
    /**
     * Add item to colors value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeColor $item
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function addToColors(\SFPartnerApi\v480\StructType\DescribeColor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeColor) {
            throw new \InvalidArgumentException(sprintf('The colors property can only contain items of type \SFPartnerApi\v480\StructType\DescribeColor, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->colors[] = $item;
        return $this;
    }
    /**
     * Get contextSobjectType value
     * @return string|null
     */
    public function getContextSobjectType()
    {
        return $this->contextSobjectType;
    }
    /**
     * Set contextSobjectType value
     * @param string $contextSobjectType
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setContextSobjectType($contextSobjectType = null)
    {
        // validation for constraint: string
        if (!is_null($contextSobjectType) && !is_string($contextSobjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextSobjectType, true), gettype($contextSobjectType)), __LINE__);
        }
        $this->contextSobjectType = $contextSobjectType;
        return $this;
    }
    /**
     * Get defaultValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue[]|null
     */
    public function getDefaultValues()
    {
        return isset($this->defaultValues) ? $this->defaultValues : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDefaultValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDefaultValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDefaultValuesForArrayConstraintsFromSetDefaultValues(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeQuickActionResultDefaultValuesItem) {
            // validation for constraint: itemType
            if (!$describeQuickActionResultDefaultValuesItem instanceof \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue) {
                $invalidValues[] = is_object($describeQuickActionResultDefaultValuesItem) ? get_class($describeQuickActionResultDefaultValuesItem) : sprintf('%s(%s)', gettype($describeQuickActionResultDefaultValuesItem), var_export($describeQuickActionResultDefaultValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The defaultValues property can only contain items of type \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set defaultValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue[] $defaultValues
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setDefaultValues(array $defaultValues = array())
    {
        // validation for constraint: array
        if ('' !== ($defaultValuesArrayErrorMessage = self::validateDefaultValuesForArrayConstraintsFromSetDefaultValues($defaultValues))) {
            throw new \InvalidArgumentException($defaultValuesArrayErrorMessage, __LINE__);
        }
        if (is_null($defaultValues) || (is_array($defaultValues) && empty($defaultValues))) {
            unset($this->defaultValues);
        } else {
            $this->defaultValues = $defaultValues;
        }
        return $this;
    }
    /**
     * Add item to defaultValues value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue $item
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function addToDefaultValues(\SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue) {
            throw new \InvalidArgumentException(sprintf('The defaultValues property can only contain items of type \SFPartnerApi\v480\StructType\DescribeQuickActionDefaultValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->defaultValues[] = $item;
        return $this;
    }
    /**
     * Get flowDevName value
     * @return string|null
     */
    public function getFlowDevName()
    {
        return $this->flowDevName;
    }
    /**
     * Set flowDevName value
     * @param string $flowDevName
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setFlowDevName($flowDevName = null)
    {
        // validation for constraint: string
        if (!is_null($flowDevName) && !is_string($flowDevName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flowDevName, true), gettype($flowDevName)), __LINE__);
        }
        $this->flowDevName = $flowDevName;
        return $this;
    }
    /**
     * Get flowRecordIdVar value
     * @return string|null
     */
    public function getFlowRecordIdVar()
    {
        return $this->flowRecordIdVar;
    }
    /**
     * Set flowRecordIdVar value
     * @param string $flowRecordIdVar
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setFlowRecordIdVar($flowRecordIdVar = null)
    {
        // validation for constraint: string
        if (!is_null($flowRecordIdVar) && !is_string($flowRecordIdVar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flowRecordIdVar, true), gettype($flowRecordIdVar)), __LINE__);
        }
        $this->flowRecordIdVar = $flowRecordIdVar;
        return $this;
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        return $this;
    }
    /**
     * Get iconName value
     * @return string|null
     */
    public function getIconName()
    {
        return $this->iconName;
    }
    /**
     * Set iconName value
     * @param string $iconName
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setIconName($iconName = null)
    {
        // validation for constraint: string
        if (!is_null($iconName) && !is_string($iconName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iconName, true), gettype($iconName)), __LINE__);
        }
        $this->iconName = $iconName;
        return $this;
    }
    /**
     * Get iconUrl value
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }
    /**
     * Set iconUrl value
     * @param string $iconUrl
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setIconUrl($iconUrl = null)
    {
        // validation for constraint: string
        if (!is_null($iconUrl) && !is_string($iconUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iconUrl, true), gettype($iconUrl)), __LINE__);
        }
        $this->iconUrl = $iconUrl;
        return $this;
    }
    /**
     * Get icons value
     * @return \SFPartnerApi\v480\StructType\DescribeIcon[]|null
     */
    public function getIcons()
    {
        return $this->icons;
    }
    /**
     * This method is responsible for validating the values passed to the setIcons method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIcons method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIconsForArrayConstraintsFromSetIcons(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeQuickActionResultIconsItem) {
            // validation for constraint: itemType
            if (!$describeQuickActionResultIconsItem instanceof \SFPartnerApi\v480\StructType\DescribeIcon) {
                $invalidValues[] = is_object($describeQuickActionResultIconsItem) ? get_class($describeQuickActionResultIconsItem) : sprintf('%s(%s)', gettype($describeQuickActionResultIconsItem), var_export($describeQuickActionResultIconsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The icons property can only contain items of type \SFPartnerApi\v480\StructType\DescribeIcon, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set icons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeIcon[] $icons
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setIcons(array $icons = array())
    {
        // validation for constraint: array
        if ('' !== ($iconsArrayErrorMessage = self::validateIconsForArrayConstraintsFromSetIcons($icons))) {
            throw new \InvalidArgumentException($iconsArrayErrorMessage, __LINE__);
        }
        $this->icons = $icons;
        return $this;
    }
    /**
     * Add item to icons value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeIcon $item
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function addToIcons(\SFPartnerApi\v480\StructType\DescribeIcon $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeIcon) {
            throw new \InvalidArgumentException(sprintf('The icons property can only contain items of type \SFPartnerApi\v480\StructType\DescribeIcon, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->icons[] = $item;
        return $this;
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get layout value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection|null
     */
    public function getLayout()
    {
        return $this->layout;
    }
    /**
     * Set layout value
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection $layout
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setLayout(\SFPartnerApi\v480\StructType\DescribeLayoutSection $layout = null)
    {
        $this->layout = $layout;
        return $this;
    }
    /**
     * Get lightningComponentBundleId value
     * @return string|null
     */
    public function getLightningComponentBundleId()
    {
        return $this->lightningComponentBundleId;
    }
    /**
     * Set lightningComponentBundleId value
     * @param string $lightningComponentBundleId
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setLightningComponentBundleId($lightningComponentBundleId = null)
    {
        // validation for constraint: string
        if (!is_null($lightningComponentBundleId) && !is_string($lightningComponentBundleId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lightningComponentBundleId, true), gettype($lightningComponentBundleId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($lightningComponentBundleId) && mb_strlen($lightningComponentBundleId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($lightningComponentBundleId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($lightningComponentBundleId) && !preg_match('/[a-zA-Z0-9]{18}/', $lightningComponentBundleId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($lightningComponentBundleId, true)), __LINE__);
        }
        $this->lightningComponentBundleId = $lightningComponentBundleId;
        return $this;
    }
    /**
     * Get lightningComponentBundleName value
     * @return string|null
     */
    public function getLightningComponentBundleName()
    {
        return $this->lightningComponentBundleName;
    }
    /**
     * Set lightningComponentBundleName value
     * @param string $lightningComponentBundleName
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setLightningComponentBundleName($lightningComponentBundleName = null)
    {
        // validation for constraint: string
        if (!is_null($lightningComponentBundleName) && !is_string($lightningComponentBundleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lightningComponentBundleName, true), gettype($lightningComponentBundleName)), __LINE__);
        }
        $this->lightningComponentBundleName = $lightningComponentBundleName;
        return $this;
    }
    /**
     * Get lightningComponentQualifiedName value
     * @return string|null
     */
    public function getLightningComponentQualifiedName()
    {
        return $this->lightningComponentQualifiedName;
    }
    /**
     * Set lightningComponentQualifiedName value
     * @param string $lightningComponentQualifiedName
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setLightningComponentQualifiedName($lightningComponentQualifiedName = null)
    {
        // validation for constraint: string
        if (!is_null($lightningComponentQualifiedName) && !is_string($lightningComponentQualifiedName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lightningComponentQualifiedName, true), gettype($lightningComponentQualifiedName)), __LINE__);
        }
        $this->lightningComponentQualifiedName = $lightningComponentQualifiedName;
        return $this;
    }
    /**
     * Get miniIconUrl value
     * @return string|null
     */
    public function getMiniIconUrl()
    {
        return $this->miniIconUrl;
    }
    /**
     * Set miniIconUrl value
     * @param string $miniIconUrl
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setMiniIconUrl($miniIconUrl = null)
    {
        // validation for constraint: string
        if (!is_null($miniIconUrl) && !is_string($miniIconUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miniIconUrl, true), gettype($miniIconUrl)), __LINE__);
        }
        $this->miniIconUrl = $miniIconUrl;
        return $this;
    }
    /**
     * Get mobileExtensionId value
     * @return string|null
     */
    public function getMobileExtensionId()
    {
        return $this->mobileExtensionId;
    }
    /**
     * Set mobileExtensionId value
     * @param string $mobileExtensionId
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setMobileExtensionId($mobileExtensionId = null)
    {
        // validation for constraint: string
        if (!is_null($mobileExtensionId) && !is_string($mobileExtensionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileExtensionId, true), gettype($mobileExtensionId)), __LINE__);
        }
        $this->mobileExtensionId = $mobileExtensionId;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get showQuickActionLcHeader value
     * @return bool|null
     */
    public function getShowQuickActionLcHeader()
    {
        return $this->showQuickActionLcHeader;
    }
    /**
     * Set showQuickActionLcHeader value
     * @param bool $showQuickActionLcHeader
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setShowQuickActionLcHeader($showQuickActionLcHeader = null)
    {
        // validation for constraint: boolean
        if (!is_null($showQuickActionLcHeader) && !is_bool($showQuickActionLcHeader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showQuickActionLcHeader, true), gettype($showQuickActionLcHeader)), __LINE__);
        }
        $this->showQuickActionLcHeader = $showQuickActionLcHeader;
        return $this;
    }
    /**
     * Get showQuickActionVfHeader value
     * @return bool|null
     */
    public function getShowQuickActionVfHeader()
    {
        return $this->showQuickActionVfHeader;
    }
    /**
     * Set showQuickActionVfHeader value
     * @param bool $showQuickActionVfHeader
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setShowQuickActionVfHeader($showQuickActionVfHeader = null)
    {
        // validation for constraint: boolean
        if (!is_null($showQuickActionVfHeader) && !is_bool($showQuickActionVfHeader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showQuickActionVfHeader, true), gettype($showQuickActionVfHeader)), __LINE__);
        }
        $this->showQuickActionVfHeader = $showQuickActionVfHeader;
        return $this;
    }
    /**
     * Get targetParentField value
     * @return string|null
     */
    public function getTargetParentField()
    {
        return $this->targetParentField;
    }
    /**
     * Set targetParentField value
     * @param string $targetParentField
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setTargetParentField($targetParentField = null)
    {
        // validation for constraint: string
        if (!is_null($targetParentField) && !is_string($targetParentField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetParentField, true), gettype($targetParentField)), __LINE__);
        }
        $this->targetParentField = $targetParentField;
        return $this;
    }
    /**
     * Get targetRecordTypeId value
     * @return string|null
     */
    public function getTargetRecordTypeId()
    {
        return $this->targetRecordTypeId;
    }
    /**
     * Set targetRecordTypeId value
     * @param string $targetRecordTypeId
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setTargetRecordTypeId($targetRecordTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($targetRecordTypeId) && !is_string($targetRecordTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetRecordTypeId, true), gettype($targetRecordTypeId)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($targetRecordTypeId) && mb_strlen($targetRecordTypeId) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($targetRecordTypeId)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($targetRecordTypeId) && !preg_match('/[a-zA-Z0-9]{18}/', $targetRecordTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($targetRecordTypeId, true)), __LINE__);
        }
        $this->targetRecordTypeId = $targetRecordTypeId;
        return $this;
    }
    /**
     * Get targetSobjectType value
     * @return string|null
     */
    public function getTargetSobjectType()
    {
        return $this->targetSobjectType;
    }
    /**
     * Set targetSobjectType value
     * @param string $targetSobjectType
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setTargetSobjectType($targetSobjectType = null)
    {
        // validation for constraint: string
        if (!is_null($targetSobjectType) && !is_string($targetSobjectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetSobjectType, true), gettype($targetSobjectType)), __LINE__);
        }
        $this->targetSobjectType = $targetSobjectType;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get visualforcePageName value
     * @return string|null
     */
    public function getVisualforcePageName()
    {
        return $this->visualforcePageName;
    }
    /**
     * Set visualforcePageName value
     * @param string $visualforcePageName
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setVisualforcePageName($visualforcePageName = null)
    {
        // validation for constraint: string
        if (!is_null($visualforcePageName) && !is_string($visualforcePageName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($visualforcePageName, true), gettype($visualforcePageName)), __LINE__);
        }
        $this->visualforcePageName = $visualforcePageName;
        return $this;
    }
    /**
     * Get visualforcePageUrl value
     * @return string|null
     */
    public function getVisualforcePageUrl()
    {
        return $this->visualforcePageUrl;
    }
    /**
     * Set visualforcePageUrl value
     * @param string $visualforcePageUrl
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setVisualforcePageUrl($visualforcePageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($visualforcePageUrl) && !is_string($visualforcePageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($visualforcePageUrl, true), gettype($visualforcePageUrl)), __LINE__);
        }
        $this->visualforcePageUrl = $visualforcePageUrl;
        return $this;
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionResult
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
