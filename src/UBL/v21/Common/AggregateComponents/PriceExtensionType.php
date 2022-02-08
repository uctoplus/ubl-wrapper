<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;

/**
 *
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getTaxTotal()
 * @method self setTaxTotal($value)
 */
class PriceExtensionType extends AggregateComponent
{
    protected $casts = [
        "cbc:Amount" => AmountType::class,
        "cac:TaxTotal" => TaxTotalType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:Amount" => 1,
    ];
}