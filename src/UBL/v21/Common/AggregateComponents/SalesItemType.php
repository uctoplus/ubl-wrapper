<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class SalesItemType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getActivityProperty()
 * @method self addActivityProperty($value)
 * @method self setActivityProperty($value)
 * @method mixed getTaxExclusivePrice()
 * @method self addTaxExclusivePrice($value)
 * @method self setTaxExclusivePrice($value)
 * @method mixed getTaxInclusivePrice()
 * @method self addTaxInclusivePrice($value)
 * @method self setTaxInclusivePrice($value)
 * @method mixed getItem()
 * @method self setItem($value)
 */
class SalesItemType extends AggregateComponent
{
    protected $casts = [
        "cbc:Quantity" => QuantityType::class,
        "cac:ActivityProperty" => ActivityPropertyType::class . "[]",
        "cac:TaxExclusivePrice" => PriceType::class . "[]",
        "cac:TaxInclusivePrice" => PriceType::class . "[]",
        "cac:Item" => ItemType::class,
    ];

    protected $minOccurs = [
        "cbc:Quantity" => 1,
        "cac:Item" => 1,
    ];
}