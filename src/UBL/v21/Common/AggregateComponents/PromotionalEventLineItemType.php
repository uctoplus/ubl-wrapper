<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;

/**
 * Class PromotionalEventLineItemType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method EventLineItemType getEventLineItem()
 * @method self setEventLineItem(EventLineItemType $value)
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