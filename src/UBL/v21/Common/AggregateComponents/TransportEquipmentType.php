<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AirFlowPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AnimalFoodApprovedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CharacteristicsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DamageRemarksType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DangerousGoodsApprovedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DispositionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FullnessIndicationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HumanFoodApprovedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HumidityPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LegalStatusIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OwnerTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PowerIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProviderTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferencedConsignmentIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RefrigeratedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RefrigerationOnIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReturnabilityIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SizeTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecialTransportRequirementsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TareWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TraceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TrackingDeviceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportEquipmentTypeCodeType;

/**
 * Class TransportEquipmentType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getReferencedConsignmentID()
 * @method self addReferencedConsignmentID($value)
 * @method self setReferencedConsignmentID($value)
 * @method mixed getTransportEquipmentTypeCode()
 * @method self setTransportEquipmentTypeCode($value)
 * @method mixed getProviderTypeCode()
 * @method self setProviderTypeCode($value)
 * @method mixed getOwnerTypeCode()
 * @method self setOwnerTypeCode($value)
 * @method mixed getSizeTypeCode()
 * @method self setSizeTypeCode($value)
 * @method mixed getDispositionCode()
 * @method self setDispositionCode($value)
 * @method mixed getFullnessIndicationCode()
 * @method self setFullnessIndicationCode($value)
 * @method mixed getRefrigerationOnIndicator()
 * @method self setRefrigerationOnIndicator($value)
 * @method mixed getInformation()
 * @method self addInformation($value)
 * @method self setInformation($value)
 * @method mixed getReturnabilityIndicator()
 * @method self setReturnabilityIndicator($value)
 * @method mixed getLegalStatusIndicator()
 * @method self setLegalStatusIndicator($value)
 * @method mixed getAirFlowPercent()
 * @method self setAirFlowPercent($value)
 * @method mixed getHumidityPercent()
 * @method self setHumidityPercent($value)
 * @method mixed getAnimalFoodApprovedIndicator()
 * @method self setAnimalFoodApprovedIndicator($value)
 * @method mixed getHumanFoodApprovedIndicator()
 * @method self setHumanFoodApprovedIndicator($value)
 * @method mixed getDangerousGoodsApprovedIndicator()
 * @method self setDangerousGoodsApprovedIndicator($value)
 * @method mixed getRefrigeratedIndicator()
 * @method self setRefrigeratedIndicator($value)
 * @method mixed getCharacteristics()
 * @method self setCharacteristics($value)
 * @method mixed getDamageRemarks()
 * @method self addDamageRemarks($value)
 * @method self setDamageRemarks($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getSpecialTransportRequirements()
 * @method self addSpecialTransportRequirements($value)
 * @method self setSpecialTransportRequirements($value)
 * @method mixed getGrossWeightMeasure()
 * @method self setGrossWeightMeasure($value)
 * @method mixed getGrossVolumeMeasure()
 * @method self setGrossVolumeMeasure($value)
 * @method mixed getTareWeightMeasure()
 * @method self setTareWeightMeasure($value)
 * @method mixed getTrackingDeviceCode()
 * @method self setTrackingDeviceCode($value)
 * @method mixed getPowerIndicator()
 * @method self setPowerIndicator($value)
 * @method mixed getTraceID()
 * @method self setTraceID($value)
 * @method mixed getMeasurementDimension()
 * @method self addMeasurementDimension($value)
 * @method self setMeasurementDimension($value)
 * @method mixed getTransportEquipmentSeal()
 * @method self addTransportEquipmentSeal($value)
 * @method self setTransportEquipmentSeal($value)
 * @method mixed getMinimumTemperature()
 * @method self setMinimumTemperature($value)
 * @method mixed getMaximumTemperature()
 * @method self setMaximumTemperature($value)
 * @method mixed getProviderParty()
 * @method self setProviderParty($value)
 * @method mixed getLoadingProofParty()
 * @method self setLoadingProofParty($value)
 * @method mixed getSupplierParty()
 * @method self setSupplierParty($value)
 * @method mixed getOwnerParty()
 * @method self setOwnerParty($value)
 * @method mixed getOperatingParty()
 * @method self setOperatingParty($value)
 * @method mixed getLoadingLocation()
 * @method self setLoadingLocation($value)
 * @method mixed getUnloadingLocation()
 * @method self setUnloadingLocation($value)
 * @method mixed getStorageLocation()
 * @method self setStorageLocation($value)
 * @method mixed getPositioningTransportEvent()
 * @method self addPositioningTransportEvent($value)
 * @method self setPositioningTransportEvent($value)
 * @method mixed getQuarantineTransportEvent()
 * @method self addQuarantineTransportEvent($value)
 * @method self setQuarantineTransportEvent($value)
 * @method mixed getDeliveryTransportEvent()
 * @method self addDeliveryTransportEvent($value)
 * @method self setDeliveryTransportEvent($value)
 * @method mixed getPickupTransportEvent()
 * @method self addPickupTransportEvent($value)
 * @method self setPickupTransportEvent($value)
 * @method mixed getHandlingTransportEvent()
 * @method self addHandlingTransportEvent($value)
 * @method self setHandlingTransportEvent($value)
 * @method mixed getLoadingTransportEvent()
 * @method self addLoadingTransportEvent($value)
 * @method self setLoadingTransportEvent($value)
 * @method mixed getTransportEvent()
 * @method self addTransportEvent($value)
 * @method self setTransportEvent($value)
 * @method mixed getApplicableTransportMeans()
 * @method self setApplicableTransportMeans($value)
 * @method mixed getHaulageTradingTerms()
 * @method self addHaulageTradingTerms($value)
 * @method self setHaulageTradingTerms($value)
 * @method mixed getHazardousGoodsTransit()
 * @method self addHazardousGoodsTransit($value)
 * @method self setHazardousGoodsTransit($value)
 * @method mixed getPackagedTransportHandlingUnit()
 * @method self addPackagedTransportHandlingUnit($value)
 * @method self setPackagedTransportHandlingUnit($value)
 * @method mixed getServiceAllowanceCharge()
 * @method self addServiceAllowanceCharge($value)
 * @method self setServiceAllowanceCharge($value)
 * @method mixed getFreightAllowanceCharge()
 * @method self addFreightAllowanceCharge($value)
 * @method self setFreightAllowanceCharge($value)
 * @method mixed getAttachedTransportEquipment()
 * @method self addAttachedTransportEquipment($value)
 * @method self setAttachedTransportEquipment($value)
 * @method mixed getDelivery()
 * @method self setDelivery($value)
 * @method mixed getPickup()
 * @method self setPickup($value)
 * @method mixed getDespatch()
 * @method self setDespatch($value)
 * @method mixed getShipmentDocumentReference()
 * @method self addShipmentDocumentReference($value)
 * @method self setShipmentDocumentReference($value)
 * @method mixed getContainedInTransportEquipment()
 * @method self addContainedInTransportEquipment($value)
 * @method self setContainedInTransportEquipment($value)
 * @method mixed getPackage()
 * @method self addPackage($value)
 * @method self setPackage($value)
 * @method mixed getGoodsItem()
 * @method self addGoodsItem($value)
 * @method self setGoodsItem($value)
 */
