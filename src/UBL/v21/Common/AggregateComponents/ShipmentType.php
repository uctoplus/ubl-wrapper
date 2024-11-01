<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsignmentQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredCustomsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredForCarriageValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredStatisticsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeliveryInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreeOnBoardValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HandlingCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HandlingInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InsuranceValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetNetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShippingPriorityLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecialInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SplitConsignmentIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalGoodsItemQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTransportHandlingUnitQuantityType;

/**
 * Class ShipmentType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ShippingPriorityLevelCodeType getShippingPriorityLevelCode()
 * @method self setShippingPriorityLevelCode(ShippingPriorityLevelCodeType|string $value)
 * @method HandlingCodeType getHandlingCode()
 * @method self setHandlingCode(HandlingCodeType|string $value)
 * @method HandlingInstructionsType[] getHandlingInstructions()
 * @method self addHandlingInstructions(HandlingInstructionsType|string $value)
 * @method self setHandlingInstructions(HandlingInstructionsType ...$values)
 * @method InformationType[] getInformation()
 * @method self addInformation(InformationType|string $value)
 * @method self setInformation(InformationType ...$values)
 * @method GrossWeightMeasureType getGrossWeightMeasure()
 * @method self setGrossWeightMeasure(GrossWeightMeasureType|string $value)
 * @method NetWeightMeasureType getNetWeightMeasure()
 * @method self setNetWeightMeasure(NetWeightMeasureType|string $value)
 * @method NetNetWeightMeasureType getNetNetWeightMeasure()
 * @method self setNetNetWeightMeasure(NetNetWeightMeasureType|string $value)
 * @method GrossVolumeMeasureType getGrossVolumeMeasure()
 * @method self setGrossVolumeMeasure(GrossVolumeMeasureType|string $value)
 * @method NetVolumeMeasureType getNetVolumeMeasure()
 * @method self setNetVolumeMeasure(NetVolumeMeasureType|string $value)
 * @method TotalGoodsItemQuantityType getTotalGoodsItemQuantity()
 * @method self setTotalGoodsItemQuantity(TotalGoodsItemQuantityType|string $value)
 * @method TotalTransportHandlingUnitQuantityType getTotalTransportHandlingUnitQuantity()
 * @method self setTotalTransportHandlingUnitQuantity(TotalTransportHandlingUnitQuantityType|string $value)
 * @method InsuranceValueAmountType getInsuranceValueAmount()
 * @method self setInsuranceValueAmount(InsuranceValueAmountType|string $value)
 * @method DeclaredCustomsValueAmountType getDeclaredCustomsValueAmount()
 * @method self setDeclaredCustomsValueAmount(DeclaredCustomsValueAmountType|string $value)
 * @method DeclaredForCarriageValueAmountType getDeclaredForCarriageValueAmount()
 * @method self setDeclaredForCarriageValueAmount(DeclaredForCarriageValueAmountType|string $value)
 * @method DeclaredStatisticsValueAmountType getDeclaredStatisticsValueAmount()
 * @method self setDeclaredStatisticsValueAmount(DeclaredStatisticsValueAmountType|string $value)
 * @method FreeOnBoardValueAmountType getFreeOnBoardValueAmount()
 * @method self setFreeOnBoardValueAmount(FreeOnBoardValueAmountType|string $value)
 * @method SpecialInstructionsType[] getSpecialInstructions()
 * @method self addSpecialInstructions(SpecialInstructionsType|string $value)
 * @method self setSpecialInstructions(SpecialInstructionsType ...$values)
 * @method DeliveryInstructionsType[] getDeliveryInstructions()
 * @method self addDeliveryInstructions(DeliveryInstructionsType|string $value)
 * @method self setDeliveryInstructions(DeliveryInstructionsType ...$values)
 * @method SplitConsignmentIndicatorType getSplitConsignmentIndicator()
 * @method self setSplitConsignmentIndicator(SplitConsignmentIndicatorType|string $value)
 * @method ConsignmentQuantityType getConsignmentQuantity()
 * @method self setConsignmentQuantity(ConsignmentQuantityType|string $value)
 * @method ConsignmentType[] getConsignment()
 * @method self addConsignment(ConsignmentType $value)
 * @method self setConsignment(ConsignmentType ...$values)
 * @method GoodsItemType[] getGoodsItem()
 * @method self addGoodsItem(GoodsItemType $value)
 * @method self setGoodsItem(GoodsItemType ...$values)
 * @method ShipmentStageType[] getShipmentStage()
 * @method self addShipmentStage(ShipmentStageType $value)
 * @method self setShipmentStage(ShipmentStageType ...$values)
 * @method DeliveryType getDelivery()
 * @method self setDelivery(DeliveryType $value)
 * @method TransportHandlingUnitType[] getTransportHandlingUnit()
 * @method self addTransportHandlingUnit(TransportHandlingUnitType $value)
 * @method self setTransportHandlingUnit(TransportHandlingUnitType ...$values)
 * @method AddressType getReturnAddress()
 * @method self setReturnAddress(AddressType $value)
 * @method AddressType getOriginAddress()
 * @method self setOriginAddress(AddressType $value)
 * @method LocationType getFirstArrivalPortLocation()
 * @method self setFirstArrivalPortLocation(LocationType $value)
 * @method LocationType getLastExitPortLocation()
 * @method self setLastExitPortLocation(LocationType $value)
 * @method CountryType getExportCountry()
 * @method self setExportCountry(CountryType $value)
 * @method AllowanceChargeType[] getFreightAllowanceCharge()
 * @method self addFreightAllowanceCharge(AllowanceChargeType $value)
 * @method self setFreightAllowanceCharge(AllowanceChargeType ...$values)
 */
