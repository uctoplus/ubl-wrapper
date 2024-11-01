<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLegalFormCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLegalFormType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyLiquidationStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CorporateStockAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FullyPaidSharesIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationExpirationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SoleProprietorshipIndicatorType;

/**
 * Class PartyLegalEntityType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method RegistrationNameType getRegistrationName()
 * @method self setRegistrationName(RegistrationNameType|string $value)
 * @method CompanyIDType getCompanyID()
 * @method self setCompanyID(CompanyIDType|string $value)
 * @method RegistrationDateType getRegistrationDate()
 * @method self setRegistrationDate(RegistrationDateType|string $value)
 * @method RegistrationExpirationDateType getRegistrationExpirationDate()
 * @method self setRegistrationExpirationDate(RegistrationExpirationDateType|string $value)
 * @method CompanyLegalFormCodeType getCompanyLegalFormCode()
 * @method self setCompanyLegalFormCode(CompanyLegalFormCodeType|string $value)
 * @method CompanyLegalFormType getCompanyLegalForm()
 * @method self setCompanyLegalForm(CompanyLegalFormType|string $value)
 * @method SoleProprietorshipIndicatorType getSoleProprietorshipIndicator()
 * @method self setSoleProprietorshipIndicator(SoleProprietorshipIndicatorType|string $value)
 * @method CompanyLiquidationStatusCodeType getCompanyLiquidationStatusCode()
 * @method self setCompanyLiquidationStatusCode(CompanyLiquidationStatusCodeType|string $value)
 * @method CorporateStockAmountType getCorporateStockAmount()
 * @method self setCorporateStockAmount(CorporateStockAmountType|string $value)
 * @method FullyPaidSharesIndicatorType getFullyPaidSharesIndicator()
 * @method self setFullyPaidSharesIndicator(FullyPaidSharesIndicatorType|string $value)
 * @method AddressType getRegistrationAddress()
 * @method self setRegistrationAddress(AddressType $value)
 * @method CorporateRegistrationSchemeType getCorporateRegistrationScheme()
 * @method self setCorporateRegistrationScheme(CorporateRegistrationSchemeType $value)
 * @method PartyType getHeadOfficeParty()
 * @method self setHeadOfficeParty(PartyType $value)
 * @method ShareholderPartyType[] getShareholderParty()
 * @method self addShareholderParty(ShareholderPartyType $value)
 * @method self setShareholderParty(ShareholderPartyType ...$values)
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