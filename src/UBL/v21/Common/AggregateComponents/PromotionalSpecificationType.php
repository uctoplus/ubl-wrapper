<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecificationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PromotionalEventLineItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EventTacticType;

/**
 *
 * @method mixed getSpecificationID()
 * @method self setSpecificationID($value)
 * @method mixed getPromotionalEventLineItem()
 * @method self setPromotionalEventLineItem($value)
 * @method mixed getEventTactic()
 * @method self setEventTactic($value)
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