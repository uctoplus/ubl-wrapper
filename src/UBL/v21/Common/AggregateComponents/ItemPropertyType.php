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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method NameCodeType getNameCode()
 * @method self setNameCode(NameCodeType|string $value)
 * @method TestMethodType getTestMethod()
 * @method self setTestMethod(TestMethodType|string $value)
 * @method ValueType getValue()
 * @method self setValue(ValueType|string $value)
 * @method ValueQuantityType getValueQuantity()
 * @method self setValueQuantity(ValueQuantityType|string $value)
 * @method ValueQualifierType getValueQualifier()
 * @method self addValueQualifier(ValueQualifierType|string $value)
 * @method self setValueQualifier(ValueQualifierType ...$values)
 * @method ImportanceCodeType getImportanceCode()
 * @method self setImportanceCode(ImportanceCodeType|string $value)
 * @method ListValueType getListValue()
 * @method self addListValue(ListValueType|string $value)
 * @method self setListValue(ListValueType ...$values)
 * @method PeriodType getUsabilityPeriod()
 * @method self setUsabilityPeriod(PeriodType $value)
 * @method ItemPropertyGroupType getItemPropertyGroup()
 * @method self addItemPropertyGroup(ItemPropertyGroupType $value)
 * @method self setItemPropertyGroup(ItemPropertyGroupType ...$values)
 * @method DimensionType getRangeDimension()
 * @method self setRangeDimension(DimensionType $value)
 * @method ItemPropertyRangeType getItemPropertyRange()
 * @method self setItemPropertyRange(ItemPropertyRangeType $value)
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