<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineType;

/**
 * Class AddressLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method LineType getLine()
 * @method self setLine(LineType|string $value)
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