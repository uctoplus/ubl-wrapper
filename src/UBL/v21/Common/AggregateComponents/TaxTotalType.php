<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RoundingAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxEvidenceIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxIncludedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxSubtotalType;

/**
 *
 * @method mixed getTaxAmount()
 * @method self setTaxAmount($value)
 * @method mixed getRoundingAmount()
 * @method self setRoundingAmount($value)
 * @method mixed getTaxEvidenceIndicator()
 * @method self setTaxEvidenceIndicator($value)
 * @method mixed getTaxIncludedIndicator()
 * @method self setTaxIncludedIndicator($value)
 * @method mixed getTaxSubtotal()
 * @method self setTaxSubtotal($value)
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