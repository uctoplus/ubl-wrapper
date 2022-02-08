<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IdentificationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OccurrenceDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OccurrenceTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompletionIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\StatusType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContactType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;

/**
 *
 * @method mixed getIdentificationID()
 * @method self setIdentificationID($value)
 * @method mixed getOccurrenceDate()
 * @method self setOccurrenceDate($value)
 * @method mixed getOccurrenceTime()
 * @method self setOccurrenceTime($value)
 * @method mixed getTypeCode()
 * @method self setTypeCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getCompletionIndicator()
 * @method self setCompletionIndicator($value)
 * @method mixed getCurrentStatus()
 * @method self setCurrentStatus($value)
 * @method mixed getContact()
 * @method self setContact($value)
 * @method mixed getOccurenceLocation()
 * @method self setOccurenceLocation($value)
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