<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EventLineItemType;

/**
 *
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getEventLineItem()
 * @method self setEventLineItem($value)
 */
class PromotionalEventLineItemType extends AggregateComponent
{
    protected $casts = [
        "cbc:Amount" => AmountType::class,
        "cac:EventLineItem" => EventLineItemType::class,
    ];

    protected $minOccurs = [
        "cbc:Amount" => 1,
        "cac:EventLineItem" => 1,
    ];
}