<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimeAmountType;

/**
 *
 * @method mixed getPriceAmount()
 * @method self setPriceAmount($value)
 * @method mixed getTimeAmount()
 * @method self setTimeAmount($value)
 */
class UnstructuredPriceType extends AggregateComponent
{
    protected $casts = [
        "cbc:PriceAmount" => PriceAmountType::class,
        "cbc:TimeAmount" => TimeAmountType::class,
    ];

    protected $minOccurs = [
    ];
}