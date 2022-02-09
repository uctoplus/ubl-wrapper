<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CollaborationPriorityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparedValueMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExceptionStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceMetricTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResolutionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceValueMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplyChainActivityTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VarianceQuantityType;

/**
 * Class ExceptionNotificationLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method ExceptionStatusCodeType getExceptionStatusCode()
 * @method self setExceptionStatusCode(ExceptionStatusCodeType|string $value)
 * @method CollaborationPriorityCodeType getCollaborationPriorityCode()
 * @method self setCollaborationPriorityCode(CollaborationPriorityCodeType|string $value)
 * @method ResolutionCodeType getResolutionCode()
 * @method self setResolutionCode(ResolutionCodeType|string $value)
 * @method ComparedValueMeasureType getComparedValueMeasure()
 * @method self setComparedValueMeasure(ComparedValueMeasureType|string $value)
 * @method SourceValueMeasureType getSourceValueMeasure()
 * @method self setSourceValueMeasure(SourceValueMeasureType|string $value)
 * @method VarianceQuantityType getVarianceQuantity()
 * @method self setVarianceQuantity(VarianceQuantityType|string $value)
 * @method SupplyChainActivityTypeCodeType getSupplyChainActivityTypeCode()
 * @method self setSupplyChainActivityTypeCode(SupplyChainActivityTypeCodeType|string $value)
 * @method PerformanceMetricTypeCodeType getPerformanceMetricTypeCode()
 * @method self setPerformanceMetricTypeCode(PerformanceMetricTypeCodeType|string $value)
 * @method PeriodType getExceptionObservationPeriod()
 * @method self setExceptionObservationPeriod(PeriodType $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method ForecastExceptionType getForecastException()
 * @method self setForecastException(ForecastExceptionType $value)
 * @method ItemType getSupplyItem()
 * @method self setSupplyItem(ItemType $value)
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