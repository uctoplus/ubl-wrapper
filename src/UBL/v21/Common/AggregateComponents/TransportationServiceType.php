<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreightRateClassCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NominationDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NominationTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriorityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TariffClassCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportationServiceDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportationServiceDetailsURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportServiceCodeType;

/**
 * Class TransportationServiceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TransportServiceCodeType getTransportServiceCode()
 * @method self setTransportServiceCode(TransportServiceCodeType|string $value)
 * @method TariffClassCodeType getTariffClassCode()
 * @method self setTariffClassCode(TariffClassCodeType|string $value)
 * @method PriorityType getPriority()
 * @method self setPriority(PriorityType|string $value)
 * @method FreightRateClassCodeType getFreightRateClassCode()
 * @method self setFreightRateClassCode(FreightRateClassCodeType|string $value)
 * @method TransportationServiceDescriptionType getTransportationServiceDescription()
 * @method self addTransportationServiceDescription(TransportationServiceDescriptionType|string $value)
 * @method self setTransportationServiceDescription(TransportationServiceDescriptionType ...$values)
 * @method TransportationServiceDetailsURIType getTransportationServiceDetailsURI()
 * @method self setTransportationServiceDetailsURI(TransportationServiceDetailsURIType|string $value)
 * @method NominationDateType getNominationDate()
 * @method self setNominationDate(NominationDateType|string $value)
 * @method NominationTimeType getNominationTime()
 * @method self setNominationTime(NominationTimeType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method SequenceNumericType getSequenceNumeric()
 * @method self setSequenceNumeric(SequenceNumericType|string $value)
 * @method TransportEquipmentType getTransportEquipment()
 * @method self addTransportEquipment(TransportEquipmentType $value)
 * @method self setTransportEquipment(TransportEquipmentType ...$values)
 * @method TransportEquipmentType getSupportedTransportEquipment()
 * @method self addSupportedTransportEquipment(TransportEquipmentType $value)
 * @method self setSupportedTransportEquipment(TransportEquipmentType ...$values)
 * @method TransportEquipmentType getUnsupportedTransportEquipment()
 * @method self addUnsupportedTransportEquipment(TransportEquipmentType $value)
 * @method self setUnsupportedTransportEquipment(TransportEquipmentType ...$values)
 * @method CommodityClassificationType getCommodityClassification()
 * @method self addCommodityClassification(CommodityClassificationType $value)
 * @method self setCommodityClassification(CommodityClassificationType ...$values)
 * @method CommodityClassificationType getSupportedCommodityClassification()
 * @method self addSupportedCommodityClassification(CommodityClassificationType $value)
 * @method self setSupportedCommodityClassification(CommodityClassificationType ...$values)
 * @method CommodityClassificationType getUnsupportedCommodityClassification()
 * @method self addUnsupportedCommodityClassification(CommodityClassificationType $value)
 * @method self setUnsupportedCommodityClassification(CommodityClassificationType ...$values)
 * @method DimensionType getTotalCapacityDimension()
 * @method self setTotalCapacityDimension(DimensionType $value)
 * @method ShipmentStageType getShipmentStage()
 * @method self addShipmentStage(ShipmentStageType $value)
 * @method self setShipmentStage(ShipmentStageType ...$values)
 * @method TransportEventType getTransportEvent()
 * @method self addTransportEvent(TransportEventType $value)
 * @method self setTransportEvent(TransportEventType ...$values)
 * @method PartyType getResponsibleTransportServiceProviderParty()
 * @method self setResponsibleTransportServiceProviderParty(PartyType $value)
 * @method EnvironmentalEmissionType getEnvironmentalEmission()
 * @method self addEnvironmentalEmission(EnvironmentalEmissionType $value)
 * @method self setEnvironmentalEmission(EnvironmentalEmissionType ...$values)
 * @method PeriodType getEstimatedDurationPeriod()
 * @method self setEstimatedDurationPeriod(PeriodType $value)
 * @method ServiceFrequencyType getScheduledServiceFrequency()
 * @method self addScheduledServiceFrequency(ServiceFrequencyType $value)
 * @method self setScheduledServiceFrequency(ServiceFrequencyType ...$values)
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