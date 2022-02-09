<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BaseUnitMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerUnitAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxExemptionReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxExemptionReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TierRangeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TierRatePercentType;

/**
 * Class TaxCategoryType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method PercentType getPercent()
 * @method self setPercent(PercentType|string $value)
 * @method BaseUnitMeasureType getBaseUnitMeasure()
 * @method self setBaseUnitMeasure(BaseUnitMeasureType|string $value)
 * @method PerUnitAmountType getPerUnitAmount()
 * @method self setPerUnitAmount(PerUnitAmountType|string $value)
 * @method TaxExemptionReasonCodeType getTaxExemptionReasonCode()
 * @method self setTaxExemptionReasonCode(TaxExemptionReasonCodeType|string $value)
 * @method TaxExemptionReasonType getTaxExemptionReason()
 * @method self addTaxExemptionReason(TaxExemptionReasonType|string $value)
 * @method self setTaxExemptionReason(TaxExemptionReasonType ...$values)
 * @method TierRangeType getTierRange()
 * @method self setTierRange(TierRangeType|string $value)
 * @method TierRatePercentType getTierRatePercent()
 * @method self setTierRatePercent(TierRatePercentType|string $value)
 * @method TaxSchemeType getTaxScheme()
 * @method self setTaxScheme(TaxSchemeType $value)
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