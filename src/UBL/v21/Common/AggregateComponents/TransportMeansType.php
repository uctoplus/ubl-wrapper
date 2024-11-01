<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DirectionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\JourneyIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationNationalityIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegistrationNationalityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TradeServiceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportMeansTypeCodeType;

/**
 * Class TransportMeansType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method JourneyIDType getJourneyID()
 * @method self setJourneyID(JourneyIDType|string $value)
 * @method RegistrationNationalityIDType getRegistrationNationalityID()
 * @method self setRegistrationNationalityID(RegistrationNationalityIDType|string $value)
 * @method RegistrationNationalityType[] getRegistrationNationality()
 * @method self addRegistrationNationality(RegistrationNationalityType|string $value)
 * @method self setRegistrationNationality(RegistrationNationalityType ...$values)
 * @method DirectionCodeType getDirectionCode()
 * @method self setDirectionCode(DirectionCodeType|string $value)
 * @method TransportMeansTypeCodeType getTransportMeansTypeCode()
 * @method self setTransportMeansTypeCode(TransportMeansTypeCodeType|string $value)
 * @method TradeServiceCodeType getTradeServiceCode()
 * @method self setTradeServiceCode(TradeServiceCodeType|string $value)
 * @method StowageType getStowage()
 * @method self setStowage(StowageType $value)
 * @method AirTransportType getAirTransport()
 * @method self setAirTransport(AirTransportType $value)
 * @method RoadTransportType getRoadTransport()
 * @method self setRoadTransport(RoadTransportType $value)
 * @method RailTransportType getRailTransport()
 * @method self setRailTransport(RailTransportType $value)
 * @method MaritimeTransportType getMaritimeTransport()
 * @method self setMaritimeTransport(MaritimeTransportType $value)
 * @method PartyType getOwnerParty()
 * @method self setOwnerParty(PartyType $value)
 * @method DimensionType[] getMeasurementDimension()
 * @method self addMeasurementDimension(DimensionType $value)
 * @method self setMeasurementDimension(DimensionType ...$values)
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