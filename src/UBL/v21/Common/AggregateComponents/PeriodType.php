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
 * @method mixed getStartDate()
 * @method self setStartDate($value)
 * @method mixed getStartTime()
 * @method self setStartTime($value)
 * @method mixed getEndDate()
 * @method self setEndDate($value)
 * @method mixed getEndTime()
 * @method self setEndTime($value)
 * @method mixed getDurationMeasure()
 * @method self setDurationMeasure($value)
 * @method mixed getDescriptionCode()
 * @method self addDescriptionCode($value)
 * @method self setDescriptionCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
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