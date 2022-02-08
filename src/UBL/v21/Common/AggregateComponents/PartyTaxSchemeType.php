<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompanyIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExemptionReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExemptionReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxSchemeType;

/**
 *
 * @method mixed getRegistrationName()
 * @method self setRegistrationName($value)
 * @method mixed getCompanyID()
 * @method self setCompanyID($value)
 * @method mixed getTaxLevelCode()
 * @method self setTaxLevelCode($value)
 * @method mixed getExemptionReasonCode()
 * @method self setExemptionReasonCode($value)
 * @method mixed getExemptionReason()
 * @method self setExemptionReason($value)
 * @method mixed getRegistrationAddress()
 * @method self setRegistrationAddress($value)
 * @method mixed getTaxScheme()
 * @method self setTaxScheme($value)
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