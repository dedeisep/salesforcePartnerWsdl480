<?php

namespace SFPartnerApi\v480\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescribeLayout StructType
 * @subpackage Structs
 */
class DescribeLayout extends AbstractStructBase
{
    /**
     * The buttonLayoutSection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutButtonSection
     */
    public $buttonLayoutSection;
    /**
     * The detailLayoutSections
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutSection[]
     */
    public $detailLayoutSections;
    /**
     * The editLayoutSections
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutSection[]
     */
    public $editLayoutSections;
    /**
     * The feedView
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutFeedView
     */
    public $feedView;
    /**
     * The highlightsPanelLayoutSection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutSection
     */
    public $highlightsPanelLayoutSection;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 18
     * - nillable: true
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $id;
    /**
     * The quickActionList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeQuickActionListResult
     */
    public $quickActionList;
    /**
     * The relatedContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RelatedContent
     */
    public $relatedContent;
    /**
     * The relatedLists
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\RelatedList[]
     */
    public $relatedLists;
    /**
     * The saveOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption[]
     */
    public $saveOptions;
    /**
     * Constructor method for DescribeLayout
     * @uses DescribeLayout::setButtonLayoutSection()
     * @uses DescribeLayout::setDetailLayoutSections()
     * @uses DescribeLayout::setEditLayoutSections()
     * @uses DescribeLayout::setFeedView()
     * @uses DescribeLayout::setHighlightsPanelLayoutSection()
     * @uses DescribeLayout::setId()
     * @uses DescribeLayout::setQuickActionList()
     * @uses DescribeLayout::setRelatedContent()
     * @uses DescribeLayout::setRelatedLists()
     * @uses DescribeLayout::setSaveOptions()
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButtonSection $buttonLayoutSection
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection[] $detailLayoutSections
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection[] $editLayoutSections
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutFeedView $feedView
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection $highlightsPanelLayoutSection
     * @param string $id
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionListResult $quickActionList
     * @param \SFPartnerApi\v480\StructType\RelatedContent $relatedContent
     * @param \SFPartnerApi\v480\StructType\RelatedList[] $relatedLists
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption[] $saveOptions
     */
    public function __construct(\SFPartnerApi\v480\StructType\DescribeLayoutButtonSection $buttonLayoutSection = null, array $detailLayoutSections = array(), array $editLayoutSections = array(), \SFPartnerApi\v480\StructType\DescribeLayoutFeedView $feedView = null, \SFPartnerApi\v480\StructType\DescribeLayoutSection $highlightsPanelLayoutSection = null, $id = null, \SFPartnerApi\v480\StructType\DescribeQuickActionListResult $quickActionList = null, \SFPartnerApi\v480\StructType\RelatedContent $relatedContent = null, array $relatedLists = array(), array $saveOptions = array())
    {
        $this
            ->setButtonLayoutSection($buttonLayoutSection)
            ->setDetailLayoutSections($detailLayoutSections)
            ->setEditLayoutSections($editLayoutSections)
            ->setFeedView($feedView)
            ->setHighlightsPanelLayoutSection($highlightsPanelLayoutSection)
            ->setId($id)
            ->setQuickActionList($quickActionList)
            ->setRelatedContent($relatedContent)
            ->setRelatedLists($relatedLists)
            ->setSaveOptions($saveOptions);
    }
    /**
     * Get buttonLayoutSection value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutButtonSection|null
     */
    public function getButtonLayoutSection()
    {
        return $this->buttonLayoutSection;
    }
    /**
     * Set buttonLayoutSection value
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutButtonSection $buttonLayoutSection
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setButtonLayoutSection(\SFPartnerApi\v480\StructType\DescribeLayoutButtonSection $buttonLayoutSection = null)
    {
        $this->buttonLayoutSection = $buttonLayoutSection;
        return $this;
    }
    /**
     * Get detailLayoutSections value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection[]|null
     */
    public function getDetailLayoutSections()
    {
        return $this->detailLayoutSections;
    }
    /**
     * This method is responsible for validating the values passed to the setDetailLayoutSections method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailLayoutSections method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailLayoutSectionsForArrayConstraintsFromSetDetailLayoutSections(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutDetailLayoutSectionsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutDetailLayoutSectionsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutSection) {
                $invalidValues[] = is_object($describeLayoutDetailLayoutSectionsItem) ? get_class($describeLayoutDetailLayoutSectionsItem) : sprintf('%s(%s)', gettype($describeLayoutDetailLayoutSectionsItem), var_export($describeLayoutDetailLayoutSectionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The detailLayoutSections property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutSection, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set detailLayoutSections value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection[] $detailLayoutSections
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setDetailLayoutSections(array $detailLayoutSections = array())
    {
        // validation for constraint: array
        if ('' !== ($detailLayoutSectionsArrayErrorMessage = self::validateDetailLayoutSectionsForArrayConstraintsFromSetDetailLayoutSections($detailLayoutSections))) {
            throw new \InvalidArgumentException($detailLayoutSectionsArrayErrorMessage, __LINE__);
        }
        $this->detailLayoutSections = $detailLayoutSections;
        return $this;
    }
    /**
     * Add item to detailLayoutSections value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function addToDetailLayoutSections(\SFPartnerApi\v480\StructType\DescribeLayoutSection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutSection) {
            throw new \InvalidArgumentException(sprintf('The detailLayoutSections property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutSection, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->detailLayoutSections[] = $item;
        return $this;
    }
    /**
     * Get editLayoutSections value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection[]|null
     */
    public function getEditLayoutSections()
    {
        return $this->editLayoutSections;
    }
    /**
     * This method is responsible for validating the values passed to the setEditLayoutSections method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEditLayoutSections method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEditLayoutSectionsForArrayConstraintsFromSetEditLayoutSections(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutEditLayoutSectionsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutEditLayoutSectionsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutSection) {
                $invalidValues[] = is_object($describeLayoutEditLayoutSectionsItem) ? get_class($describeLayoutEditLayoutSectionsItem) : sprintf('%s(%s)', gettype($describeLayoutEditLayoutSectionsItem), var_export($describeLayoutEditLayoutSectionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The editLayoutSections property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutSection, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set editLayoutSections value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection[] $editLayoutSections
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setEditLayoutSections(array $editLayoutSections = array())
    {
        // validation for constraint: array
        if ('' !== ($editLayoutSectionsArrayErrorMessage = self::validateEditLayoutSectionsForArrayConstraintsFromSetEditLayoutSections($editLayoutSections))) {
            throw new \InvalidArgumentException($editLayoutSectionsArrayErrorMessage, __LINE__);
        }
        $this->editLayoutSections = $editLayoutSections;
        return $this;
    }
    /**
     * Add item to editLayoutSections value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function addToEditLayoutSections(\SFPartnerApi\v480\StructType\DescribeLayoutSection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutSection) {
            throw new \InvalidArgumentException(sprintf('The editLayoutSections property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutSection, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->editLayoutSections[] = $item;
        return $this;
    }
    /**
     * Get feedView value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutFeedView|null
     */
    public function getFeedView()
    {
        return $this->feedView;
    }
    /**
     * Set feedView value
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutFeedView $feedView
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setFeedView(\SFPartnerApi\v480\StructType\DescribeLayoutFeedView $feedView = null)
    {
        $this->feedView = $feedView;
        return $this;
    }
    /**
     * Get highlightsPanelLayoutSection value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSection|null
     */
    public function getHighlightsPanelLayoutSection()
    {
        return $this->highlightsPanelLayoutSection;
    }
    /**
     * Set highlightsPanelLayoutSection value
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSection $highlightsPanelLayoutSection
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setHighlightsPanelLayoutSection(\SFPartnerApi\v480\StructType\DescribeLayoutSection $highlightsPanelLayoutSection = null)
    {
        $this->highlightsPanelLayoutSection = $highlightsPanelLayoutSection;
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
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: length(18)
        if (!is_null($id) && mb_strlen($id) !== 18) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 18', mb_strlen($id)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{18})
        if (!is_null($id) && !preg_match('/[a-zA-Z0-9]{18}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [a-zA-Z0-9]{18}', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get quickActionList value
     * @return \SFPartnerApi\v480\StructType\DescribeQuickActionListResult|null
     */
    public function getQuickActionList()
    {
        return $this->quickActionList;
    }
    /**
     * Set quickActionList value
     * @param \SFPartnerApi\v480\StructType\DescribeQuickActionListResult $quickActionList
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setQuickActionList(\SFPartnerApi\v480\StructType\DescribeQuickActionListResult $quickActionList = null)
    {
        $this->quickActionList = $quickActionList;
        return $this;
    }
    /**
     * Get relatedContent value
     * @return \SFPartnerApi\v480\StructType\RelatedContent|null
     */
    public function getRelatedContent()
    {
        return $this->relatedContent;
    }
    /**
     * Set relatedContent value
     * @param \SFPartnerApi\v480\StructType\RelatedContent $relatedContent
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setRelatedContent(\SFPartnerApi\v480\StructType\RelatedContent $relatedContent = null)
    {
        $this->relatedContent = $relatedContent;
        return $this;
    }
    /**
     * Get relatedLists value
     * @return \SFPartnerApi\v480\StructType\RelatedList[]|null
     */
    public function getRelatedLists()
    {
        return $this->relatedLists;
    }
    /**
     * This method is responsible for validating the values passed to the setRelatedLists method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelatedLists method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelatedListsForArrayConstraintsFromSetRelatedLists(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutRelatedListsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutRelatedListsItem instanceof \SFPartnerApi\v480\StructType\RelatedList) {
                $invalidValues[] = is_object($describeLayoutRelatedListsItem) ? get_class($describeLayoutRelatedListsItem) : sprintf('%s(%s)', gettype($describeLayoutRelatedListsItem), var_export($describeLayoutRelatedListsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The relatedLists property can only contain items of type \SFPartnerApi\v480\StructType\RelatedList, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set relatedLists value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RelatedList[] $relatedLists
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setRelatedLists(array $relatedLists = array())
    {
        // validation for constraint: array
        if ('' !== ($relatedListsArrayErrorMessage = self::validateRelatedListsForArrayConstraintsFromSetRelatedLists($relatedLists))) {
            throw new \InvalidArgumentException($relatedListsArrayErrorMessage, __LINE__);
        }
        $this->relatedLists = $relatedLists;
        return $this;
    }
    /**
     * Add item to relatedLists value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\RelatedList $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function addToRelatedLists(\SFPartnerApi\v480\StructType\RelatedList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\RelatedList) {
            throw new \InvalidArgumentException(sprintf('The relatedLists property can only contain items of type \SFPartnerApi\v480\StructType\RelatedList, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->relatedLists[] = $item;
        return $this;
    }
    /**
     * Get saveOptions value
     * @return \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption[]|null
     */
    public function getSaveOptions()
    {
        return $this->saveOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setSaveOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSaveOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSaveOptionsForArrayConstraintsFromSetSaveOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $describeLayoutSaveOptionsItem) {
            // validation for constraint: itemType
            if (!$describeLayoutSaveOptionsItem instanceof \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption) {
                $invalidValues[] = is_object($describeLayoutSaveOptionsItem) ? get_class($describeLayoutSaveOptionsItem) : sprintf('%s(%s)', gettype($describeLayoutSaveOptionsItem), var_export($describeLayoutSaveOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The saveOptions property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set saveOptions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption[] $saveOptions
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function setSaveOptions(array $saveOptions = array())
    {
        // validation for constraint: array
        if ('' !== ($saveOptionsArrayErrorMessage = self::validateSaveOptionsForArrayConstraintsFromSetSaveOptions($saveOptions))) {
            throw new \InvalidArgumentException($saveOptionsArrayErrorMessage, __LINE__);
        }
        $this->saveOptions = $saveOptions;
        return $this;
    }
    /**
     * Add item to saveOptions value
     * @throws \InvalidArgumentException
     * @param \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption $item
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
     */
    public function addToSaveOptions(\SFPartnerApi\v480\StructType\DescribeLayoutSaveOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption) {
            throw new \InvalidArgumentException(sprintf('The saveOptions property can only contain items of type \SFPartnerApi\v480\StructType\DescribeLayoutSaveOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->saveOptions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \SFPartnerApi\v480\StructType\DescribeLayout
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
