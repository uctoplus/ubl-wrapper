<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualPickupDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualPickupTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EarliestPickupDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EarliestPickupTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestPickupDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestPickupTimeType;

/**
 * Class PickupType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ActualPickupDateType getActualPickupDate()
 * @method self setActualPickupDate(ActualPickupDateType|string $value)
 * @method ActualPickupTimeType getActualPickupTime()
 * @method self setActualPickupTime(ActualPickupTimeType|string $value)
 * @method EarliestPickupDateType getEarliestPickupDate()
 * @method self setEarliestPickupDate(EarliestPickupDateType|string $value)
 * @method EarliestPickupTimeType getEarliestPickupTime()
 * @method self setEarliestPickupTime(EarliestPickupTimeType|string $value)
 * @method LatestPickupDateType getLatestPickupDate()
 * @method self setLatestPickupDate(LatestPickupDateType|string $value)
 * @method LatestPickupTimeType getLatestPickupTime()
 * @method self setLatestPickupTime(LatestPickupTimeType|string $value)
 * @method LocationType getPickupLocation()
 * @method self setPickupLocation(LocationType $value)
 * @method PartyType getPickupParty()
 * @method self setPickupParty(PartyType $value)
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