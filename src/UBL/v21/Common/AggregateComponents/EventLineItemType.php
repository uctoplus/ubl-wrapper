<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineNumberNumericType;

/**
 * Class EventLineItemType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getLineNumberNumeric()
 * @method self setLineNumberNumeric($value)
 * @method mixed getParticipatingLocationsLocation()
 * @method self setParticipatingLocationsLocation($value)
 * @method mixed getRetailPlannedImpact()
 * @method self addRetailPlannedImpact($value)
 * @method self setRetailPlannedImpact($value)
 * @method mixed getSupplyItem()
 * @method self setSupplyItem($value)
 */
class EventLineItemType extends AggregateComponent
{
    protected $casts = [
        "cbc:LineNumberNumeric" => LineNumberNumericType::class,
        "cac:ParticipatingLocationsLocation" => LocationType::class,
        "cac:RetailPlannedImpact" => RetailPlannedImpactType::class . "[]",
        "cac:SupplyItem" => ItemType::class,
    ];

    protected $minOccurs = [
        "cac:SupplyItem" => 1,
    ];
}