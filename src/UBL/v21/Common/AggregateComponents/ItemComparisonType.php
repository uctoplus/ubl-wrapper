<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class ItemComparisonType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getPriceAmount()
 * @method self setPriceAmount($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 */
class ItemComparisonType extends AggregateComponent
{
    protected $casts = [
        "cbc:PriceAmount" => PriceAmountType::class,
        "cbc:Quantity" => QuantityType::class,
    ];

    protected $minOccurs = [
    ];
}