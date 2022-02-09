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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ReferencedConsignmentIDType getReferencedConsignmentID()
 * @method self addReferencedConsignmentID(ReferencedConsignmentIDType|string $value)
 * @method self setReferencedConsignmentID(ReferencedConsignmentIDType ...$values)
 * @method TransportEquipmentTypeCodeType getTransportEquipmentTypeCode()
 * @method self setTransportEquipmentTypeCode(TransportEquipmentTypeCodeType|string $value)
 * @method ProviderTypeCodeType getProviderTypeCode()
 * @method self setProviderTypeCode(ProviderTypeCodeType|string $value)
 * @method OwnerTypeCodeType getOwnerTypeCode()
 * @method self setOwnerTypeCode(OwnerTypeCodeType|string $value)
 * @method SizeTypeCodeType getSizeTypeCode()
 * @method self setSizeTypeCode(SizeTypeCodeType|string $value)
 * @method DispositionCodeType getDispositionCode()
 * @method self setDispositionCode(DispositionCodeType|string $value)
 * @method FullnessIndicationCodeType getFullnessIndicationCode()
 * @method self setFullnessIndicationCode(FullnessIndicationCodeType|string $value)
 * @method RefrigerationOnIndicatorType getRefrigerationOnIndicator()
 * @method self setRefrigerationOnIndicator(RefrigerationOnIndicatorType|string $value)
 * @method InformationType getInformation()
 * @method self addInformation(InformationType|string $value)
 * @method self setInformation(InformationType ...$values)
 * @method ReturnabilityIndicatorType getReturnabilityIndicator()
 * @method self setReturnabilityIndicator(ReturnabilityIndicatorType|string $value)
 * @method LegalStatusIndicatorType getLegalStatusIndicator()
 * @method self setLegalStatusIndicator(LegalStatusIndicatorType|string $value)
 * @method AirFlowPercentType getAirFlowPercent()
 * @method self setAirFlowPercent(AirFlowPercentType|string $value)
 * @method HumidityPercentType getHumidityPercent()
 * @method self setHumidityPercent(HumidityPercentType|string $value)
 * @method AnimalFoodApprovedIndicatorType getAnimalFoodApprovedIndicator()
 * @method self setAnimalFoodApprovedIndicator(AnimalFoodApprovedIndicatorType|string $value)
 * @method HumanFoodApprovedIndicatorType getHumanFoodApprovedIndicator()
 * @method self setHumanFoodApprovedIndicator(HumanFoodApprovedIndicatorType|string $value)
 * @method DangerousGoodsApprovedIndicatorType getDangerousGoodsApprovedIndicator()
 * @method self setDangerousGoodsApprovedIndicator(DangerousGoodsApprovedIndicatorType|string $value)
 * @method RefrigeratedIndicatorType getRefrigeratedIndicator()
 * @method self setRefrigeratedIndicator(RefrigeratedIndicatorType|string $value)
 * @method CharacteristicsType getCharacteristics()
 * @method self setCharacteristics(CharacteristicsType|string $value)
 * @method DamageRemarksType getDamageRemarks()
 * @method self addDamageRemarks(DamageRemarksType|string $value)
 * @method self setDamageRemarks(DamageRemarksType ...$values)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method SpecialTransportRequirementsType getSpecialTransportRequirements()
 * @method self addSpecialTransportRequirements(SpecialTransportRequirementsType|string $value)
 * @method self setSpecialTransportRequirements(SpecialTransportRequirementsType ...$values)
 * @method GrossWeightMeasureType getGrossWeightMeasure()
 * @method self setGrossWeightMeasure(GrossWeightMeasureType|string $value)
 * @method GrossVolumeMeasureType getGrossVolumeMeasure()
 * @method self setGrossVolumeMeasure(GrossVolumeMeasureType|string $value)
 * @method TareWeightMeasureType getTareWeightMeasure()
 * @method self setTareWeightMeasure(TareWeightMeasureType|string $value)
 * @method TrackingDeviceCodeType getTrackingDeviceCode()
 * @method self setTrackingDeviceCode(TrackingDeviceCodeType|string $value)
 * @method PowerIndicatorType getPowerIndicator()
 * @method self setPowerIndicator(PowerIndicatorType|string $value)
 * @method TraceIDType getTraceID()
 * @method self setTraceID(TraceIDType|string $value)
 * @method DimensionType getMeasurementDimension()
 * @method self addMeasurementDimension(DimensionType $value)
 * @method self setMeasurementDimension(DimensionType ...$values)
 * @method TransportEquipmentSealType getTransportEquipmentSeal()
 * @method self addTransportEquipmentSeal(TransportEquipmentSealType $value)
 * @method self setTransportEquipmentSeal(TransportEquipmentSealType ...$values)
 * @method TemperatureType getMinimumTemperature()
 * @method self setMinimumTemperature(TemperatureType $value)
 * @method TemperatureType getMaximumTemperature()
 * @method self setMaximumTemperature(TemperatureType $value)
 * @method PartyType getProviderParty()
 * @method self setProviderParty(PartyType $value)
 * @method PartyType getLoadingProofParty()
 * @method self setLoadingProofParty(PartyType $value)
 * @method SupplierPartyType getSupplierParty()
 * @method self setSupplierParty(SupplierPartyType $value)
 * @method PartyType getOwnerParty()
 * @method self setOwnerParty(PartyType $value)
 * @method PartyType getOperatingParty()
 * @method self setOperatingParty(PartyType $value)
 * @method LocationType getLoadingLocation()
 * @method self setLoadingLocation(LocationType $value)
 * @method LocationType getUnloadingLocation()
 * @method self setUnloadingLocation(LocationType $value)
 * @method LocationType getStorageLocation()
 * @method self setStorageLocation(LocationType $value)
 * @method TransportEventType getPositioningTransportEvent()
 * @method self addPositioningTransportEvent(TransportEventType $value)
 * @method self setPositioningTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getQuarantineTransportEvent()
 * @method self addQuarantineTransportEvent(TransportEventType $value)
 * @method self setQuarantineTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getDeliveryTransportEvent()
 * @method self addDeliveryTransportEvent(TransportEventType $value)
 * @method self setDeliveryTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getPickupTransportEvent()
 * @method self addPickupTransportEvent(TransportEventType $value)
 * @method self setPickupTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getHandlingTransportEvent()
 * @method self addHandlingTransportEvent(TransportEventType $value)
 * @method self setHandlingTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getLoadingTransportEvent()
 * @method self addLoadingTransportEvent(TransportEventType $value)
 * @method self setLoadingTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getTransportEvent()
 * @method self addTransportEvent(TransportEventType $value)
 * @method self setTransportEvent(TransportEventType ...$values)
 * @method TransportMeansType getApplicableTransportMeans()
 * @method self setApplicableTransportMeans(TransportMeansType $value)
 * @method TradingTermsType getHaulageTradingTerms()
 * @method self addHaulageTradingTerms(TradingTermsType $value)
 * @method self setHaulageTradingTerms(TradingTermsType ...$values)
 * @method HazardousGoodsTransitType getHazardousGoodsTransit()
 * @method self addHazardousGoodsTransit(HazardousGoodsTransitType $value)
 * @method self setHazardousGoodsTransit(HazardousGoodsTransitType ...$values)
 * @method TransportHandlingUnitType getPackagedTransportHandlingUnit()
 * @method self addPackagedTransportHandlingUnit(TransportHandlingUnitType $value)
 * @method self setPackagedTransportHandlingUnit(TransportHandlingUnitType ...$values)
 * @method AllowanceChargeType getServiceAllowanceCharge()
 * @method self addServiceAllowanceCharge(AllowanceChargeType $value)
 * @method self setServiceAllowanceCharge(AllowanceChargeType ...$values)
 * @method AllowanceChargeType getFreightAllowanceCharge()
 * @method self addFreightAllowanceCharge(AllowanceChargeType $value)
 * @method self setFreightAllowanceCharge(AllowanceChargeType ...$values)
 * @method TransportEquipmentType getAttachedTransportEquipment()
 * @method self addAttachedTransportEquipment(TransportEquipmentType $value)
 * @method self setAttachedTransportEquipment(TransportEquipmentType ...$values)
 * @method DeliveryType getDelivery()
 * @method self setDelivery(DeliveryType $value)
 * @method PickupType getPickup()
 * @method self setPickup(PickupType $value)
 * @method DespatchType getDespatch()
 * @method self setDespatch(DespatchType $value)
 * @method DocumentReferenceType getShipmentDocumentReference()
 * @method self addShipmentDocumentReference(DocumentReferenceType $value)
 * @method self setShipmentDocumentReference(DocumentReferenceType ...$values)
 * @method TransportEquipmentType getContainedInTransportEquipment()
 * @method self addContainedInTransportEquipment(TransportEquipmentType $value)
 * @method self setContainedInTransportEquipment(TransportEquipmentType ...$values)
 * @method PackageType getPackage()
 * @method self addPackage(PackageType $value)
 * @method self setPackage(PackageType ...$values)
 * @method GoodsItemType getGoodsItem()
 * @method self addGoodsItem(GoodsItemType $value)
 * @method self setGoodsItem(GoodsItemType ...$values)
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