<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class SalesItemType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method ActivityPropertyType[] getActivityProperty()
 * @method self addActivityProperty(ActivityPropertyType $value)
 * @method self setActivityProperty(ActivityPropertyType ...$values)
 * @method PriceType[] getTaxExclusivePrice()
 * @method self addTaxExclusivePrice(PriceType $value)
 * @method self setTaxExclusivePrice(PriceType ...$values)
 * @method PriceType[] getTaxInclusivePrice()
 * @method self addTaxInclusivePrice(PriceType $value)
 * @method self setTaxInclusivePrice(PriceType ...$values)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
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