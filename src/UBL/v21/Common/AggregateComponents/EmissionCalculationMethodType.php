<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FullnessIndicationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;

/**
 *
 * @method mixed getCalculationMethodCode()
 * @method self setCalculationMethodCode($value)
 * @method mixed getFullnessIndicationCode()
 * @method self setFullnessIndicationCode($value)
 * @method mixed getMeasurementFromLocation()
 * @method self setMeasurementFromLocation($value)
 * @method mixed getMeasurementToLocation()
 * @method self setMeasurementToLocation($value)
 */
class EmissionCalculationMethodType extends AggregateComponent
{
    protected $casts = [
        "cbc:CalculationMethodCode" => CalculationMethodCodeType::class,
        "cbc:FullnessIndicationCode" => FullnessIndicationCodeType::class,
        "cac:MeasurementFromLocation" => LocationType::class,
        "cac:MeasurementToLocation" => LocationType::class,
    ];

    protected $minOccurs = [
    ];
}