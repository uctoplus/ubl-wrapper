<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class PricingReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getOriginalItemLocationQuantity()
 * @method self setOriginalItemLocationQuantity($value)
 * @method mixed getAlternativeConditionPrice()
 * @method self addAlternativeConditionPrice($value)
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