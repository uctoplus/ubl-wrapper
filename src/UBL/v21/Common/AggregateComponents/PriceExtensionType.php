<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;

/**
 * Class PriceExtensionType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method TaxTotalType[] getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
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