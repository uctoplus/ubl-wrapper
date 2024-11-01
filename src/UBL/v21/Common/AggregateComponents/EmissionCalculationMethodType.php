<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationMethodCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FullnessIndicationCodeType;

/**
 * Class EmissionCalculationMethodType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method CalculationMethodCodeType getCalculationMethodCode()
 * @method self setCalculationMethodCode(CalculationMethodCodeType|string $value)
 * @method FullnessIndicationCodeType getFullnessIndicationCode()
 * @method self setFullnessIndicationCode(FullnessIndicationCodeType|string $value)
 * @method LocationType getMeasurementFromLocation()
 * @method self setMeasurementFromLocation(LocationType $value)
 * @method LocationType getMeasurementToLocation()
 * @method self setMeasurementToLocation(LocationType $value)
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