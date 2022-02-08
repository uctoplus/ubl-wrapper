<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineNumberNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\RetailPlannedImpactType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;

/**
 *
 * @method mixed getLineNumberNumeric()
 * @method self setLineNumberNumeric($value)
 * @method mixed getParticipatingLocationsLocation()
 * @method self setParticipatingLocationsLocation($value)
 * @method mixed getRetailPlannedImpact()
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