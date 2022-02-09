<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueQualifierType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueType;

/**
 * Class MeterPropertyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method NameCodeType getNameCode()
 * @method self setNameCode(NameCodeType|string $value)
 * @method ValueType getValue()
 * @method self setValue(ValueType|string $value)
 * @method ValueQuantityType getValueQuantity()
 * @method self setValueQuantity(ValueQuantityType|string $value)
 * @method ValueQualifierType getValueQualifier()
 * @method self addValueQualifier(ValueQualifierType|string $value)
 * @method self setValueQualifier(ValueQualifierType ...$values)
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