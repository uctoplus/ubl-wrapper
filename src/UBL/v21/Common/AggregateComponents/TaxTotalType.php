<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RoundingAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxEvidenceIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxIncludedIndicatorType;

/**
 * Class TaxTotalType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TaxAmountType getTaxAmount()
 * @method self setTaxAmount(TaxAmountType|string $value)
 * @method RoundingAmountType getRoundingAmount()
 * @method self setRoundingAmount(RoundingAmountType|string $value)
 * @method TaxEvidenceIndicatorType getTaxEvidenceIndicator()
 * @method self setTaxEvidenceIndicator(TaxEvidenceIndicatorType|string $value)
 * @method TaxIncludedIndicatorType getTaxIncludedIndicator()
 * @method self setTaxIncludedIndicator(TaxIncludedIndicatorType|string $value)
 * @method TaxSubtotalType getTaxSubtotal()
 * @method self addTaxSubtotal(TaxSubtotalType $value)
 * @method self setTaxSubtotal(TaxSubtotalType ...$values)
 */
class TaxTotalType extends AggregateComponent
{
    protected $casts = [
        "cbc:TaxAmount" => TaxAmountType::class,
        "cbc:RoundingAmount" => RoundingAmountType::class,
        "cbc:TaxEvidenceIndicator" => TaxEvidenceIndicatorType::class,
        "cbc:TaxIncludedIndicator" => TaxIncludedIndicatorType::class,
        "cac:TaxSubtotal" => TaxSubtotalType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:TaxAmount" => 1,
    ];
}