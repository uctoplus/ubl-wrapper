<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BaseUnitMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationSequenceNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerUnitAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxableAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TierRangeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TierRatePercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransactionCurrencyTaxAmountType;

/**
 * Class TaxSubtotalType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getTaxableAmount()
 * @method self setTaxableAmount($value)
 * @method mixed getTaxAmount()
 * @method self setTaxAmount($value)
 * @method mixed getCalculationSequenceNumeric()
 * @method self setCalculationSequenceNumeric($value)
 * @method mixed getTransactionCurrencyTaxAmount()
 * @method self setTransactionCurrencyTaxAmount($value)
 * @method mixed getPercent()
 * @method self setPercent($value)
 * @method mixed getBaseUnitMeasure()
 * @method self setBaseUnitMeasure($value)
 * @method mixed getPerUnitAmount()
 * @method self setPerUnitAmount($value)
 * @method mixed getTierRange()
 * @method self setTierRange($value)
 * @method mixed getTierRatePercent()
 * @method self setTierRatePercent($value)
 * @method mixed getTaxCategory()
 * @method self setTaxCategory($value)
 */
class TaxSubtotalType extends AggregateComponent
{
    protected $casts = [
        "cbc:TaxableAmount" => TaxableAmountType::class,
        "cbc:TaxAmount" => TaxAmountType::class,
        "cbc:CalculationSequenceNumeric" => CalculationSequenceNumericType::class,
        "cbc:TransactionCurrencyTaxAmount" => TransactionCurrencyTaxAmountType::class,
        "cbc:Percent" => PercentType::class,
        "cbc:BaseUnitMeasure" => BaseUnitMeasureType::class,
        "cbc:PerUnitAmount" => PerUnitAmountType::class,
        "cbc:TierRange" => TierRangeType::class,
        "cbc:TierRatePercent" => TierRatePercentType::class,
        "cac:TaxCategory" => TaxCategoryType::class,
    ];

    protected $minOccurs = [
        "cbc:TaxAmount" => 1,
        "cac:TaxCategory" => 1,
    ];
}