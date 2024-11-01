<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRegulationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InhalationToxicityZoneCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackingCriteriaCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportAuthorizationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportEmergencyCardCodeType;

/**
 * Class HazardousGoodsTransitType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TransportEmergencyCardCodeType getTransportEmergencyCardCode()
 * @method self setTransportEmergencyCardCode(TransportEmergencyCardCodeType|string $value)
 * @method PackingCriteriaCodeType getPackingCriteriaCode()
 * @method self setPackingCriteriaCode(PackingCriteriaCodeType|string $value)
 * @method HazardousRegulationCodeType getHazardousRegulationCode()
 * @method self setHazardousRegulationCode(HazardousRegulationCodeType|string $value)
 * @method InhalationToxicityZoneCodeType getInhalationToxicityZoneCode()
 * @method self setInhalationToxicityZoneCode(InhalationToxicityZoneCodeType|string $value)
 * @method TransportAuthorizationCodeType getTransportAuthorizationCode()
 * @method self setTransportAuthorizationCode(TransportAuthorizationCodeType|string $value)
 * @method TemperatureType getMaximumTemperature()
 * @method self setMaximumTemperature(TemperatureType $value)
 * @method TemperatureType getMinimumTemperature()
 * @method self setMinimumTemperature(TemperatureType $value)
 */
class HazardousGoodsTransitType extends AggregateComponent
{
    protected $casts = [
        "cbc:TransportEmergencyCardCode" => TransportEmergencyCardCodeType::class,
        "cbc:PackingCriteriaCode" => PackingCriteriaCodeType::class,
        "cbc:HazardousRegulationCode" => HazardousRegulationCodeType::class,
        "cbc:InhalationToxicityZoneCode" => InhalationToxicityZoneCodeType::class,
        "cbc:TransportAuthorizationCode" => TransportAuthorizationCodeType::class,
        "cac:MaximumTemperature" => TemperatureType::class,
        "cac:MinimumTemperature" => TemperatureType::class,
    ];

    protected $minOccurs = [
    ];
}