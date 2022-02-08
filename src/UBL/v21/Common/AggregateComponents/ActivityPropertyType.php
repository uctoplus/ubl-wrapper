<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueType;

/**
 *
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getValue()
 * @method self setValue($value)
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