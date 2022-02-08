<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineType;

/**
 *
 * @method mixed getLine()
 * @method self setLine($value)
 */
class AddressLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:Line" => LineType::class,
    ];

    protected $minOccurs = [
        "cbc:Line" => 1,
    ];
}