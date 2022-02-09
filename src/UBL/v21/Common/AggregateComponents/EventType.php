<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompletionIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IdentificationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OccurrenceDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OccurrenceTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TypeCodeType;

/**
 * Class EventType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IdentificationIDType getIdentificationID()
 * @method self setIdentificationID(IdentificationIDType|string $value)
 * @method OccurrenceDateType getOccurrenceDate()
 * @method self setOccurrenceDate(OccurrenceDateType|string $value)
 * @method OccurrenceTimeType getOccurrenceTime()
 * @method self setOccurrenceTime(OccurrenceTimeType|string $value)
 * @method TypeCodeType getTypeCode()
 * @method self setTypeCode(TypeCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method CompletionIndicatorType getCompletionIndicator()
 * @method self setCompletionIndicator(CompletionIndicatorType|string $value)
 * @method StatusType getCurrentStatus()
 * @method self addCurrentStatus(StatusType $value)
 * @method self setCurrentStatus(StatusType ...$values)
 * @method ContactType getContact()
 * @method self addContact(ContactType $value)
 * @method self setContact(ContactType ...$values)
 * @method LocationType getOccurenceLocation()
 * @method self setOccurenceLocation(LocationType $value)
 */
class EventType extends AggregateComponent
{
    protected $casts = [
        "cbc:IdentificationID" => IdentificationIDType::class,
        "cbc:OccurrenceDate" => OccurrenceDateType::class,
        "cbc:OccurrenceTime" => OccurrenceTimeType::class,
        "cbc:TypeCode" => TypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:CompletionIndicator" => CompletionIndicatorType::class,
        "cac:CurrentStatus" => StatusType::class . "[]",
        "cac:Contact" => ContactType::class . "[]",
        "cac:OccurenceLocation" => LocationType::class,
    ];

    protected $minOccurs = [
    ];
}