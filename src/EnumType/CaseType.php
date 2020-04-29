<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for CaseType EnumType
 * @subpackage Enumerations
 */
class CaseType
{
    /**
     * Constant for value 'Nominative'
     * @return string 'Nominative'
     */
    const VALUE_NOMINATIVE = 'Nominative';
    /**
     * Constant for value 'Accusative'
     * @return string 'Accusative'
     */
    const VALUE_ACCUSATIVE = 'Accusative';
    /**
     * Constant for value 'Genitive'
     * @return string 'Genitive'
     */
    const VALUE_GENITIVE = 'Genitive';
    /**
     * Constant for value 'Dative'
     * @return string 'Dative'
     */
    const VALUE_DATIVE = 'Dative';
    /**
     * Constant for value 'Inessive'
     * @return string 'Inessive'
     */
    const VALUE_INESSIVE = 'Inessive';
    /**
     * Constant for value 'Elative'
     * @return string 'Elative'
     */
    const VALUE_ELATIVE = 'Elative';
    /**
     * Constant for value 'Illative'
     * @return string 'Illative'
     */
    const VALUE_ILLATIVE = 'Illative';
    /**
     * Constant for value 'Adessive'
     * @return string 'Adessive'
     */
    const VALUE_ADESSIVE = 'Adessive';
    /**
     * Constant for value 'Ablative'
     * @return string 'Ablative'
     */
    const VALUE_ABLATIVE = 'Ablative';
    /**
     * Constant for value 'Allative'
     * @return string 'Allative'
     */
    const VALUE_ALLATIVE = 'Allative';
    /**
     * Constant for value 'Essive'
     * @return string 'Essive'
     */
    const VALUE_ESSIVE = 'Essive';
    /**
     * Constant for value 'Translative'
     * @return string 'Translative'
     */
    const VALUE_TRANSLATIVE = 'Translative';
    /**
     * Constant for value 'Partitive'
     * @return string 'Partitive'
     */
    const VALUE_PARTITIVE = 'Partitive';
    /**
     * Constant for value 'Objective'
     * @return string 'Objective'
     */
    const VALUE_OBJECTIVE = 'Objective';
    /**
     * Constant for value 'Subjective'
     * @return string 'Subjective'
     */
    const VALUE_SUBJECTIVE = 'Subjective';
    /**
     * Constant for value 'Instrumental'
     * @return string 'Instrumental'
     */
    const VALUE_INSTRUMENTAL = 'Instrumental';
    /**
     * Constant for value 'Prepositional'
     * @return string 'Prepositional'
     */
    const VALUE_PREPOSITIONAL = 'Prepositional';
    /**
     * Constant for value 'Locative'
     * @return string 'Locative'
     */
    const VALUE_LOCATIVE = 'Locative';
    /**
     * Constant for value 'Vocative'
     * @return string 'Vocative'
     */
    const VALUE_VOCATIVE = 'Vocative';
    /**
     * Constant for value 'Sublative'
     * @return string 'Sublative'
     */
    const VALUE_SUBLATIVE = 'Sublative';
    /**
     * Constant for value 'Superessive'
     * @return string 'Superessive'
     */
    const VALUE_SUPERESSIVE = 'Superessive';
    /**
     * Constant for value 'Delative'
     * @return string 'Delative'
     */
    const VALUE_DELATIVE = 'Delative';
    /**
     * Constant for value 'Causalfinal'
     * @return string 'Causalfinal'
     */
    const VALUE_CAUSALFINAL = 'Causalfinal';
    /**
     * Constant for value 'Essiveformal'
     * @return string 'Essiveformal'
     */
    const VALUE_ESSIVEFORMAL = 'Essiveformal';
    /**
     * Constant for value 'Termanative'
     * @return string 'Termanative'
     */
    const VALUE_TERMANATIVE = 'Termanative';
    /**
     * Constant for value 'Distributive'
     * @return string 'Distributive'
     */
    const VALUE_DISTRIBUTIVE = 'Distributive';
    /**
     * Constant for value 'Ergative'
     * @return string 'Ergative'
     */
    const VALUE_ERGATIVE = 'Ergative';
    /**
     * Constant for value 'Adverbial'
     * @return string 'Adverbial'
     */
    const VALUE_ADVERBIAL = 'Adverbial';
    /**
     * Constant for value 'Abessive'
     * @return string 'Abessive'
     */
    const VALUE_ABESSIVE = 'Abessive';
    /**
     * Constant for value 'Comitative'
     * @return string 'Comitative'
     */
    const VALUE_COMITATIVE = 'Comitative';
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
     * @uses self::VALUE_NOMINATIVE
     * @uses self::VALUE_ACCUSATIVE
     * @uses self::VALUE_GENITIVE
     * @uses self::VALUE_DATIVE
     * @uses self::VALUE_INESSIVE
     * @uses self::VALUE_ELATIVE
     * @uses self::VALUE_ILLATIVE
     * @uses self::VALUE_ADESSIVE
     * @uses self::VALUE_ABLATIVE
     * @uses self::VALUE_ALLATIVE
     * @uses self::VALUE_ESSIVE
     * @uses self::VALUE_TRANSLATIVE
     * @uses self::VALUE_PARTITIVE
     * @uses self::VALUE_OBJECTIVE
     * @uses self::VALUE_SUBJECTIVE
     * @uses self::VALUE_INSTRUMENTAL
     * @uses self::VALUE_PREPOSITIONAL
     * @uses self::VALUE_LOCATIVE
     * @uses self::VALUE_VOCATIVE
     * @uses self::VALUE_SUBLATIVE
     * @uses self::VALUE_SUPERESSIVE
     * @uses self::VALUE_DELATIVE
     * @uses self::VALUE_CAUSALFINAL
     * @uses self::VALUE_ESSIVEFORMAL
     * @uses self::VALUE_TERMANATIVE
     * @uses self::VALUE_DISTRIBUTIVE
     * @uses self::VALUE_ERGATIVE
     * @uses self::VALUE_ADVERBIAL
     * @uses self::VALUE_ABESSIVE
     * @uses self::VALUE_COMITATIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOMINATIVE,
            self::VALUE_ACCUSATIVE,
            self::VALUE_GENITIVE,
            self::VALUE_DATIVE,
            self::VALUE_INESSIVE,
            self::VALUE_ELATIVE,
            self::VALUE_ILLATIVE,
            self::VALUE_ADESSIVE,
            self::VALUE_ABLATIVE,
            self::VALUE_ALLATIVE,
            self::VALUE_ESSIVE,
            self::VALUE_TRANSLATIVE,
            self::VALUE_PARTITIVE,
            self::VALUE_OBJECTIVE,
            self::VALUE_SUBJECTIVE,
            self::VALUE_INSTRUMENTAL,
            self::VALUE_PREPOSITIONAL,
            self::VALUE_LOCATIVE,
            self::VALUE_VOCATIVE,
            self::VALUE_SUBLATIVE,
            self::VALUE_SUPERESSIVE,
            self::VALUE_DELATIVE,
            self::VALUE_CAUSALFINAL,
            self::VALUE_ESSIVEFORMAL,
            self::VALUE_TERMANATIVE,
            self::VALUE_DISTRIBUTIVE,
            self::VALUE_ERGATIVE,
            self::VALUE_ADVERBIAL,
            self::VALUE_ABESSIVE,
            self::VALUE_COMITATIVE,
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
