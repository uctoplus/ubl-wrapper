<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExceptionStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CollaborationPriorityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResolutionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparedValueMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceValueMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VarianceQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplyChainActivityTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceMetricTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ForecastExceptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getExceptionStatusCode()
 * @method self setExceptionStatusCode($value)
 * @method mixed getCollaborationPriorityCode()
 * @method self setCollaborationPriorityCode($value)
 * @method mixed getResolutionCode()
 * @method self setResolutionCode($value)
 * @method mixed getComparedValueMeasure()
 * @method self setComparedValueMeasure($value)
 * @method mixed getSourceValueMeasure()
 * @method self setSourceValueMeasure($value)
 * @method mixed getVarianceQuantity()
 * @method self setVarianceQuantity($value)
 * @method mixed getSupplyChainActivityTypeCode()
 * @method self setSupplyChainActivityTypeCode($value)
 * @method mixed getPerformanceMetricTypeCode()
 * @method self setPerformanceMetricTypeCode($value)
 * @method mixed getExceptionObservationPeriod()
 * @method self setExceptionObservationPeriod($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getForecastException()
 * @method self setForecastException($value)
 * @method mixed getSupplyItem()
 * @method self setSupplyItem($value)
 */
class ExceptionNotificationLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:ExceptionStatusCode" => ExceptionStatusCodeType::class,
        "cbc:CollaborationPriorityCode" => CollaborationPriorityCodeType::class,
        "cbc:ResolutionCode" => ResolutionCodeType::class,
        "cbc:ComparedValueMeasure" => ComparedValueMeasureType::class,
        "cbc:SourceValueMeasure" => SourceValueMeasureType::class,
        "cbc:VarianceQuantity" => VarianceQuantityType::class,
        "cbc:SupplyChainActivityTypeCode" => SupplyChainActivityTypeCodeType::class,
        "cbc:PerformanceMetricTypeCode" => PerformanceMetricTypeCodeType::class,
        "cac:ExceptionObservationPeriod" => PeriodType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ForecastException" => ForecastExceptionType::class,
        "cac:SupplyItem" => ItemType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:ComparedValueMeasure" => 1,
        "cbc:SourceValueMeasure" => 1,
        "cac:SupplyItem" => 1,
    ];
}