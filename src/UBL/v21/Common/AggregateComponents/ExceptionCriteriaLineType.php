<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CollaborationPriorityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExceptionResolutionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExceptionStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceMetricTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplyChainActivityTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThresholdQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThresholdValueComparisonCodeType;

/**
 * Class ExceptionCriteriaLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method ThresholdValueComparisonCodeType getThresholdValueComparisonCode()
 * @method self setThresholdValueComparisonCode(ThresholdValueComparisonCodeType|string $value)
 * @method ThresholdQuantityType getThresholdQuantity()
 * @method self setThresholdQuantity(ThresholdQuantityType|string $value)
 * @method ExceptionStatusCodeType getExceptionStatusCode()
 * @method self setExceptionStatusCode(ExceptionStatusCodeType|string $value)
 * @method CollaborationPriorityCodeType getCollaborationPriorityCode()
 * @method self setCollaborationPriorityCode(CollaborationPriorityCodeType|string $value)
 * @method ExceptionResolutionCodeType getExceptionResolutionCode()
 * @method self setExceptionResolutionCode(ExceptionResolutionCodeType|string $value)
 * @method SupplyChainActivityTypeCodeType getSupplyChainActivityTypeCode()
 * @method self setSupplyChainActivityTypeCode(SupplyChainActivityTypeCodeType|string $value)
 * @method PerformanceMetricTypeCodeType getPerformanceMetricTypeCode()
 * @method self setPerformanceMetricTypeCode(PerformanceMetricTypeCodeType|string $value)
 * @method PeriodType getEffectivePeriod()
 * @method self setEffectivePeriod(PeriodType $value)
 * @method ItemType[] getSupplyItem()
 * @method self addSupplyItem(ItemType $value)
 * @method self setSupplyItem(ItemType ...$values)
 * @method ForecastExceptionCriterionLineType getForecastExceptionCriterionLine()
 * @method self setForecastExceptionCriterionLine(ForecastExceptionCriterionLineType $value)
 */
class ExceptionCriteriaLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:ThresholdValueComparisonCode" => ThresholdValueComparisonCodeType::class,
        "cbc:ThresholdQuantity" => ThresholdQuantityType::class,
        "cbc:ExceptionStatusCode" => ExceptionStatusCodeType::class,
        "cbc:CollaborationPriorityCode" => CollaborationPriorityCodeType::class,
        "cbc:ExceptionResolutionCode" => ExceptionResolutionCodeType::class,
        "cbc:SupplyChainActivityTypeCode" => SupplyChainActivityTypeCodeType::class,
        "cbc:PerformanceMetricTypeCode" => PerformanceMetricTypeCodeType::class,
        "cac:EffectivePeriod" => PeriodType::class,
        "cac:SupplyItem" => ItemType::class . "[]",
        "cac:ForecastExceptionCriterionLine" => ForecastExceptionCriterionLineType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:ThresholdValueComparisonCode" => 1,
        "cbc:ThresholdQuantity" => 1,
        "cac:SupplyItem" => 1,
    ];
}