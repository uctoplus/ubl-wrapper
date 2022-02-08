<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReliabilityPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RemarksType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumericType;

/**
 * Class TransportScheduleType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getSequenceNumeric()
 * @method self setSequenceNumeric($value)
 * @method mixed getReferenceDate()
 * @method self setReferenceDate($value)
 * @method mixed getReferenceTime()
 * @method self setReferenceTime($value)
 * @method mixed getReliabilityPercent()
 * @method self setReliabilityPercent($value)
 * @method mixed getRemarks()
 * @method self addRemarks($value)
 * @method self setRemarks($value)
 * @method mixed getStatusLocation()
 * @method self setStatusLocation($value)
 * @method mixed getActualArrivalTransportEvent()
 * @method self setActualArrivalTransportEvent($value)
 * @method mixed getActualDepartureTransportEvent()
 * @method self setActualDepartureTransportEvent($value)
 * @method mixed getEstimatedDepartureTransportEvent()
 * @method self setEstimatedDepartureTransportEvent($value)
 * @method mixed getEstimatedArrivalTransportEvent()
 * @method self setEstimatedArrivalTransportEvent($value)
 * @method mixed getPlannedDepartureTransportEvent()
 * @method self setPlannedDepartureTransportEvent($value)
 * @method mixed getPlannedArrivalTransportEvent()
 * @method self setPlannedArrivalTransportEvent($value)
 */
class TransportScheduleType extends AggregateComponent
{
    protected $casts = [
        "cbc:SequenceNumeric" => SequenceNumericType::class,
        "cbc:ReferenceDate" => ReferenceDateType::class,
        "cbc:ReferenceTime" => ReferenceTimeType::class,
        "cbc:ReliabilityPercent" => ReliabilityPercentType::class,
        "cbc:Remarks" => RemarksType::class . "[]",
        "cac:StatusLocation" => LocationType::class,
        "cac:ActualArrivalTransportEvent" => TransportEventType::class,
        "cac:ActualDepartureTransportEvent" => TransportEventType::class,
        "cac:EstimatedDepartureTransportEvent" => TransportEventType::class,
        "cac:EstimatedArrivalTransportEvent" => TransportEventType::class,
        "cac:PlannedDepartureTransportEvent" => TransportEventType::class,
        "cac:PlannedArrivalTransportEvent" => TransportEventType::class,
    ];

    protected $minOccurs = [
        "cbc:SequenceNumeric" => 1,
        "cac:StatusLocation" => 1,
    ];
}