<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemLocationQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PriceType;

/**
 *
 * @method mixed getOriginalItemLocationQuantity()
 * @method self setOriginalItemLocationQuantity($value)
 * @method mixed getAlternativeConditionPrice()
 * @method self setAlternativeConditionPrice($value)
 */
class PricingReferenceType extends AggregateComponent
{
    protected $casts = [
        "cac:OriginalItemLocationQuantity" => ItemLocationQuantityType::class,
        "cac:AlternativeConditionPrice" => PriceType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}