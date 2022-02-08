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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getReturnableMaterialIndicator()
 * @method self setReturnableMaterialIndicator($value)
 * @method mixed getPackageLevelCode()
 * @method self setPackageLevelCode($value)
 * @method mixed getPackagingTypeCode()
 * @method self setPackagingTypeCode($value)
 * @method mixed getPackingMaterial()
 * @method self addPackingMaterial($value)
 * @method self setPackingMaterial($value)
 * @method mixed getTraceID()
 * @method self setTraceID($value)
 * @method mixed getContainedPackage()
 * @method self addContainedPackage($value)
 * @method self setContainedPackage($value)
 * @method mixed getContainingTransportEquipment()
 * @method self setContainingTransportEquipment($value)
 * @method mixed getGoodsItem()
 * @method self addGoodsItem($value)
 * @method self setGoodsItem($value)
 * @method mixed getMeasurementDimension()
 * @method self addMeasurementDimension($value)
 * @method self setMeasurementDimension($value)
 * @method mixed getDeliveryUnit()
 * @method self addDeliveryUnit($value)
 * @method self setDeliveryUnit($value)
 * @method mixed getDelivery()
 * @method self setDelivery($value)
 * @method mixed getPickup()
 * @method self setPickup($value)
 * @method mixed getDespatch()
 * @method self setDespatch($value)
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