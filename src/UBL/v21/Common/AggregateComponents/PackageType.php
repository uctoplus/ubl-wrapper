<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReturnableMaterialIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackageLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackagingTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackingMaterialType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TraceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransportEquipmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\GoodsItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DimensionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryUnitType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PickupType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DespatchType;

/**
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
 * @method self setPackingMaterial($value)
 * @method mixed getTraceID()
 * @method self setTraceID($value)
 * @method mixed getContainedPackage()
 * @method self setContainedPackage($value)
 * @method mixed getContainingTransportEquipment()
 * @method self setContainingTransportEquipment($value)
 * @method mixed getGoodsItem()
 * @method self setGoodsItem($value)
 * @method mixed getMeasurementDimension()
 * @method self setMeasurementDimension($value)
 * @method mixed getDeliveryUnit()
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