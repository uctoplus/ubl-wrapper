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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method SequenceNumericType getSequenceNumeric()
 * @method self setSequenceNumeric(SequenceNumericType|string $value)
 * @method ReferenceDateType getReferenceDate()
 * @method self setReferenceDate(ReferenceDateType|string $value)
 * @method ReferenceTimeType getReferenceTime()
 * @method self setReferenceTime(ReferenceTimeType|string $value)
 * @method ReliabilityPercentType getReliabilityPercent()
 * @method self setReliabilityPercent(ReliabilityPercentType|string $value)
 * @method RemarksType[] getRemarks()
 * @method self addRemarks(RemarksType|string $value)
 * @method self setRemarks(RemarksType ...$values)
 * @method LocationType getStatusLocation()
 * @method self setStatusLocation(LocationType $value)
 * @method TransportEventType getActualArrivalTransportEvent()
 * @method self setActualArrivalTransportEvent(TransportEventType $value)
 * @method TransportEventType getActualDepartureTransportEvent()
 * @method self setActualDepartureTransportEvent(TransportEventType $value)
 * @method TransportEventType getEstimatedDepartureTransportEvent()
 * @method self setEstimatedDepartureTransportEvent(TransportEventType $value)
 * @method TransportEventType getEstimatedArrivalTransportEvent()
 * @method self setEstimatedArrivalTransportEvent(TransportEventType $value)
 * @method TransportEventType getPlannedDepartureTransportEvent()
 * @method self setPlannedDepartureTransportEvent(TransportEventType $value)
 * @method TransportEventType getPlannedArrivalTransportEvent()
 * @method self setPlannedArrivalTransportEvent(TransportEventType $value)
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