<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BaseUnitMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerUnitAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxExemptionReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxExemptionReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TierRangeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TierRatePercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxSchemeType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getPercent()
 * @method self setPercent($value)
 * @method mixed getBaseUnitMeasure()
 * @method self setBaseUnitMeasure($value)
 * @method mixed getPerUnitAmount()
 * @method self setPerUnitAmount($value)
 * @method mixed getTaxExemptionReasonCode()
 * @method self setTaxExemptionReasonCode($value)
 * @method mixed getTaxExemptionReason()
 * @method self setTaxExemptionReason($value)
 * @method mixed getTierRange()
 * @method self setTierRange($value)
 * @method mixed getTierRatePercent()
 * @method self setTierRatePercent($value)
 * @method mixed getTaxScheme()
 * @method self setTaxScheme($value)
 */
class TaxCategoryType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cbc:Percent" => PercentType::class,
        "cbc:BaseUnitMeasure" => BaseUnitMeasureType::class,
        "cbc:PerUnitAmount" => PerUnitAmountType::class,
        "cbc:TaxExemptionReasonCode" => TaxExemptionReasonCodeType::class,
        "cbc:TaxExemptionReason" => TaxExemptionReasonType::class . "[]",
        "cbc:TierRange" => TierRangeType::class,
        "cbc:TierRatePercent" => TierRatePercentType::class,
        "cac:TaxScheme" => TaxSchemeType::class,
    ];

    protected $minOccurs = [
        "cac:TaxScheme" => 1,
    ];
}