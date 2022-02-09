<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecificationIDType;

/**
 * Class PromotionalSpecificationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method SpecificationIDType getSpecificationID()
 * @method self setSpecificationID(SpecificationIDType|string $value)
 * @method PromotionalEventLineItemType getPromotionalEventLineItem()
 * @method self addPromotionalEventLineItem(PromotionalEventLineItemType $value)
 * @method self setPromotionalEventLineItem(PromotionalEventLineItemType ...$values)
 * @method EventTacticType getEventTactic()
 * @method self addEventTactic(EventTacticType $value)
 * @method self setEventTactic(EventTacticType ...$values)
 */
class PromotionalSpecificationType extends AggregateComponent
{
    protected $casts = [
        "cbc:SpecificationID" => SpecificationIDType::class,
        "cac:PromotionalEventLineItem" => PromotionalEventLineItemType::class . "[]",
        "cac:EventTactic" => EventTacticType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:PromotionalEventLineItem" => 1,
    ];
}