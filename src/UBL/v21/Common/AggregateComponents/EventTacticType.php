<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CommentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class EventTacticType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method CommentType getComment()
 * @method self setComment(CommentType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method EventTacticEnumerationType getEventTacticEnumeration()
 * @method self setEventTacticEnumeration(EventTacticEnumerationType $value)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
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