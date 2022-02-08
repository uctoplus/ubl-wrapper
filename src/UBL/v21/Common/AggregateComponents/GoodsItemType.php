<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumberIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRiskIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredCustomsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredForCarriageValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredStatisticsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreeOnBoardValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InsuranceValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetNetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChargeableWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreferenceCriterionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredCustomsIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomsStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomsTariffQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomsImportClassifiedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChargeableQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReturnableQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TraceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\GoodsItemContainerType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\InvoiceLineType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TemperatureType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PickupType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DespatchType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DimensionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PackageType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getSequenceNumberID()
 * @method self setSequenceNumberID($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator($value)
 * @method mixed getDeclaredCustomsValueAmount()
 * @method self setDeclaredCustomsValueAmount($value)
 * @method mixed getDeclaredForCarriageValueAmount()
 * @method self setDeclaredForCarriageValueAmount($value)
 * @method mixed getDeclaredStatisticsValueAmount()
 * @method self setDeclaredStatisticsValueAmount($value)
 * @method mixed getFreeOnBoardValueAmount()
 * @method self setFreeOnBoardValueAmount($value)
 * @method mixed getInsuranceValueAmount()
 * @method self setInsuranceValueAmount($value)
 * @method mixed getValueAmount()
 * @method self setValueAmount($value)
 * @method mixed getGrossWeightMeasure()
 * @method self setGrossWeightMeasure($value)
 * @method mixed getNetWeightMeasure()
 * @method self setNetWeightMeasure($value)
 * @method mixed getNetNetWeightMeasure()
 * @method self setNetNetWeightMeasure($value)
 * @method mixed getChargeableWeightMeasure()
 * @method self setChargeableWeightMeasure($value)
 * @method mixed getGrossVolumeMeasure()
 * @method self setGrossVolumeMeasure($value)
 * @method mixed getNetVolumeMeasure()
 * @method self setNetVolumeMeasure($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getPreferenceCriterionCode()
 * @method self setPreferenceCriterionCode($value)
 * @method mixed getRequiredCustomsID()
 * @method self setRequiredCustomsID($value)
 * @method mixed getCustomsStatusCode()
 * @method self setCustomsStatusCode($value)
 * @method mixed getCustomsTariffQuantity()
 * @method self setCustomsTariffQuantity($value)
 * @method mixed getCustomsImportClassifiedIndicator()
 * @method self setCustomsImportClassifiedIndicator($value)
 * @method mixed getChargeableQuantity()
 * @method self setChargeableQuantity($value)
 * @method mixed getReturnableQuantity()
 * @method self setReturnableQuantity($value)
 * @method mixed getTraceID()
 * @method self setTraceID($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getGoodsItemContainer()
 * @method self setGoodsItemContainer($value)
 * @method mixed getFreightAllowanceCharge()
 * @method self setFreightAllowanceCharge($value)
 * @method mixed getInvoiceLine()
 * @method self setInvoiceLine($value)
 * @method mixed getTemperature()
 * @method self setTemperature($value)
 * @method mixed getContainedGoodsItem()
 * @method self setContainedGoodsItem($value)
 * @method mixed getOriginAddress()
 * @method self setOriginAddress($value)
 * @method mixed getDelivery()
 * @method self setDelivery($value)
 * @method mixed getPickup()
 * @method self setPickup($value)
 * @method mixed getDespatch()
 * @method self setDespatch($value)
 * @method mixed getMeasurementDimension()
 * @method self setMeasurementDimension($value)
 * @method mixed getContainingPackage()
 * @method self setContainingPackage($value)
 * @method mixed getShipmentDocumentReference()
 * @method self setShipmentDocumentReference($value)
 * @method mixed getMinimumTemperature()
 * @method self setMinimumTemperature($value)
 * @method mixed getMaximumTemperature()
 * @method self setMaximumTemperature($value)
 */
class GoodsItemType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:SequenceNumberID" => SequenceNumberIDType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:HazardousRiskIndicator" => HazardousRiskIndicatorType::class,
        "cbc:DeclaredCustomsValueAmount" => DeclaredCustomsValueAmountType::class,
        "cbc:DeclaredForCarriageValueAmount" => DeclaredForCarriageValueAmountType::class,
        "cbc:DeclaredStatisticsValueAmount" => DeclaredStatisticsValueAmountType::class,
        "cbc:FreeOnBoardValueAmount" => FreeOnBoardValueAmountType::class,
        "cbc:InsuranceValueAmount" => InsuranceValueAmountType::class,
        "cbc:ValueAmount" => ValueAmountType::class,
        "cbc:GrossWeightMeasure" => GrossWeightMeasureType::class,
        "cbc:NetWeightMeasure" => NetWeightMeasureType::class,
        "cbc:NetNetWeightMeasure" => NetNetWeightMeasureType::class,
        "cbc:ChargeableWeightMeasure" => ChargeableWeightMeasureType::class,
        "cbc:GrossVolumeMeasure" => GrossVolumeMeasureType::class,
        "cbc:NetVolumeMeasure" => NetVolumeMeasureType::class,
        "cbc:Quantity" => QuantityType::class,
        "cbc:PreferenceCriterionCode" => PreferenceCriterionCodeType::class,
        "cbc:RequiredCustomsID" => RequiredCustomsIDType::class,
        "cbc:CustomsStatusCode" => CustomsStatusCodeType::class,
        "cbc:CustomsTariffQuantity" => CustomsTariffQuantityType::class,
        "cbc:CustomsImportClassifiedIndicator" => CustomsImportClassifiedIndicatorType::class,
        "cbc:ChargeableQuantity" => ChargeableQuantityType::class,
        "cbc:ReturnableQuantity" => ReturnableQuantityType::class,
        "cbc:TraceID" => TraceIDType::class,
        "cac:Item" => ItemType::class . "[]",
        "cac:GoodsItemContainer" => GoodsItemContainerType::class . "[]",
        "cac:FreightAllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:InvoiceLine" => InvoiceLineType::class . "[]",
        "cac:Temperature" => TemperatureType::class . "[]",
        "cac:ContainedGoodsItem" => GoodsItemType::class . "[]",
        "cac:OriginAddress" => AddressType::class,
        "cac:Delivery" => DeliveryType::class,
        "cac:Pickup" => PickupType::class,
        "cac:Despatch" => DespatchType::class,
        "cac:MeasurementDimension" => DimensionType::class . "[]",
        "cac:ContainingPackage" => PackageType::class . "[]",
        "cac:ShipmentDocumentReference" => DocumentReferenceType::class,
        "cac:MinimumTemperature" => TemperatureType::class,
        "cac:MaximumTemperature" => TemperatureType::class,
    ];

    protected $minOccurs = [
    ];
}