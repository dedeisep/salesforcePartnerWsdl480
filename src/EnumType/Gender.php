<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for Gender EnumType
 * @subpackage Enumerations
 */
class Gender
{
    /**
     * Constant for value 'Neuter'
     * @return string 'Neuter'
     */
    const VALUE_NEUTER = 'Neuter';
    /**
     * Constant for value 'Masculine'
     * @return string 'Masculine'
     */
    const VALUE_MASCULINE = 'Masculine';
    /**
     * Constant for value 'Feminine'
     * @return string 'Feminine'
     */
    const VALUE_FEMININE = 'Feminine';
    /**
     * Constant for value 'AnimateMasculine'
     * @return string 'AnimateMasculine'
     */
    const VALUE_ANIMATE_MASCULINE = 'AnimateMasculine';
    /**
     * Constant for value 'ClassI'
     * @return string 'ClassI'
     */
    const VALUE_CLASS_I = 'ClassI';
    /**
     * Constant for value 'ClassIII'
     * @return string 'ClassIII'
     */
    const VALUE_CLASS_III = 'ClassIII';
    /**
     * Constant for value 'ClassV'
     * @return string 'ClassV'
     */
    const VALUE_CLASS_V = 'ClassV';
    /**
     * Constant for value 'ClassVII'
     * @return string 'ClassVII'
     */
    const VALUE_CLASS_VII = 'ClassVII';
    /**
     * Constant for value 'ClassIX'
     * @return string 'ClassIX'
     */
    const VALUE_CLASS_IX = 'ClassIX';
    /**
     * Constant for value 'ClassXI'
     * @return string 'ClassXI'
     */
    const VALUE_CLASS_XI = 'ClassXI';
    /**
     * Constant for value 'ClassXIV'
     * @return string 'ClassXIV'
     */
    const VALUE_CLASS_XIV = 'ClassXIV';
    /**
     * Constant for value 'ClassXV'
     * @return string 'ClassXV'
     */
    const VALUE_CLASS_XV = 'ClassXV';
    /**
     * Constant for value 'ClassXVI'
     * @return string 'ClassXVI'
     */
    const VALUE_CLASS_XVI = 'ClassXVI';
    /**
     * Constant for value 'ClassXVII'
     * @return string 'ClassXVII'
     */
    const VALUE_CLASS_XVII = 'ClassXVII';
    /**
     * Constant for value 'ClassXVIII'
     * @return string 'ClassXVIII'
     */
    const VALUE_CLASS_XVIII = 'ClassXVIII';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NEUTER
     * @uses self::VALUE_MASCULINE
     * @uses self::VALUE_FEMININE
     * @uses self::VALUE_ANIMATE_MASCULINE
     * @uses self::VALUE_CLASS_I
     * @uses self::VALUE_CLASS_III
     * @uses self::VALUE_CLASS_V
     * @uses self::VALUE_CLASS_VII
     * @uses self::VALUE_CLASS_IX
     * @uses self::VALUE_CLASS_XI
     * @uses self::VALUE_CLASS_XIV
     * @uses self::VALUE_CLASS_XV
     * @uses self::VALUE_CLASS_XVI
     * @uses self::VALUE_CLASS_XVII
     * @uses self::VALUE_CLASS_XVIII
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEUTER,
            self::VALUE_MASCULINE,
            self::VALUE_FEMININE,
            self::VALUE_ANIMATE_MASCULINE,
            self::VALUE_CLASS_I,
            self::VALUE_CLASS_III,
            self::VALUE_CLASS_V,
            self::VALUE_CLASS_VII,
            self::VALUE_CLASS_IX,
            self::VALUE_CLASS_XI,
            self::VALUE_CLASS_XIV,
            self::VALUE_CLASS_XV,
            self::VALUE_CLASS_XVI,
            self::VALUE_CLASS_XVII,
            self::VALUE_CLASS_XVIII,
        );
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
