<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WeekDayCodeType;

/**
 * Class ServiceFrequencyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method WeekDayCodeType getWeekDayCode()
 * @method self setWeekDayCode(WeekDayCodeType|string $value)
 */
class ServiceFrequencyType extends AggregateComponent
{
    protected $casts = [
        "cbc:WeekDayCode" => WeekDayCodeType::class,
    ];

    protected $minOccurs = [
        "cbc:WeekDayCode" => 1,
    ];
}