class TransportEquipmentType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ReferencedConsignmentID" => ReferencedConsignmentIDType::class . "[]",
        "cbc:TransportEquipmentTypeCode" => TransportEquipmentTypeCodeType::class,
        "cbc:ProviderTypeCode" => ProviderTypeCodeType::class,
        "cbc:OwnerTypeCode" => OwnerTypeCodeType::class,
        "cbc:SizeTypeCode" => SizeTypeCodeType::class,
        "cbc:DispositionCode" => DispositionCodeType::class,
        "cbc:FullnessIndicationCode" => FullnessIndicationCodeType::class,
        "cbc:RefrigerationOnIndicator" => RefrigerationOnIndicatorType::class,
        "cbc:Information" => InformationType::class . "[]",
        "cbc:ReturnabilityIndicator" => ReturnabilityIndicatorType::class,
        "cbc:LegalStatusIndicator" => LegalStatusIndicatorType::class,
        "cbc:AirFlowPercent" => AirFlowPercentType::class,
        "cbc:HumidityPercent" => HumidityPercentType::class,
        "cbc:AnimalFoodApprovedIndicator" => AnimalFoodApprovedIndicatorType::class,
        "cbc:HumanFoodApprovedIndicator" => HumanFoodApprovedIndicatorType::class,
        "cbc:DangerousGoodsApprovedIndicator" => DangerousGoodsApprovedIndicatorType::class,
        "cbc:RefrigeratedIndicator" => RefrigeratedIndicatorType::class,
        "cbc:Characteristics" => CharacteristicsType::class,
        "cbc:DamageRemarks" => DamageRemarksType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:SpecialTransportRequirements" => SpecialTransportRequirementsType::class . "[]",
        "cbc:GrossWeightMeasure" => GrossWeightMeasureType::class,
        "cbc:GrossVolumeMeasure" => GrossVolumeMeasureType::class,
        "cbc:TareWeightMeasure" => TareWeightMeasureType::class,
        "cbc:TrackingDeviceCode" => TrackingDeviceCodeType::class,
        "cbc:PowerIndicator" => PowerIndicatorType::class,
        "cbc:TraceID" => TraceIDType::class,
        "cac:MeasurementDimension" => DimensionType::class . "[]",
        "cac:TransportEquipmentSeal" => TransportEquipmentSealType::class . "[]",
        "cac:MinimumTemperature" => TemperatureType::class,
        "cac:MaximumTemperature" => TemperatureType::class,
        "cac:ProviderParty" => PartyType::class,
        "cac:LoadingProofParty" => PartyType::class,
        "cac:SupplierParty" => SupplierPartyType::class,
        "cac:OwnerParty" => PartyType::class,
        "cac:OperatingParty" => PartyType::class,
        "cac:LoadingLocation" => LocationType::class,
        "cac:UnloadingLocation" => LocationType::class,
        "cac:StorageLocation" => LocationType::class,
        "cac:PositioningTransportEvent" => TransportEventType::class . "[]",
        "cac:QuarantineTransportEvent" => TransportEventType::class . "[]",
        "cac:DeliveryTransportEvent" => TransportEventType::class . "[]",
        "cac:PickupTransportEvent" => TransportEventType::class . "[]",
        "cac:HandlingTransportEvent" => TransportEventType::class . "[]",
        "cac:LoadingTransportEvent" => TransportEventType::class . "[]",
        "cac:TransportEvent" => TransportEventType::class . "[]",
        "cac:ApplicableTransportMeans" => TransportMeansType::class,
        "cac:HaulageTradingTerms" => TradingTermsType::class . "[]",
        "cac:HazardousGoodsTransit" => HazardousGoodsTransitType::class . "[]",
        "cac:PackagedTransportHandlingUnit" => TransportHandlingUnitType::class . "[]",
        "cac:ServiceAllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:FreightAllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:AttachedTransportEquipment" => TransportEquipmentType::class . "[]",
        "cac:Delivery" => DeliveryType::class,
        "cac:Pickup" => PickupType::class,
        "cac:Despatch" => DespatchType::class,
        "cac:ShipmentDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ContainedInTransportEquipment" => TransportEquipmentType::class . "[]",
        "cac:Package" => PackageType::class . "[]",
        "cac:GoodsItem" => GoodsItemType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}