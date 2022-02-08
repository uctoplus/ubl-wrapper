<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AttributeIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumMeasureType;

/**
 *
 * @method mixed getAttributeID()
 * @method self setAttributeID($value)
 * @method mixed getMeasure()
 * @method self setMeasure($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getMinimumMeasure()
 * @method self setMinimumMeasure($value)
 * @method mixed getMaximumMeasure()
 * @method self setMaximumMeasure($value)
 */
class ConditionType extends AggregateComponent
{
    protected $casts = [
        "cbc:AttributeID" => AttributeIDType::class,
        "cbc:Measure" => MeasureType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:MinimumMeasure" => MinimumMeasureType::class,
        "cbc:MaximumMeasure" => MaximumMeasureType::class,
    ];

    protected $minOccurs = [
        "cbc:AttributeID" => 1,
    ];
}