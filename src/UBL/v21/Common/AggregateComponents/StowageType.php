<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LocationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LocationType;

/**
 * Class StowageType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method LocationIDType getLocationID()
 * @method self setLocationID(LocationIDType|string $value)
 * @method LocationType[] getLocation()
 * @method self addLocation(LocationType|string $value)
 * @method self setLocation(LocationType ...$values)
 * @method DimensionType[] getMeasurementDimension()
 * @method self addMeasurementDimension(DimensionType $value)
 * @method self setMeasurementDimension(DimensionType ...$values)
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