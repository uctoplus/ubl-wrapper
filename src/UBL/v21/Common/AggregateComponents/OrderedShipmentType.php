<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShipmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PackageType;

/**
 *
 * @method mixed getShipment()
 * @method self setShipment($value)
 * @method mixed getPackage()
 * @method self setPackage($value)
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