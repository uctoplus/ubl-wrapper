<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LocationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DimensionType;

/**
 *
 * @method mixed getLocationID()
 * @method self setLocationID($value)
 * @method mixed getLocation()
 * @method self setLocation($value)
 * @method mixed getMeasurementDimension()
 * @method self setMeasurementDimension($value)
 */
class StowageType extends AggregateComponent
{
    protected $casts = [
        "cbc:LocationID" => LocationIDType::class,
        "cbc:Location" => LocationType::class . "[]",
        "cac:MeasurementDimension" => DimensionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}