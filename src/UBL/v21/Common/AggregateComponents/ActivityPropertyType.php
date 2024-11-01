<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueType;

/**
 * Class ActivityPropertyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method ValueType getValue()
 * @method self setValue(ValueType|string $value)
 */
class ActivityPropertyType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class,
        "cbc:Value" => ValueType::class,
    ];

    protected $minOccurs = [
        "cbc:Name" => 1,
        "cbc:Value" => 1,
    ];
}