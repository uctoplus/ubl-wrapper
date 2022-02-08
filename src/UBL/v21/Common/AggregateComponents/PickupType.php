<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualPickupDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualPickupTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EarliestPickupDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EarliestPickupTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestPickupDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestPickupTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getActualPickupDate()
 * @method self setActualPickupDate($value)
 * @method mixed getActualPickupTime()
 * @method self setActualPickupTime($value)
 * @method mixed getEarliestPickupDate()
 * @method self setEarliestPickupDate($value)
 * @method mixed getEarliestPickupTime()
 * @method self setEarliestPickupTime($value)
 * @method mixed getLatestPickupDate()
 * @method self setLatestPickupDate($value)
 * @method mixed getLatestPickupTime()
 * @method self setLatestPickupTime($value)
 * @method mixed getPickupLocation()
 * @method self setPickupLocation($value)
 * @method mixed getPickupParty()
 * @method self setPickupParty($value)
 */
class PickupType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ActualPickupDate" => ActualPickupDateType::class,
        "cbc:ActualPickupTime" => ActualPickupTimeType::class,
        "cbc:EarliestPickupDate" => EarliestPickupDateType::class,
        "cbc:EarliestPickupTime" => EarliestPickupTimeType::class,
        "cbc:LatestPickupDate" => LatestPickupDateType::class,
        "cbc:LatestPickupTime" => LatestPickupTimeType::class,
        "cac:PickupLocation" => LocationType::class,
        "cac:PickupParty" => PartyType::class,
    ];

    protected $minOccurs = [
    ];
}