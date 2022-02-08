<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CommentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EventTacticEnumerationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;

/**
 *
 * @method mixed getComment()
 * @method self setComment($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getEventTacticEnumeration()
 * @method self setEventTacticEnumeration($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
 */
class EventTacticType extends AggregateComponent
{
    protected $casts = [
        "cbc:Comment" => CommentType::class,
        "cbc:Quantity" => QuantityType::class,
        "cac:EventTacticEnumeration" => EventTacticEnumerationType::class,
        "cac:Period" => PeriodType::class,
    ];

    protected $minOccurs = [
        "cac:EventTacticEnumeration" => 1,
    ];
}