<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class OrderedShipmentType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getShipment()
 * @method self setShipment($value)
 * @method mixed getPackage()
 * @method self addPackage($value)
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