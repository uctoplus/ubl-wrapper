<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AttributeIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeasureType;

/**
 * Class TemperatureType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getAttributeID()
 * @method self setAttributeID($value)
 * @method mixed getMeasure()
 * @method self setMeasure($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 */
class TemperatureType extends AggregateComponent
{
    protected $casts = [
        "cbc:AttributeID" => AttributeIDType::class,
        "cbc:Measure" => MeasureType::class,
        "cbc:Description" => DescriptionType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:AttributeID" => 1,
        "cbc:Measure" => 1,
    ];
}