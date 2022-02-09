<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DamageRemarksType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HandlingCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HandlingInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRiskIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShippingMarksType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalGoodsItemQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalPackageQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TraceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportHandlingUnitTypeCodeType;

/**
 * Class TransportHandlingUnitType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method TransportHandlingUnitTypeCodeType getTransportHandlingUnitTypeCode()
 * @method self setTransportHandlingUnitTypeCode(TransportHandlingUnitTypeCodeType|string $value)
 * @method HandlingCodeType getHandlingCode()
 * @method self setHandlingCode(HandlingCodeType|string $value)
 * @method HandlingInstructionsType getHandlingInstructions()
 * @method self addHandlingInstructions(HandlingInstructionsType|string $value)
 * @method self setHandlingInstructions(HandlingInstructionsType ...$values)
 * @method HazardousRiskIndicatorType getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator(HazardousRiskIndicatorType|string $value)
 * @method TotalGoodsItemQuantityType getTotalGoodsItemQuantity()
 * @method self setTotalGoodsItemQuantity(TotalGoodsItemQuantityType|string $value)
 * @method TotalPackageQuantityType getTotalPackageQuantity()
 * @method self setTotalPackageQuantity(TotalPackageQuantityType|string $value)
 * @method DamageRemarksType getDamageRemarks()
 * @method self addDamageRemarks(DamageRemarksType|string $value)
 * @method self setDamageRemarks(DamageRemarksType ...$values)
 * @method ShippingMarksType getShippingMarks()
 * @method self addShippingMarks(ShippingMarksType|string $value)
 * @method self setShippingMarks(ShippingMarksType ...$values)
 * @method TraceIDType getTraceID()
 * @method self setTraceID(TraceIDType|string $value)
 * @method DespatchLineType getHandlingUnitDespatchLine()
 * @method self addHandlingUnitDespatchLine(DespatchLineType $value)
 * @method self setHandlingUnitDespatchLine(DespatchLineType ...$values)
 * @method PackageType getActualPackage()
 * @method self addActualPackage(PackageType $value)
 * @method self setActualPackage(PackageType ...$values)
 * @method ReceiptLineType getReceivedHandlingUnitReceiptLine()
 * @method self addReceivedHandlingUnitReceiptLine(ReceiptLineType $value)
 * @method self setReceivedHandlingUnitReceiptLine(ReceiptLineType ...$values)
 * @method TransportEquipmentType getTransportEquipment()
 * @method self addTransportEquipment(TransportEquipmentType $value)
 * @method self setTransportEquipment(TransportEquipmentType ...$values)
 * @method TransportMeansType getTransportMeans()
 * @method self addTransportMeans(TransportMeansType $value)
 * @method self setTransportMeans(TransportMeansType ...$values)
 * @method HazardousGoodsTransitType getHazardousGoodsTransit()
 * @method self addHazardousGoodsTransit(HazardousGoodsTransitType $value)
 * @method self setHazardousGoodsTransit(HazardousGoodsTransitType ...$values)
 * @method DimensionType getMeasurementDimension()
 * @method self addMeasurementDimension(DimensionType $value)
 * @method self setMeasurementDimension(DimensionType ...$values)
 * @method TemperatureType getMinimumTemperature()
 * @method self setMinimumTemperature(TemperatureType $value)
 * @method TemperatureType getMaximumTemperature()
 * @method self setMaximumTemperature(TemperatureType $value)
 * @method GoodsItemType getGoodsItem()
 * @method self addGoodsItem(GoodsItemType $value)
 * @method self setGoodsItem(GoodsItemType ...$values)
 * @method DimensionType getFloorSpaceMeasurementDimension()
 * @method self setFloorSpaceMeasurementDimension(DimensionType $value)
 * @method DimensionType getPalletSpaceMeasurementDimension()
 * @method self setPalletSpaceMeasurementDimension(DimensionType $value)
 * @method DocumentReferenceType getShipmentDocumentReference()
 * @method self addShipmentDocumentReference(DocumentReferenceType $value)
 * @method self setShipmentDocumentReference(DocumentReferenceType ...$values)
 * @method StatusType getStatus()
 * @method self addStatus(StatusType $value)
 * @method self setStatus(StatusType ...$values)
 * @method CustomsDeclarationType getCustomsDeclaration()
 * @method self addCustomsDeclaration(CustomsDeclarationType $value)
 * @method self setCustomsDeclaration(CustomsDeclarationType ...$values)
 * @method ShipmentType getReferencedShipment()
 * @method self addReferencedShipment(ShipmentType $value)
 * @method self setReferencedShipment(ShipmentType ...$values)
 * @method PackageType getPackage()
 * @method self addPackage(PackageType $value)
 * @method self setPackage(PackageType ...$values)
 */
class TransportHandlingUnitType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:TransportHandlingUnitTypeCode" => TransportHandlingUnitTypeCodeType::class,
        "cbc:HandlingCode" => HandlingCodeType::class,
        "cbc:HandlingInstructions" => HandlingInstructionsType::class . "[]",
        "cbc:HazardousRiskIndicator" => HazardousRiskIndicatorType::class,
        "cbc:TotalGoodsItemQuantity" => TotalGoodsItemQuantityType::class,
        "cbc:TotalPackageQuantity" => TotalPackageQuantityType::class,
        "cbc:DamageRemarks" => DamageRemarksType::class . "[]",
        "cbc:ShippingMarks" => ShippingMarksType::class . "[]",
        "cbc:TraceID" => TraceIDType::class,
        "cac:HandlingUnitDespatchLine" => DespatchLineType::class . "[]",
        "cac:ActualPackage" => PackageType::class . "[]",
        "cac:ReceivedHandlingUnitReceiptLine" => ReceiptLineType::class . "[]",
        "cac:TransportEquipment" => TransportEquipmentType::class . "[]",
        "cac:TransportMeans" => TransportMeansType::class . "[]",
        "cac:HazardousGoodsTransit" => HazardousGoodsTransitType::class . "[]",
        "cac:MeasurementDimension" => DimensionType::class . "[]",
        "cac:MinimumTemperature" => TemperatureType::class,
        "cac:MaximumTemperature" => TemperatureType::class,
        "cac:GoodsItem" => GoodsItemType::class . "[]",
        "cac:FloorSpaceMeasurementDimension" => DimensionType::class,
        "cac:PalletSpaceMeasurementDimension" => DimensionType::class,
        "cac:ShipmentDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Status" => StatusType::class . "[]",
        "cac:CustomsDeclaration" => CustomsDeclarationType::class . "[]",
        "cac:ReferencedShipment" => ShipmentType::class . "[]",
        "cac:Package" => PackageType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}