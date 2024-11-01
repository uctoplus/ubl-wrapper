<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AttributeIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumMeasureType;

/**
 * Class ConditionType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method AttributeIDType getAttributeID()
 * @method self setAttributeID(AttributeIDType|string $value)
 * @method MeasureType getMeasure()
 * @method self setMeasure(MeasureType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method MinimumMeasureType getMinimumMeasure()
 * @method self setMinimumMeasure(MinimumMeasureType|string $value)
 * @method MaximumMeasureType getMaximumMeasure()
 * @method self setMaximumMeasure(MaximumMeasureType|string $value)
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