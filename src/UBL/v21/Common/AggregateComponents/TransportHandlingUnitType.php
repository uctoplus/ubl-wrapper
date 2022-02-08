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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getTransportHandlingUnitTypeCode()
 * @method self setTransportHandlingUnitTypeCode($value)
 * @method mixed getHandlingCode()
 * @method self setHandlingCode($value)
 * @method mixed getHandlingInstructions()
 * @method self addHandlingInstructions($value)
 * @method self setHandlingInstructions($value)
 * @method mixed getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator($value)
 * @method mixed getTotalGoodsItemQuantity()
 * @method self setTotalGoodsItemQuantity($value)
 * @method mixed getTotalPackageQuantity()
 * @method self setTotalPackageQuantity($value)
 * @method mixed getDamageRemarks()
 * @method self addDamageRemarks($value)
 * @method self setDamageRemarks($value)
 * @method mixed getShippingMarks()
 * @method self addShippingMarks($value)
 * @method self setShippingMarks($value)
 * @method mixed getTraceID()
 * @method self setTraceID($value)
 * @method mixed getHandlingUnitDespatchLine()
 * @method self addHandlingUnitDespatchLine($value)
 * @method self setHandlingUnitDespatchLine($value)
 * @method mixed getActualPackage()
 * @method self addActualPackage($value)
 * @method self setActualPackage($value)
 * @method mixed getReceivedHandlingUnitReceiptLine()
 * @method self addReceivedHandlingUnitReceiptLine($value)
 * @method self setReceivedHandlingUnitReceiptLine($value)
 * @method mixed getTransportEquipment()
 * @method self addTransportEquipment($value)
 * @method self setTransportEquipment($value)
 * @method mixed getTransportMeans()
 * @method self addTransportMeans($value)
 * @method self setTransportMeans($value)
 * @method mixed getHazardousGoodsTransit()
 * @method self addHazardousGoodsTransit($value)
 * @method self setHazardousGoodsTransit($value)
 * @method mixed getMeasurementDimension()
 * @method self addMeasurementDimension($value)
 * @method self setMeasurementDimension($value)
 * @method mixed getMinimumTemperature()
 * @method self setMinimumTemperature($value)
 * @method mixed getMaximumTemperature()
 * @method self setMaximumTemperature($value)
 * @method mixed getGoodsItem()
 * @method self addGoodsItem($value)
 * @method self setGoodsItem($value)
 * @method mixed getFloorSpaceMeasurementDimension()
 * @method self setFloorSpaceMeasurementDimension($value)
 * @method mixed getPalletSpaceMeasurementDimension()
 * @method self setPalletSpaceMeasurementDimension($value)
 * @method mixed getShipmentDocumentReference()
 * @method self addShipmentDocumentReference($value)
 * @method self setShipmentDocumentReference($value)
 * @method mixed getStatus()
 * @method self addStatus($value)
 * @method self setStatus($value)
 * @method mixed getCustomsDeclaration()
 * @method self addCustomsDeclaration($value)
 * @method self setCustomsDeclaration($value)
 * @method mixed getReferencedShipment()
 * @method self addReferencedShipment($value)
 * @method self setReferencedShipment($value)
 * @method mixed getPackage()
 * @method self addPackage($value)
 * @method self setPackage($value)
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