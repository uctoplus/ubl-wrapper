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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getTransportEmergencyCardCode()
 * @method self setTransportEmergencyCardCode($value)
 * @method mixed getPackingCriteriaCode()
 * @method self setPackingCriteriaCode($value)
 * @method mixed getHazardousRegulationCode()
 * @method self setHazardousRegulationCode($value)
 * @method mixed getInhalationToxicityZoneCode()
 * @method self setInhalationToxicityZoneCode($value)
 * @method mixed getTransportAuthorizationCode()
 * @method self setTransportAuthorizationCode($value)
 * @method mixed getMaximumTemperature()
 * @method self setMaximumTemperature($value)
 * @method mixed getMinimumTemperature()
 * @method self setMinimumTemperature($value)
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