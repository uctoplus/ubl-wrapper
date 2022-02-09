<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EnvironmentalEmissionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueMeasureType;

/**
 * Class EnvironmentalEmissionType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method EnvironmentalEmissionTypeCodeType getEnvironmentalEmissionTypeCode()
 * @method self setEnvironmentalEmissionTypeCode(EnvironmentalEmissionTypeCodeType|string $value)
 * @method ValueMeasureType getValueMeasure()
 * @method self setValueMeasure(ValueMeasureType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method EmissionCalculationMethodType getEmissionCalculationMethod()
 * @method self addEmissionCalculationMethod(EmissionCalculationMethodType $value)
 * @method self setEmissionCalculationMethod(EmissionCalculationMethodType ...$values)
 */
class EnvironmentalEmissionType extends AggregateComponent
{
    protected $casts = [
        "cbc:EnvironmentalEmissionTypeCode" => EnvironmentalEmissionTypeCodeType::class,
        "cbc:ValueMeasure" => ValueMeasureType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:EmissionCalculationMethod" => EmissionCalculationMethodType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:EnvironmentalEmissionTypeCode" => 1,
        "cbc:ValueMeasure" => 1,
    ];
}