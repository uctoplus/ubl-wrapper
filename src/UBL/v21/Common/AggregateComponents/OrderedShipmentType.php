<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class OrderedShipmentType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ShipmentType getShipment()
 * @method self setShipment(ShipmentType $value)
 * @method PackageType[] getPackage()
 * @method self addPackage(PackageType $value)
 * @method self setPackage(PackageType ...$values)
 */
class OrderedShipmentType extends AggregateComponent
{
    protected $casts = [
        "cac:Shipment" => ShipmentType::class,
        "cac:Package" => PackageType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:Shipment" => 1,
    ];
}