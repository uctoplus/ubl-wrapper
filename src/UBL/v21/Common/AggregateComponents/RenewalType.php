<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;

/**
 * Class RenewalType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
 */
class RenewalType extends AggregateComponent
{
    protected $casts = [
        "cbc:Amount" => AmountType::class,
        "cac:Period" => PeriodType::class,
    ];

    protected $minOccurs = [
    ];
}