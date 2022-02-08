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
 * @method mixed getSpecificationID()
 * @method self setSpecificationID($value)
 * @method mixed getPromotionalEventLineItem()
 * @method self addPromotionalEventLineItem($value)
 * @method self setPromotionalEventLineItem($value)
 * @method mixed getEventTactic()
 * @method self addEventTactic($value)
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