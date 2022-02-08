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
 * @method mixed getEnvironmentalEmissionTypeCode()
 * @method self setEnvironmentalEmissionTypeCode($value)
 * @method mixed getValueMeasure()
 * @method self setValueMeasure($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getEmissionCalculationMethod()
 * @method self addEmissionCalculationMethod($value)
 * @method self setEmissionCalculationMethod($value)
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