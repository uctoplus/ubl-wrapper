<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ImportanceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ListValueType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TestMethodType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueQualifierType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueType;

/**
 * Class ItemPropertyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getNameCode()
 * @method self setNameCode($value)
 * @method mixed getTestMethod()
 * @method self setTestMethod($value)
 * @method mixed getValue()
 * @method self setValue($value)
 * @method mixed getValueQuantity()
 * @method self setValueQuantity($value)
 * @method mixed getValueQualifier()
 * @method self addValueQualifier($value)
 * @method self setValueQualifier($value)
 * @method mixed getImportanceCode()
 * @method self setImportanceCode($value)
 * @method mixed getListValue()
 * @method self addListValue($value)
 * @method self setListValue($value)
 * @method mixed getUsabilityPeriod()
 * @method self setUsabilityPeriod($value)
 * @method mixed getItemPropertyGroup()
 * @method self addItemPropertyGroup($value)
 * @method self setItemPropertyGroup($value)
 * @method mixed getRangeDimension()
 * @method self setRangeDimension($value)
 * @method mixed getItemPropertyRange()
 * @method self setItemPropertyRange($value)
 */
class ItemPropertyType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cbc:NameCode" => NameCodeType::class,
        "cbc:TestMethod" => TestMethodType::class,
        "cbc:Value" => ValueType::class,
        "cbc:ValueQuantity" => ValueQuantityType::class,
        "cbc:ValueQualifier" => ValueQualifierType::class . "[]",
        "cbc:ImportanceCode" => ImportanceCodeType::class,
        "cbc:ListValue" => ListValueType::class . "[]",
        "cac:UsabilityPeriod" => PeriodType::class,
        "cac:ItemPropertyGroup" => ItemPropertyGroupType::class . "[]",
        "cac:RangeDimension" => DimensionType::class,
        "cac:ItemPropertyRange" => ItemPropertyRangeType::class,
    ];

    protected $minOccurs = [
        "cbc:Name" => 1,
    ];
}