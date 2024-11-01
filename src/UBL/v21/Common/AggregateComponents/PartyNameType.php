<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class PartyNameType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NameType getName()
 * @method self setName(NameType|string $value)
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