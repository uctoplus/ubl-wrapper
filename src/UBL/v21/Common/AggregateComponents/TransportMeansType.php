<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\JourneyIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationNationalityIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationNationalityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DirectionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportMeansTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TradeServiceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\StowageType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AirTransportType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\RoadTransportType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\RailTransportType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\MaritimeTransportType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DimensionType;

/**
 *
 * @method mixed getJourneyID()
 * @method self setJourneyID($value)
 * @method mixed getRegistrationNationalityID()
 * @method self setRegistrationNationalityID($value)
 * @method mixed getRegistrationNationality()
 * @method self setRegistrationNationality($value)
 * @method mixed getDirectionCode()
 * @method self setDirectionCode($value)
 * @method mixed getTransportMeansTypeCode()
 * @method self setTransportMeansTypeCode($value)
 * @method mixed getTradeServiceCode()
 * @method self setTradeServiceCode($value)
 * @method mixed getStowage()
 * @method self setStowage($value)
 * @method mixed getAirTransport()
 * @method self setAirTransport($value)
 * @method mixed getRoadTransport()
 * @method self setRoadTransport($value)
 * @method mixed getRailTransport()
 * @method self setRailTransport($value)
 * @method mixed getMaritimeTransport()
 * @method self setMaritimeTransport($value)
 * @method mixed getOwnerParty()
 * @method self setOwnerParty($value)
 * @method mixed getMeasurementDimension()
 * @method self setMeasurementDimension($value)
 */
class TransportMeansType extends AggregateComponent
{
    protected $casts = [
        "cbc:JourneyID" => JourneyIDType::class,
        "cbc:RegistrationNationalityID" => RegistrationNationalityIDType::class,
        "cbc:RegistrationNationality" => RegistrationNationalityType::class . "[]",
        "cbc:DirectionCode" => DirectionCodeType::class,
        "cbc:TransportMeansTypeCode" => TransportMeansTypeCodeType::class,
        "cbc:TradeServiceCode" => TradeServiceCodeType::class,
        "cac:Stowage" => StowageType::class,
        "cac:AirTransport" => AirTransportType::class,
        "cac:RoadTransport" => RoadTransportType::class,
        "cac:RailTransport" => RailTransportType::class,
        "cac:MaritimeTransport" => MaritimeTransportType::class,
        "cac:OwnerParty" => PartyType::class,
        "cac:MeasurementDimension" => DimensionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}