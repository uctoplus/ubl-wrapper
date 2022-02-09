<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExemptionReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExemptionReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxLevelCodeType;

/**
 * Class PartyTaxSchemeType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method RegistrationNameType getRegistrationName()
 * @method self setRegistrationName(RegistrationNameType|string $value)
 * @method CompanyIDType getCompanyID()
 * @method self setCompanyID(CompanyIDType|string $value)
 * @method TaxLevelCodeType getTaxLevelCode()
 * @method self setTaxLevelCode(TaxLevelCodeType|string $value)
 * @method ExemptionReasonCodeType getExemptionReasonCode()
 * @method self setExemptionReasonCode(ExemptionReasonCodeType|string $value)
 * @method ExemptionReasonType getExemptionReason()
 * @method self addExemptionReason(ExemptionReasonType|string $value)
 * @method self setExemptionReason(ExemptionReasonType ...$values)
 * @method AddressType getRegistrationAddress()
 * @method self setRegistrationAddress(AddressType $value)
 * @method TaxSchemeType getTaxScheme()
 * @method self setTaxScheme(TaxSchemeType $value)
 */
class PartyTaxSchemeType extends AggregateComponent
{
    protected $casts = [
        "cbc:RegistrationName" => RegistrationNameType::class,
        "cbc:CompanyID" => CompanyIDType::class,
        "cbc:TaxLevelCode" => TaxLevelCodeType::class,
        "cbc:ExemptionReasonCode" => ExemptionReasonCodeType::class,
        "cbc:ExemptionReason" => ExemptionReasonType::class . "[]",
        "cac:RegistrationAddress" => AddressType::class,
        "cac:TaxScheme" => TaxSchemeType::class,
    ];

    protected $minOccurs = [
        "cac:TaxScheme" => 1,
    ];
}