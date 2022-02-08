<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class PartyNameType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getName()
 * @method self setName($value)
 */
class PartyNameType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class,
    ];

    protected $minOccurs = [
        "cbc:Name" => 1,
    ];
}