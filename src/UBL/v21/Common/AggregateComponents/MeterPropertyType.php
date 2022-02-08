<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueQualifierType;

/**
 *
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getNameCode()
 * @method self setNameCode($value)
 * @method mixed getValue()
 * @method self setValue($value)
 * @method mixed getValueQuantity()
 * @method self setValueQuantity($value)
 * @method mixed getValueQualifier()
 * @method self setValueQualifier($value)
 */
class MeterPropertyType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class,
        "cbc:NameCode" => NameCodeType::class,
        "cbc:Value" => ValueType::class,
        "cbc:ValueQuantity" => ValueQuantityType::class,
        "cbc:ValueQualifier" => ValueQualifierType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}