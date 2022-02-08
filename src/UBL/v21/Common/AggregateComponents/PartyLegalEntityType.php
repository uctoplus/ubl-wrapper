<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationExpirationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLegalFormCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLegalFormType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SoleProprietorshipIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLiquidationStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CorporateStockAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FullyPaidSharesIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CorporateRegistrationSchemeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShareholderPartyType;

/**
 *
 * @method mixed getRegistrationName()
 * @method self setRegistrationName($value)
 * @method mixed getCompanyID()
 * @method self setCompanyID($value)
 * @method mixed getRegistrationDate()
 * @method self setRegistrationDate($value)
 * @method mixed getRegistrationExpirationDate()
 * @method self setRegistrationExpirationDate($value)
 * @method mixed getCompanyLegalFormCode()
 * @method self setCompanyLegalFormCode($value)
 * @method mixed getCompanyLegalForm()
 * @method self setCompanyLegalForm($value)
 * @method mixed getSoleProprietorshipIndicator()
 * @method self setSoleProprietorshipIndicator($value)
 * @method mixed getCompanyLiquidationStatusCode()
 * @method self setCompanyLiquidationStatusCode($value)
 * @method mixed getCorporateStockAmount()
 * @method self setCorporateStockAmount($value)
 * @method mixed getFullyPaidSharesIndicator()
 * @method self setFullyPaidSharesIndicator($value)
 * @method mixed getRegistrationAddress()
 * @method self setRegistrationAddress($value)
 * @method mixed getCorporateRegistrationScheme()
 * @method self setCorporateRegistrationScheme($value)
 * @method mixed getHeadOfficeParty()
 * @method self setHeadOfficeParty($value)
 * @method mixed getShareholderParty()
 * @method self setShareholderParty($value)
 */
class PartyLegalEntityType extends AggregateComponent
{
    protected $casts = [
        "cbc:RegistrationName" => RegistrationNameType::class,
        "cbc:CompanyID" => CompanyIDType::class,
        "cbc:RegistrationDate" => RegistrationDateType::class,
        "cbc:RegistrationExpirationDate" => RegistrationExpirationDateType::class,
        "cbc:CompanyLegalFormCode" => CompanyLegalFormCodeType::class,
        "cbc:CompanyLegalForm" => CompanyLegalFormType::class,
        "cbc:SoleProprietorshipIndicator" => SoleProprietorshipIndicatorType::class,
        "cbc:CompanyLiquidationStatusCode" => CompanyLiquidationStatusCodeType::class,
        "cbc:CorporateStockAmount" => CorporateStockAmountType::class,
        "cbc:FullyPaidSharesIndicator" => FullyPaidSharesIndicatorType::class,
        "cac:RegistrationAddress" => AddressType::class,
        "cac:CorporateRegistrationScheme" => CorporateRegistrationSchemeType::class,
        "cac:HeadOfficeParty" => PartyType::class,
        "cac:ShareholderParty" => ShareholderPartyType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}