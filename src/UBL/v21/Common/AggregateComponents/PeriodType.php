<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DurationMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EndDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EndTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StartDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StartTimeType;

/**
 * Class PeriodType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method StartDateType getStartDate()
 * @method self setStartDate(StartDateType|string $value)
 * @method StartTimeType getStartTime()
 * @method self setStartTime(StartTimeType|string $value)
 * @method EndDateType getEndDate()
 * @method self setEndDate(EndDateType|string $value)
 * @method EndTimeType getEndTime()
 * @method self setEndTime(EndTimeType|string $value)
 * @method DurationMeasureType getDurationMeasure()
 * @method self setDurationMeasure(DurationMeasureType|string $value)
 * @method DescriptionCodeType getDescriptionCode()
 * @method self addDescriptionCode(DescriptionCodeType|string $value)
 * @method self setDescriptionCode(DescriptionCodeType ...$values)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 */
class PeriodType extends AggregateComponent
{
    protected $casts = [
        "cbc:StartDate" => StartDateType::class,
        "cbc:StartTime" => StartTimeType::class,
        "cbc:EndDate" => EndDateType::class,
        "cbc:EndTime" => EndTimeType::class,
        "cbc:DurationMeasure" => DurationMeasureType::class,
        "cbc:DescriptionCode" => DescriptionCodeType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}