<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackageLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackagingTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackingMaterialType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReturnableMaterialIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TraceIDType;

/**
 * Class PackageType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method ReturnableMaterialIndicatorType getReturnableMaterialIndicator()
 * @method self setReturnableMaterialIndicator(ReturnableMaterialIndicatorType|string $value)
 * @method PackageLevelCodeType getPackageLevelCode()
 * @method self setPackageLevelCode(PackageLevelCodeType|string $value)
 * @method PackagingTypeCodeType getPackagingTypeCode()
 * @method self setPackagingTypeCode(PackagingTypeCodeType|string $value)
 * @method PackingMaterialType getPackingMaterial()
 * @method self addPackingMaterial(PackingMaterialType|string $value)
 * @method self setPackingMaterial(PackingMaterialType ...$values)
 * @method TraceIDType getTraceID()
 * @method self setTraceID(TraceIDType|string $value)
 * @method PackageType getContainedPackage()
 * @method self addContainedPackage(PackageType $value)
 * @method self setContainedPackage(PackageType ...$values)
 * @method TransportEquipmentType getContainingTransportEquipment()
 * @method self setContainingTransportEquipment(TransportEquipmentType $value)
 * @method GoodsItemType getGoodsItem()
 * @method self addGoodsItem(GoodsItemType $value)
 * @method self setGoodsItem(GoodsItemType ...$values)
 * @method DimensionType getMeasurementDimension()
 * @method self addMeasurementDimension(DimensionType $value)
 * @method self setMeasurementDimension(DimensionType ...$values)
 * @method DeliveryUnitType getDeliveryUnit()
 * @method self addDeliveryUnit(DeliveryUnitType $value)
 * @method self setDeliveryUnit(DeliveryUnitType ...$values)
 * @method DeliveryType getDelivery()
 * @method self setDelivery(DeliveryType $value)
 * @method PickupType getPickup()
 * @method self setPickup(PickupType $value)
 * @method DespatchType getDespatch()
 * @method self setDespatch(DespatchType $value)
 */
class PackageType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Quantity" => QuantityType::class,
        "cbc:ReturnableMaterialIndicator" => ReturnableMaterialIndicatorType::class,
        "cbc:PackageLevelCode" => PackageLevelCodeType::class,
        "cbc:PackagingTypeCode" => PackagingTypeCodeType::class,
        "cbc:PackingMaterial" => PackingMaterialType::class . "[]",
        "cbc:TraceID" => TraceIDType::class,
        "cac:ContainedPackage" => PackageType::class . "[]",
        "cac:ContainingTransportEquipment" => TransportEquipmentType::class,
        "cac:GoodsItem" => GoodsItemType::class . "[]",
        "cac:MeasurementDimension" => DimensionType::class . "[]",
        "cac:DeliveryUnit" => DeliveryUnitType::class . "[]",
        "cac:Delivery" => DeliveryType::class,
        "cac:Pickup" => PickupType::class,
        "cac:Despatch" => DespatchType::class,
    ];

    protected $minOccurs = [
    ];
}