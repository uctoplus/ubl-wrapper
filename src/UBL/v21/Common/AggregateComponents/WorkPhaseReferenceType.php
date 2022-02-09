<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EndDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProgressPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StartDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WorkPhaseCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WorkPhaseType;

/**
 * Class WorkPhaseReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method WorkPhaseCodeType getWorkPhaseCode()
 * @method self setWorkPhaseCode(WorkPhaseCodeType|string $value)
 * @method WorkPhaseType getWorkPhase()
 * @method self addWorkPhase(WorkPhaseType|string $value)
 * @method self setWorkPhase(WorkPhaseType ...$values)
 * @method ProgressPercentType getProgressPercent()
 * @method self setProgressPercent(ProgressPercentType|string $value)
 * @method StartDateType getStartDate()
 * @method self setStartDate(StartDateType|string $value)
 * @method EndDateType getEndDate()
 * @method self setEndDate(EndDateType|string $value)
 * @method DocumentReferenceType getWorkOrderDocumentReference()
 * @method self addWorkOrderDocumentReference(DocumentReferenceType $value)
 * @method self setWorkOrderDocumentReference(DocumentReferenceType ...$values)
 */
class WorkPhaseReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:WorkPhaseCode" => WorkPhaseCodeType::class,
        "cbc:WorkPhase" => WorkPhaseType::class . "[]",
        "cbc:ProgressPercent" => ProgressPercentType::class,
        "cbc:StartDate" => StartDateType::class,
        "cbc:EndDate" => EndDateType::class,
        "cac:WorkOrderDocumentReference" => DocumentReferenceType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}