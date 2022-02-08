<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportServiceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TariffClassCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriorityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreightRateClassCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportationServiceDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportationServiceDetailsURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NominationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NominationTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransportEquipmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CommodityClassificationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DimensionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShipmentStageType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransportEventType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EnvironmentalEmissionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ServiceFrequencyType;

/**
 *
 * @method mixed getTransportServiceCode()
 * @method self setTransportServiceCode($value)
 * @method mixed getTariffClassCode()
 * @method self setTariffClassCode($value)
 * @method mixed getPriority()
 * @method self setPriority($value)
 * @method mixed getFreightRateClassCode()
 * @method self setFreightRateClassCode($value)
 * @method mixed getTransportationServiceDescription()
 * @method self setTransportationServiceDescription($value)
 * @method mixed getTransportationServiceDetailsURI()
 * @method self setTransportationServiceDetailsURI($value)
 * @method mixed getNominationDate()
 * @method self setNominationDate($value)
 * @method mixed getNominationTime()
 * @method self setNominationTime($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getSequenceNumeric()
 * @method self setSequenceNumeric($value)
 * @method mixed getTransportEquipment()
 * @method self setTransportEquipment($value)
 * @method mixed getSupportedTransportEquipment()
 * @method self setSupportedTransportEquipment($value)
 * @method mixed getUnsupportedTransportEquipment()
 * @method self setUnsupportedTransportEquipment($value)
 * @method mixed getCommodityClassification()
 * @method self setCommodityClassification($value)
 * @method mixed getSupportedCommodityClassification()
 * @method self setSupportedCommodityClassification($value)
 * @method mixed getUnsupportedCommodityClassification()
 * @method self setUnsupportedCommodityClassification($value)
 * @method mixed getTotalCapacityDimension()
 * @method self setTotalCapacityDimension($value)
 * @method mixed getShipmentStage()
 * @method self setShipmentStage($value)
 * @method mixed getTransportEvent()
 * @method self setTransportEvent($value)
 * @method mixed getResponsibleTransportServiceProviderParty()
 * @method self setResponsibleTransportServiceProviderParty($value)
 * @method mixed getEnvironmentalEmission()
 * @method self setEnvironmentalEmission($value)
 * @method mixed getEstimatedDurationPeriod()
 * @method self setEstimatedDurationPeriod($value)
 * @method mixed getScheduledServiceFrequency()
 * @method self setScheduledServiceFrequency($value)
 */
class TransportationServiceType extends AggregateComponent
{
    protected $casts = [
        "cbc:TransportServiceCode" => TransportServiceCodeType::class,
        "cbc:TariffClassCode" => TariffClassCodeType::class,
        "cbc:Priority" => PriorityType::class,
        "cbc:FreightRateClassCode" => FreightRateClassCodeType::class,
        "cbc:TransportationServiceDescription" => TransportationServiceDescriptionType::class . "[]",
        "cbc:TransportationServiceDetailsURI" => TransportationServiceDetailsURIType::class,
        "cbc:NominationDate" => NominationDateType::class,
        "cbc:NominationTime" => NominationTimeType::class,
        "cbc:Name" => NameType::class,
        "cbc:SequenceNumeric" => SequenceNumericType::class,
        "cac:TransportEquipment" => TransportEquipmentType::class . "[]",
        "cac:SupportedTransportEquipment" => TransportEquipmentType::class . "[]",
        "cac:UnsupportedTransportEquipment" => TransportEquipmentType::class . "[]",
        "cac:CommodityClassification" => CommodityClassificationType::class . "[]",
        "cac:SupportedCommodityClassification" => CommodityClassificationType::class . "[]",
        "cac:UnsupportedCommodityClassification" => CommodityClassificationType::class . "[]",
        "cac:TotalCapacityDimension" => DimensionType::class,
        "cac:ShipmentStage" => ShipmentStageType::class . "[]",
        "cac:TransportEvent" => TransportEventType::class . "[]",
        "cac:ResponsibleTransportServiceProviderParty" => PartyType::class,
        "cac:EnvironmentalEmission" => EnvironmentalEmissionType::class . "[]",
        "cac:EstimatedDurationPeriod" => PeriodType::class,
        "cac:ScheduledServiceFrequency" => ServiceFrequencyType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:TransportServiceCode" => 1,
    ];
}