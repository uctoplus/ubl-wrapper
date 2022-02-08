<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShippingPriorityLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HandlingCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HandlingInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetNetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalGoodsItemQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTransportHandlingUnitQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InsuranceValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredCustomsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredForCarriageValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredStatisticsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreeOnBoardValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecialInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeliveryInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SplitConsignmentIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsignmentQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsignmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\GoodsItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShipmentStageType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransportHandlingUnitType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CountryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getShippingPriorityLevelCode()
 * @method self setShippingPriorityLevelCode($value)
 * @method mixed getHandlingCode()
 * @method self setHandlingCode($value)
 * @method mixed getHandlingInstructions()
 * @method self setHandlingInstructions($value)
 * @method mixed getInformation()
 * @method self setInformation($value)
 * @method mixed getGrossWeightMeasure()
 * @method self setGrossWeightMeasure($value)
 * @method mixed getNetWeightMeasure()
 * @method self setNetWeightMeasure($value)
 * @method mixed getNetNetWeightMeasure()
 * @method self setNetNetWeightMeasure($value)
 * @method mixed getGrossVolumeMeasure()
 * @method self setGrossVolumeMeasure($value)
 * @method mixed getNetVolumeMeasure()
 * @method self setNetVolumeMeasure($value)
 * @method mixed getTotalGoodsItemQuantity()
 * @method self setTotalGoodsItemQuantity($value)
 * @method mixed getTotalTransportHandlingUnitQuantity()
 * @method self setTotalTransportHandlingUnitQuantity($value)
 * @method mixed getInsuranceValueAmount()
 * @method self setInsuranceValueAmount($value)
 * @method mixed getDeclaredCustomsValueAmount()
 * @method self setDeclaredCustomsValueAmount($value)
 * @method mixed getDeclaredForCarriageValueAmount()
 * @method self setDeclaredForCarriageValueAmount($value)
 * @method mixed getDeclaredStatisticsValueAmount()
 * @method self setDeclaredStatisticsValueAmount($value)
 * @method mixed getFreeOnBoardValueAmount()
 * @method self setFreeOnBoardValueAmount($value)
 * @method mixed getSpecialInstructions()
 * @method self setSpecialInstructions($value)
 * @method mixed getDeliveryInstructions()
 * @method self setDeliveryInstructions($value)
 * @method mixed getSplitConsignmentIndicator()
 * @method self setSplitConsignmentIndicator($value)
 * @method mixed getConsignmentQuantity()
 * @method self setConsignmentQuantity($value)
 * @method mixed getConsignment()
 * @method self setConsignment($value)
 * @method mixed getGoodsItem()
 * @method self setGoodsItem($value)
 * @method mixed getShipmentStage()
 * @method self setShipmentStage($value)
 * @method mixed getDelivery()
 * @method self setDelivery($value)
 * @method mixed getTransportHandlingUnit()
 * @method self setTransportHandlingUnit($value)
 * @method mixed getReturnAddress()
 * @method self setReturnAddress($value)
 * @method mixed getOriginAddress()
 * @method self setOriginAddress($value)
 * @method mixed getFirstArrivalPortLocation()
 * @method self setFirstArrivalPortLocation($value)
 * @method mixed getLastExitPortLocation()
 * @method self setLastExitPortLocation($value)
 * @method mixed getExportCountry()
 * @method self setExportCountry($value)
 * @method mixed getFreightAllowanceCharge()
 * @method self setFreightAllowanceCharge($value)
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