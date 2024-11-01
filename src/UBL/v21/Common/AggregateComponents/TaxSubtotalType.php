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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TaxableAmountType getTaxableAmount()
 * @method self setTaxableAmount(TaxableAmountType|string $value)
 * @method TaxAmountType getTaxAmount()
 * @method self setTaxAmount(TaxAmountType|string $value)
 * @method CalculationSequenceNumericType getCalculationSequenceNumeric()
 * @method self setCalculationSequenceNumeric(CalculationSequenceNumericType|string $value)
 * @method TransactionCurrencyTaxAmountType getTransactionCurrencyTaxAmount()
 * @method self setTransactionCurrencyTaxAmount(TransactionCurrencyTaxAmountType|string $value)
 * @method PercentType getPercent()
 * @method self setPercent(PercentType|string $value)
 * @method BaseUnitMeasureType getBaseUnitMeasure()
 * @method self setBaseUnitMeasure(BaseUnitMeasureType|string $value)
 * @method PerUnitAmountType getPerUnitAmount()
 * @method self setPerUnitAmount(PerUnitAmountType|string $value)
 * @method TierRangeType getTierRange()
 * @method self setTierRange(TierRangeType|string $value)
 * @method TierRatePercentType getTierRatePercent()
 * @method self setTierRatePercent(TierRatePercentType|string $value)
 * @method TaxCategoryType getTaxCategory()
 * @method self setTaxCategory(TaxCategoryType $value)
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