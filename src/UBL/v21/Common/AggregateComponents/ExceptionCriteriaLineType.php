<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThresholdValueComparisonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThresholdQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExceptionStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CollaborationPriorityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExceptionResolutionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplyChainActivityTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceMetricTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ForecastExceptionCriterionLineType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getThresholdValueComparisonCode()
 * @method self setThresholdValueComparisonCode($value)
 * @method mixed getThresholdQuantity()
 * @method self setThresholdQuantity($value)
 * @method mixed getExceptionStatusCode()
 * @method self setExceptionStatusCode($value)
 * @method mixed getCollaborationPriorityCode()
 * @method self setCollaborationPriorityCode($value)
 * @method mixed getExceptionResolutionCode()
 * @method self setExceptionResolutionCode($value)
 * @method mixed getSupplyChainActivityTypeCode()
 * @method self setSupplyChainActivityTypeCode($value)
 * @method mixed getPerformanceMetricTypeCode()
 * @method self setPerformanceMetricTypeCode($value)
 * @method mixed getEffectivePeriod()
 * @method self setEffectivePeriod($value)
 * @method mixed getSupplyItem()
 * @method self setSupplyItem($value)
 * @method mixed getForecastExceptionCriterionLine()
 * @method self setForecastExceptionCriterionLine($value)
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