class ShipmentType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ShippingPriorityLevelCode" => ShippingPriorityLevelCodeType::class,
        "cbc:HandlingCode" => HandlingCodeType::class,
        "cbc:HandlingInstructions" => HandlingInstructionsType::class . "[]",
        "cbc:Information" => InformationType::class . "[]",
        "cbc:GrossWeightMeasure" => GrossWeightMeasureType::class,
        "cbc:NetWeightMeasure" => NetWeightMeasureType::class,
        "cbc:NetNetWeightMeasure" => NetNetWeightMeasureType::class,
        "cbc:GrossVolumeMeasure" => GrossVolumeMeasureType::class,
        "cbc:NetVolumeMeasure" => NetVolumeMeasureType::class,
        "cbc:TotalGoodsItemQuantity" => TotalGoodsItemQuantityType::class,
        "cbc:TotalTransportHandlingUnitQuantity" => TotalTransportHandlingUnitQuantityType::class,
        "cbc:InsuranceValueAmount" => InsuranceValueAmountType::class,
        "cbc:DeclaredCustomsValueAmount" => DeclaredCustomsValueAmountType::class,
        "cbc:DeclaredForCarriageValueAmount" => DeclaredForCarriageValueAmountType::class,
        "cbc:DeclaredStatisticsValueAmount" => DeclaredStatisticsValueAmountType::class,
        "cbc:FreeOnBoardValueAmount" => FreeOnBoardValueAmountType::class,
        "cbc:SpecialInstructions" => SpecialInstructionsType::class . "[]",
        "cbc:DeliveryInstructions" => DeliveryInstructionsType::class . "[]",
        "cbc:SplitConsignmentIndicator" => SplitConsignmentIndicatorType::class,
        "cbc:ConsignmentQuantity" => ConsignmentQuantityType::class,
        "cac:Consignment" => ConsignmentType::class . "[]",
        "cac:GoodsItem" => GoodsItemType::class . "[]",
        "cac:ShipmentStage" => ShipmentStageType::class . "[]",
        "cac:Delivery" => DeliveryType::class,
        "cac:TransportHandlingUnit" => TransportHandlingUnitType::class . "[]",
        "cac:ReturnAddress" => AddressType::class,
        "cac:OriginAddress" => AddressType::class,
        "cac:FirstArrivalPortLocation" => LocationType::class,
        "cac:LastExitPortLocation" => LocationType::class,
        "cac:ExportCountry" => CountryType::class,
        "cac:FreightAllowanceCharge" => AllowanceChargeType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}