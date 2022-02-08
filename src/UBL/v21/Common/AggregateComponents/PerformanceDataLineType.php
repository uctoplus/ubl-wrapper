<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceValueQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceMetricTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getPerformanceValueQuantity()
 * @method self setPerformanceValueQuantity($value)
 * @method mixed getPerformanceMetricTypeCode()
 * @method self setPerformanceMetricTypeCode($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
 * @method mixed getItem()
 * @method self setItem($value)
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