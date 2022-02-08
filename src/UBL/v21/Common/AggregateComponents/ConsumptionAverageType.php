<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AverageAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;

/**
 * Class ConsumptionAverageType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getAverageAmount()
 * @method self setAverageAmount($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 */
class ConsumptionAverageType extends AggregateComponent
{
    protected $casts = [
        "cbc:AverageAmount" => AverageAmountType::class,
        "cbc:Description" => DescriptionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}