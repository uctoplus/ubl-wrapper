<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceMetricTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceValueQuantityType;

/**
 * Class PerformanceDataLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method PerformanceValueQuantityType getPerformanceValueQuantity()
 * @method self setPerformanceValueQuantity(PerformanceValueQuantityType|string $value)
 * @method PerformanceMetricTypeCodeType getPerformanceMetricTypeCode()
 * @method self setPerformanceMetricTypeCode(PerformanceMetricTypeCodeType|string $value)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 */
class PerformanceDataLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:PerformanceValueQuantity" => PerformanceValueQuantityType::class,
        "cbc:PerformanceMetricTypeCode" => PerformanceMetricTypeCodeType::class,
        "cac:Period" => PeriodType::class,
        "cac:Item" => ItemType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:PerformanceValueQuantity" => 1,
        "cbc:PerformanceMetricTypeCode" => 1,
    ];
}