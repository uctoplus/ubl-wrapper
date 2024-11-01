<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class ItemComparisonType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method PriceAmountType getPriceAmount()
 * @method self setPriceAmount(PriceAmountType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
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