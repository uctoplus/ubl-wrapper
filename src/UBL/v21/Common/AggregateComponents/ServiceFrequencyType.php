<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WeekDayCodeType;

/**
 * Class ServiceFrequencyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getWeekDayCode()
 * @method self setWeekDayCode($value)
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