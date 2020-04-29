<?php

namespace SFPartnerApi\v480\EnumType;

/**
 * This class stands for OwnerChangeOptionType EnumType
 * @subpackage Enumerations
 */
class OwnerChangeOptionType
{
    /**
     * Constant for value 'EnforceNewOwnerHasReadAccess'
     * @return string 'EnforceNewOwnerHasReadAccess'
     */
    const VALUE_ENFORCE_NEW_OWNER_HAS_READ_ACCESS = 'EnforceNewOwnerHasReadAccess';
    /**
     * Constant for value 'TransferOpenActivities'
     * @return string 'TransferOpenActivities'
     */
    const VALUE_TRANSFER_OPEN_ACTIVITIES = 'TransferOpenActivities';
    /**
     * Constant for value 'TransferNotesAndAttachments'
     * @return string 'TransferNotesAndAttachments'
     */
    const VALUE_TRANSFER_NOTES_AND_ATTACHMENTS = 'TransferNotesAndAttachments';
    /**
     * Constant for value 'TransferOthersOpenOpportunities'
     * @return string 'TransferOthersOpenOpportunities'
     */
    const VALUE_TRANSFER_OTHERS_OPEN_OPPORTUNITIES = 'TransferOthersOpenOpportunities';
    /**
     * Constant for value 'TransferOwnedOpenOpportunities'
     * @return string 'TransferOwnedOpenOpportunities'
     */
    const VALUE_TRANSFER_OWNED_OPEN_OPPORTUNITIES = 'TransferOwnedOpenOpportunities';
    /**
     * Constant for value 'TransferOwnedClosedOpportunities'
     * @return string 'TransferOwnedClosedOpportunities'
     */
    const VALUE_TRANSFER_OWNED_CLOSED_OPPORTUNITIES = 'TransferOwnedClosedOpportunities';
    /**
     * Constant for value 'TransferOwnedOpenCases'
     * @return string 'TransferOwnedOpenCases'
     */
    const VALUE_TRANSFER_OWNED_OPEN_CASES = 'TransferOwnedOpenCases';
    /**
     * Constant for value 'TransferAllOwnedCases'
     * @return string 'TransferAllOwnedCases'
     */
    const VALUE_TRANSFER_ALL_OWNED_CASES = 'TransferAllOwnedCases';
    /**
     * Constant for value 'TransferContracts'
     * @return string 'TransferContracts'
     */
    const VALUE_TRANSFER_CONTRACTS = 'TransferContracts';
    /**
     * Constant for value 'TransferOrders'
     * @return string 'TransferOrders'
     */
    const VALUE_TRANSFER_ORDERS = 'TransferOrders';
    /**
     * Constant for value 'TransferContacts'
     * @return string 'TransferContacts'
     */
    const VALUE_TRANSFER_CONTACTS = 'TransferContacts';
    /**
     * Constant for value 'KeepAccountTeam'
     * @return string 'KeepAccountTeam'
     */
    const VALUE_KEEP_ACCOUNT_TEAM = 'KeepAccountTeam';
    /**
     * Constant for value 'KeepSalesTeam'
     * @return string 'KeepSalesTeam'
     */
    const VALUE_KEEP_SALES_TEAM = 'KeepSalesTeam';
    /**
     * Constant for value 'KeepSalesTeamGrantCurrentOwnerReadWriteAccess'
     * @return string 'KeepSalesTeamGrantCurrentOwnerReadWriteAccess'
     */
    const VALUE_KEEP_SALES_TEAM_GRANT_CURRENT_OWNER_READ_WRITE_ACCESS = 'KeepSalesTeamGrantCurrentOwnerReadWriteAccess';
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
     * @uses self::VALUE_ENFORCE_NEW_OWNER_HAS_READ_ACCESS
     * @uses self::VALUE_TRANSFER_OPEN_ACTIVITIES
     * @uses self::VALUE_TRANSFER_NOTES_AND_ATTACHMENTS
     * @uses self::VALUE_TRANSFER_OTHERS_OPEN_OPPORTUNITIES
     * @uses self::VALUE_TRANSFER_OWNED_OPEN_OPPORTUNITIES
     * @uses self::VALUE_TRANSFER_OWNED_CLOSED_OPPORTUNITIES
     * @uses self::VALUE_TRANSFER_OWNED_OPEN_CASES
     * @uses self::VALUE_TRANSFER_ALL_OWNED_CASES
     * @uses self::VALUE_TRANSFER_CONTRACTS
     * @uses self::VALUE_TRANSFER_ORDERS
     * @uses self::VALUE_TRANSFER_CONTACTS
     * @uses self::VALUE_KEEP_ACCOUNT_TEAM
     * @uses self::VALUE_KEEP_SALES_TEAM
     * @uses self::VALUE_KEEP_SALES_TEAM_GRANT_CURRENT_OWNER_READ_WRITE_ACCESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENFORCE_NEW_OWNER_HAS_READ_ACCESS,
            self::VALUE_TRANSFER_OPEN_ACTIVITIES,
            self::VALUE_TRANSFER_NOTES_AND_ATTACHMENTS,
            self::VALUE_TRANSFER_OTHERS_OPEN_OPPORTUNITIES,
            self::VALUE_TRANSFER_OWNED_OPEN_OPPORTUNITIES,
            self::VALUE_TRANSFER_OWNED_CLOSED_OPPORTUNITIES,
            self::VALUE_TRANSFER_OWNED_OPEN_CASES,
            self::VALUE_TRANSFER_ALL_OWNED_CASES,
            self::VALUE_TRANSFER_CONTRACTS,
            self::VALUE_TRANSFER_ORDERS,
            self::VALUE_TRANSFER_CONTACTS,
            self::VALUE_KEEP_ACCOUNT_TEAM,
            self::VALUE_KEEP_SALES_TEAM,
            self::VALUE_KEEP_SALES_TEAM_GRANT_CURRENT_OWNER_READ_WRITE_ACCESS,
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
