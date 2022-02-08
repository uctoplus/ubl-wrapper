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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getWorkPhaseCode()
 * @method self setWorkPhaseCode($value)
 * @method mixed getWorkPhase()
 * @method self addWorkPhase($value)
 * @method self setWorkPhase($value)
 * @method mixed getProgressPercent()
 * @method self setProgressPercent($value)
 * @method mixed getStartDate()
 * @method self setStartDate($value)
 * @method mixed getEndDate()
 * @method self setEndDate($value)
 * @method mixed getWorkOrderDocumentReference()
 * @method self addWorkOrderDocumentReference($value)
 * @method self setWorkOrderDocumentReference($value)
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