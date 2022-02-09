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
 * @method LineNumberNumericType getLineNumberNumeric()
 * @method self setLineNumberNumeric(LineNumberNumericType|string $value)
 * @method LocationType getParticipatingLocationsLocation()
 * @method self setParticipatingLocationsLocation(LocationType $value)
 * @method RetailPlannedImpactType getRetailPlannedImpact()
 * @method self addRetailPlannedImpact(RetailPlannedImpactType $value)
 * @method self setRetailPlannedImpact(RetailPlannedImpactType ...$values)
 * @method ItemType getSupplyItem()
 * @method self setSupplyItem(ItemType $value)
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