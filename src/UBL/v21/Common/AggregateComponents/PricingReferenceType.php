<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class PricingReferenceType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ItemLocationQuantityType getOriginalItemLocationQuantity()
 * @method self setOriginalItemLocationQuantity(ItemLocationQuantityType $value)
 * @method PriceType[] getAlternativeConditionPrice()
 * @method self addAlternativeConditionPrice(PriceType $value)
 * @method self setAlternativeConditionPrice(PriceType ...$values)
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