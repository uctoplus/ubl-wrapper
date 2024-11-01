<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChargeableQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChargeableWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomsImportClassifiedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomsStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomsTariffQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredCustomsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredForCarriageValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredStatisticsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreeOnBoardValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRiskIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InsuranceValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetNetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreferenceCriterionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredCustomsIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReturnableQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumberIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TraceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueAmountType;

/**
 * Class GoodsItemType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method SequenceNumberIDType getSequenceNumberID()
 * @method self setSequenceNumberID(SequenceNumberIDType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method HazardousRiskIndicatorType getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator(HazardousRiskIndicatorType|string $value)
 * @method DeclaredCustomsValueAmountType getDeclaredCustomsValueAmount()
 * @method self setDeclaredCustomsValueAmount(DeclaredCustomsValueAmountType|string $value)
 * @method DeclaredForCarriageValueAmountType getDeclaredForCarriageValueAmount()
 * @method self setDeclaredForCarriageValueAmount(DeclaredForCarriageValueAmountType|string $value)
 * @method DeclaredStatisticsValueAmountType getDeclaredStatisticsValueAmount()
 * @method self setDeclaredStatisticsValueAmount(DeclaredStatisticsValueAmountType|string $value)
 * @method FreeOnBoardValueAmountType getFreeOnBoardValueAmount()
 * @method self setFreeOnBoardValueAmount(FreeOnBoardValueAmountType|string $value)
 * @method InsuranceValueAmountType getInsuranceValueAmount()
 * @method self setInsuranceValueAmount(InsuranceValueAmountType|string $value)
 * @method ValueAmountType getValueAmount()
 * @method self setValueAmount(ValueAmountType|string $value)
 * @method GrossWeightMeasureType getGrossWeightMeasure()
 * @method self setGrossWeightMeasure(GrossWeightMeasureType|string $value)
 * @method NetWeightMeasureType getNetWeightMeasure()
 * @method self setNetWeightMeasure(NetWeightMeasureType|string $value)
 * @method NetNetWeightMeasureType getNetNetWeightMeasure()
 * @method self setNetNetWeightMeasure(NetNetWeightMeasureType|string $value)
 * @method ChargeableWeightMeasureType getChargeableWeightMeasure()
 * @method self setChargeableWeightMeasure(ChargeableWeightMeasureType|string $value)
 * @method GrossVolumeMeasureType getGrossVolumeMeasure()
 * @method self setGrossVolumeMeasure(GrossVolumeMeasureType|string $value)
 * @method NetVolumeMeasureType getNetVolumeMeasure()
 * @method self setNetVolumeMeasure(NetVolumeMeasureType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method PreferenceCriterionCodeType getPreferenceCriterionCode()
 * @method self setPreferenceCriterionCode(PreferenceCriterionCodeType|string $value)
 * @method RequiredCustomsIDType getRequiredCustomsID()
 * @method self setRequiredCustomsID(RequiredCustomsIDType|string $value)
 * @method CustomsStatusCodeType getCustomsStatusCode()
 * @method self setCustomsStatusCode(CustomsStatusCodeType|string $value)
 * @method CustomsTariffQuantityType getCustomsTariffQuantity()
 * @method self setCustomsTariffQuantity(CustomsTariffQuantityType|string $value)
 * @method CustomsImportClassifiedIndicatorType getCustomsImportClassifiedIndicator()
 * @method self setCustomsImportClassifiedIndicator(CustomsImportClassifiedIndicatorType|string $value)
 * @method ChargeableQuantityType getChargeableQuantity()
 * @method self setChargeableQuantity(ChargeableQuantityType|string $value)
 * @method ReturnableQuantityType getReturnableQuantity()
 * @method self setReturnableQuantity(ReturnableQuantityType|string $value)
 * @method TraceIDType getTraceID()
 * @method self setTraceID(TraceIDType|string $value)
 * @method ItemType[] getItem()
 * @method self addItem(ItemType $value)
 * @method self setItem(ItemType ...$values)
 * @method GoodsItemContainerType[] getGoodsItemContainer()
 * @method self addGoodsItemContainer(GoodsItemContainerType $value)
 * @method self setGoodsItemContainer(GoodsItemContainerType ...$values)
 * @method AllowanceChargeType[] getFreightAllowanceCharge()
 * @method self addFreightAllowanceCharge(AllowanceChargeType $value)
 * @method self setFreightAllowanceCharge(AllowanceChargeType ...$values)
 * @method InvoiceLineType[] getInvoiceLine()
 * @method self addInvoiceLine(InvoiceLineType $value)
 * @method self setInvoiceLine(InvoiceLineType ...$values)
 * @method TemperatureType[] getTemperature()
 * @method self addTemperature(TemperatureType $value)
 * @method self setTemperature(TemperatureType ...$values)
 * @method GoodsItemType[] getContainedGoodsItem()
 * @method self addContainedGoodsItem(GoodsItemType $value)
 * @method self setContainedGoodsItem(GoodsItemType ...$values)
 * @method AddressType getOriginAddress()
 * @method self setOriginAddress(AddressType $value)
 * @method DeliveryType getDelivery()
 * @method self setDelivery(DeliveryType $value)
 * @method PickupType getPickup()
 * @method self setPickup(PickupType $value)
 * @method DespatchType getDespatch()
 * @method self setDespatch(DespatchType $value)
 * @method DimensionType[] getMeasurementDimension()
 * @method self addMeasurementDimension(DimensionType $value)
 * @method self setMeasurementDimension(DimensionType ...$values)
 * @method PackageType[] getContainingPackage()
 * @method self addContainingPackage(PackageType $value)
 * @method self setContainingPackage(PackageType ...$values)
 * @method DocumentReferenceType getShipmentDocumentReference()
 * @method self setShipmentDocumentReference(DocumentReferenceType $value)
 * @method TemperatureType getMinimumTemperature()
 * @method self setMinimumTemperature(TemperatureType $value)
 * @method TemperatureType getMaximumTemperature()
 * @method self setMaximumTemperature(TemperatureType $value)
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