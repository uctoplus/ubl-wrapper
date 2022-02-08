<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ActivityPropertyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PriceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;

/**
 *
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getActivityProperty()
 * @method self setActivityProperty($value)
 * @method mixed getTaxExclusivePrice()
 * @method self setTaxExclusivePrice($value)
 * @method mixed getTaxInclusivePrice()
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