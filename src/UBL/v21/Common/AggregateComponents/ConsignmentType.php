<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AnimalFoodIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BrokerAssignedIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BulkCargoIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CarrierAssignedIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CarrierServiceInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChargeableWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChildConsignmentQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsigneeAssignedIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsignmentQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsignorAssignedIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsolidatableIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContainerizedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractedCarrierAssignedIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomsClearanceServiceInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredCustomsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredForCarriageValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclaredStatisticsValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeliveryInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForwarderServiceInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreeOnBoardValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreightForwarderAssignedIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GeneralCargoIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HandlingCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HandlingInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HaulageInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRiskIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HumanFoodIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InsurancePremiumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InsuranceValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LivestockIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LoadingLengthMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LoadingSequenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetNetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetVolumeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetWeightMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformingCarrierAssignedIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RemarksType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShippingPriorityLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecialInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecialSecurityIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecialServiceInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SplitConsignmentIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SummaryDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TariffCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TariffDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThirdPartyPayerIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalGoodsItemQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalInvoiceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalPackagesQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTransportHandlingUnitQuantityType;

/**
 * Class ConsignmentType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method CarrierAssignedIDType getCarrierAssignedID()
 * @method self setCarrierAssignedID(CarrierAssignedIDType|string $value)
 * @method ConsigneeAssignedIDType getConsigneeAssignedID()
 * @method self setConsigneeAssignedID(ConsigneeAssignedIDType|string $value)
 * @method ConsignorAssignedIDType getConsignorAssignedID()
 * @method self setConsignorAssignedID(ConsignorAssignedIDType|string $value)
 * @method FreightForwarderAssignedIDType getFreightForwarderAssignedID()
 * @method self setFreightForwarderAssignedID(FreightForwarderAssignedIDType|string $value)
 * @method BrokerAssignedIDType getBrokerAssignedID()
 * @method self setBrokerAssignedID(BrokerAssignedIDType|string $value)
 * @method ContractedCarrierAssignedIDType getContractedCarrierAssignedID()
 * @method self setContractedCarrierAssignedID(ContractedCarrierAssignedIDType|string $value)
 * @method PerformingCarrierAssignedIDType getPerformingCarrierAssignedID()
 * @method self setPerformingCarrierAssignedID(PerformingCarrierAssignedIDType|string $value)
 * @method SummaryDescriptionType[] getSummaryDescription()
 * @method self addSummaryDescription(SummaryDescriptionType|string $value)
 * @method self setSummaryDescription(SummaryDescriptionType ...$values)
 * @method TotalInvoiceAmountType getTotalInvoiceAmount()
 * @method self setTotalInvoiceAmount(TotalInvoiceAmountType|string $value)
 * @method DeclaredCustomsValueAmountType getDeclaredCustomsValueAmount()
 * @method self setDeclaredCustomsValueAmount(DeclaredCustomsValueAmountType|string $value)
 * @method TariffDescriptionType[] getTariffDescription()
 * @method self addTariffDescription(TariffDescriptionType|string $value)
 * @method self setTariffDescription(TariffDescriptionType ...$values)
 * @method TariffCodeType getTariffCode()
 * @method self setTariffCode(TariffCodeType|string $value)
 * @method InsurancePremiumAmountType getInsurancePremiumAmount()
 * @method self setInsurancePremiumAmount(InsurancePremiumAmountType|string $value)
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
 * @method LoadingLengthMeasureType getLoadingLengthMeasure()
 * @method self setLoadingLengthMeasure(LoadingLengthMeasureType|string $value)
 * @method RemarksType[] getRemarks()
 * @method self addRemarks(RemarksType|string $value)
 * @method self setRemarks(RemarksType ...$values)
 * @method HazardousRiskIndicatorType getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator(HazardousRiskIndicatorType|string $value)
 * @method AnimalFoodIndicatorType getAnimalFoodIndicator()
 * @method self setAnimalFoodIndicator(AnimalFoodIndicatorType|string $value)
 * @method HumanFoodIndicatorType getHumanFoodIndicator()
 * @method self setHumanFoodIndicator(HumanFoodIndicatorType|string $value)
 * @method LivestockIndicatorType getLivestockIndicator()
 * @method self setLivestockIndicator(LivestockIndicatorType|string $value)
 * @method BulkCargoIndicatorType getBulkCargoIndicator()
 * @method self setBulkCargoIndicator(BulkCargoIndicatorType|string $value)
 * @method ContainerizedIndicatorType getContainerizedIndicator()
 * @method self setContainerizedIndicator(ContainerizedIndicatorType|string $value)
 * @method GeneralCargoIndicatorType getGeneralCargoIndicator()
 * @method self setGeneralCargoIndicator(GeneralCargoIndicatorType|string $value)
 * @method SpecialSecurityIndicatorType getSpecialSecurityIndicator()
 * @method self setSpecialSecurityIndicator(SpecialSecurityIndicatorType|string $value)
 * @method ThirdPartyPayerIndicatorType getThirdPartyPayerIndicator()
 * @method self setThirdPartyPayerIndicator(ThirdPartyPayerIndicatorType|string $value)
 * @method CarrierServiceInstructionsType[] getCarrierServiceInstructions()
 * @method self addCarrierServiceInstructions(CarrierServiceInstructionsType|string $value)
 * @method self setCarrierServiceInstructions(CarrierServiceInstructionsType ...$values)
 * @method CustomsClearanceServiceInstructionsType[] getCustomsClearanceServiceInstructions()
 * @method self addCustomsClearanceServiceInstructions(CustomsClearanceServiceInstructionsType|string $value)
 * @method self setCustomsClearanceServiceInstructions(CustomsClearanceServiceInstructionsType ...$values)
 * @method ForwarderServiceInstructionsType[] getForwarderServiceInstructions()
 * @method self addForwarderServiceInstructions(ForwarderServiceInstructionsType|string $value)
 * @method self setForwarderServiceInstructions(ForwarderServiceInstructionsType ...$values)
 * @method SpecialServiceInstructionsType[] getSpecialServiceInstructions()
 * @method self addSpecialServiceInstructions(SpecialServiceInstructionsType|string $value)
 * @method self setSpecialServiceInstructions(SpecialServiceInstructionsType ...$values)
 * @method SequenceIDType getSequenceID()
 * @method self setSequenceID(SequenceIDType|string $value)
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
 * @method TotalGoodsItemQuantityType getTotalGoodsItemQuantity()
 * @method self setTotalGoodsItemQuantity(TotalGoodsItemQuantityType|string $value)
 * @method TotalTransportHandlingUnitQuantityType getTotalTransportHandlingUnitQuantity()
 * @method self setTotalTransportHandlingUnitQuantity(TotalTransportHandlingUnitQuantityType|string $value)
 * @method InsuranceValueAmountType getInsuranceValueAmount()
 * @method self setInsuranceValueAmount(InsuranceValueAmountType|string $value)
 * @method DeclaredForCarriageValueAmountType getDeclaredForCarriageValueAmount()
 * @method self setDeclaredForCarriageValueAmount(DeclaredForCarriageValueAmountType|string $value)
 * @method DeclaredStatisticsValueAmountType getDeclaredStatisticsValueAmount()
 * @method self setDeclaredStatisticsValueAmount(DeclaredStatisticsValueAmountType|string $value)
 * @method FreeOnBoardValueAmountType getFreeOnBoardValueAmount()
 * @method self setFreeOnBoardValueAmount(FreeOnBoardValueAmountType|string $value)
 * @method SpecialInstructionsType[] getSpecialInstructions()
 * @method self addSpecialInstructions(SpecialInstructionsType|string $value)
 * @method self setSpecialInstructions(SpecialInstructionsType ...$values)
 * @method SplitConsignmentIndicatorType getSplitConsignmentIndicator()
 * @method self setSplitConsignmentIndicator(SplitConsignmentIndicatorType|string $value)
 * @method DeliveryInstructionsType[] getDeliveryInstructions()
 * @method self addDeliveryInstructions(DeliveryInstructionsType|string $value)
 * @method self setDeliveryInstructions(DeliveryInstructionsType ...$values)
 * @method ConsignmentQuantityType getConsignmentQuantity()
 * @method self setConsignmentQuantity(ConsignmentQuantityType|string $value)
 * @method ConsolidatableIndicatorType getConsolidatableIndicator()
 * @method self setConsolidatableIndicator(ConsolidatableIndicatorType|string $value)
 * @method HaulageInstructionsType[] getHaulageInstructions()
 * @method self addHaulageInstructions(HaulageInstructionsType|string $value)
 * @method self setHaulageInstructions(HaulageInstructionsType ...$values)
 * @method LoadingSequenceIDType getLoadingSequenceID()
 * @method self setLoadingSequenceID(LoadingSequenceIDType|string $value)
 * @method ChildConsignmentQuantityType getChildConsignmentQuantity()
 * @method self setChildConsignmentQuantity(ChildConsignmentQuantityType|string $value)
 * @method TotalPackagesQuantityType getTotalPackagesQuantity()
 * @method self setTotalPackagesQuantity(TotalPackagesQuantityType|string $value)
 * @method ShipmentType[] getConsolidatedShipment()
 * @method self addConsolidatedShipment(ShipmentType $value)
 * @method self setConsolidatedShipment(ShipmentType ...$values)
 * @method CustomsDeclarationType[] getCustomsDeclaration()
 * @method self addCustomsDeclaration(CustomsDeclarationType $value)
 * @method self setCustomsDeclaration(CustomsDeclarationType ...$values)
 * @method TransportEventType getRequestedPickupTransportEvent()
 * @method self setRequestedPickupTransportEvent(TransportEventType $value)
 * @method TransportEventType getRequestedDeliveryTransportEvent()
 * @method self setRequestedDeliveryTransportEvent(TransportEventType $value)
 * @method TransportEventType getPlannedPickupTransportEvent()
 * @method self setPlannedPickupTransportEvent(TransportEventType $value)
 * @method TransportEventType getPlannedDeliveryTransportEvent()
 * @method self setPlannedDeliveryTransportEvent(TransportEventType $value)
 * @method StatusType[] getStatus()
 * @method self addStatus(StatusType $value)
 * @method self setStatus(StatusType ...$values)
 * @method ConsignmentType[] getChildConsignment()
 * @method self addChildConsignment(ConsignmentType $value)
 * @method self setChildConsignment(ConsignmentType ...$values)
 * @method PartyType getConsigneeParty()
 * @method self setConsigneeParty(PartyType $value)
 * @method PartyType getExporterParty()
 * @method self setExporterParty(PartyType $value)
 * @method PartyType getConsignorParty()
 * @method self setConsignorParty(PartyType $value)
 * @method PartyType getImporterParty()
 * @method self setImporterParty(PartyType $value)
 * @method PartyType getCarrierParty()
 * @method self setCarrierParty(PartyType $value)
 * @method PartyType getFreightForwarderParty()
 * @method self setFreightForwarderParty(PartyType $value)
 * @method PartyType getNotifyParty()
 * @method self setNotifyParty(PartyType $value)
 * @method PartyType getOriginalDespatchParty()
 * @method self setOriginalDespatchParty(PartyType $value)
 * @method PartyType getFinalDeliveryParty()
 * @method self setFinalDeliveryParty(PartyType $value)
 * @method PartyType getPerformingCarrierParty()
 * @method self setPerformingCarrierParty(PartyType $value)
 * @method PartyType getSubstituteCarrierParty()
 * @method self setSubstituteCarrierParty(PartyType $value)
 * @method PartyType getLogisticsOperatorParty()
 * @method self setLogisticsOperatorParty(PartyType $value)
 * @method PartyType getTransportAdvisorParty()
 * @method self setTransportAdvisorParty(PartyType $value)
 * @method PartyType getHazardousItemNotificationParty()
 * @method self setHazardousItemNotificationParty(PartyType $value)
 * @method PartyType getInsuranceParty()
 * @method self setInsuranceParty(PartyType $value)
 * @method PartyType getMortgageHolderParty()
 * @method self setMortgageHolderParty(PartyType $value)
 * @method PartyType getBillOfLadingHolderParty()
 * @method self setBillOfLadingHolderParty(PartyType $value)
 * @method CountryType getOriginalDepartureCountry()
 * @method self setOriginalDepartureCountry(CountryType $value)
 * @method CountryType getFinalDestinationCountry()
 * @method self setFinalDestinationCountry(CountryType $value)
 * @method CountryType[] getTransitCountry()
 * @method self addTransitCountry(CountryType $value)
 * @method self setTransitCountry(CountryType ...$values)
 * @method ContractType getTransportContract()
 * @method self setTransportContract(ContractType $value)
 * @method TransportEventType[] getTransportEvent()
 * @method self addTransportEvent(TransportEventType $value)
 * @method self setTransportEvent(TransportEventType ...$values)
 * @method TransportationServiceType getOriginalDespatchTransportationService()
 * @method self setOriginalDespatchTransportationService(TransportationServiceType $value)
 * @method TransportationServiceType getFinalDeliveryTransportationService()
 * @method self setFinalDeliveryTransportationService(TransportationServiceType $value)
 * @method DeliveryTermsType getDeliveryTerms()
 * @method self setDeliveryTerms(DeliveryTermsType $value)
 * @method PaymentTermsType getPaymentTerms()
 * @method self setPaymentTerms(PaymentTermsType $value)
 * @method PaymentTermsType getCollectPaymentTerms()
 * @method self setCollectPaymentTerms(PaymentTermsType $value)
 * @method PaymentTermsType getDisbursementPaymentTerms()
 * @method self setDisbursementPaymentTerms(PaymentTermsType $value)
 * @method PaymentTermsType getPrepaidPaymentTerms()
 * @method self setPrepaidPaymentTerms(PaymentTermsType $value)
 * @method AllowanceChargeType[] getFreightAllowanceCharge()
 * @method self addFreightAllowanceCharge(AllowanceChargeType $value)
 * @method self setFreightAllowanceCharge(AllowanceChargeType ...$values)
 * @method AllowanceChargeType[] getExtraAllowanceCharge()
 * @method self addExtraAllowanceCharge(AllowanceChargeType $value)
 * @method self setExtraAllowanceCharge(AllowanceChargeType ...$values)
 * @method ShipmentStageType[] getMainCarriageShipmentStage()
 * @method self addMainCarriageShipmentStage(ShipmentStageType $value)
 * @method self setMainCarriageShipmentStage(ShipmentStageType ...$values)
 * @method ShipmentStageType[] getPreCarriageShipmentStage()
 * @method self addPreCarriageShipmentStage(ShipmentStageType $value)
 * @method self setPreCarriageShipmentStage(ShipmentStageType ...$values)
 * @method ShipmentStageType[] getOnCarriageShipmentStage()
 * @method self addOnCarriageShipmentStage(ShipmentStageType $value)
 * @method self setOnCarriageShipmentStage(ShipmentStageType ...$values)
 * @method TransportHandlingUnitType[] getTransportHandlingUnit()
 * @method self addTransportHandlingUnit(TransportHandlingUnitType $value)
 * @method self setTransportHandlingUnit(TransportHandlingUnitType ...$values)
 * @method LocationType getFirstArrivalPortLocation()
 * @method self setFirstArrivalPortLocation(LocationType $value)
 * @method LocationType getLastExitPortLocation()
 * @method self setLastExitPortLocation(LocationType $value)
 */
class ConsignmentType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:CarrierAssignedID" => CarrierAssignedIDType::class,
        "cbc:ConsigneeAssignedID" => ConsigneeAssignedIDType::class,
        "cbc:ConsignorAssignedID" => ConsignorAssignedIDType::class,
        "cbc:FreightForwarderAssignedID" => FreightForwarderAssignedIDType::class,
        "cbc:BrokerAssignedID" => BrokerAssignedIDType::class,
        "cbc:ContractedCarrierAssignedID" => ContractedCarrierAssignedIDType::class,
        "cbc:PerformingCarrierAssignedID" => PerformingCarrierAssignedIDType::class,
        "cbc:SummaryDescription" => SummaryDescriptionType::class . "[]",
        "cbc:TotalInvoiceAmount" => TotalInvoiceAmountType::class,
        "cbc:DeclaredCustomsValueAmount" => DeclaredCustomsValueAmountType::class,
        "cbc:TariffDescription" => TariffDescriptionType::class . "[]",
        "cbc:TariffCode" => TariffCodeType::class,
        "cbc:InsurancePremiumAmount" => InsurancePremiumAmountType::class,
        "cbc:GrossWeightMeasure" => GrossWeightMeasureType::class,
        "cbc:NetWeightMeasure" => NetWeightMeasureType::class,
        "cbc:NetNetWeightMeasure" => NetNetWeightMeasureType::class,
        "cbc:ChargeableWeightMeasure" => ChargeableWeightMeasureType::class,
        "cbc:GrossVolumeMeasure" => GrossVolumeMeasureType::class,
        "cbc:NetVolumeMeasure" => NetVolumeMeasureType::class,
        "cbc:LoadingLengthMeasure" => LoadingLengthMeasureType::class,
        "cbc:Remarks" => RemarksType::class . "[]",
        "cbc:HazardousRiskIndicator" => HazardousRiskIndicatorType::class,
        "cbc:AnimalFoodIndicator" => AnimalFoodIndicatorType::class,
        "cbc:HumanFoodIndicator" => HumanFoodIndicatorType::class,
        "cbc:LivestockIndicator" => LivestockIndicatorType::class,
        "cbc:BulkCargoIndicator" => BulkCargoIndicatorType::class,
        "cbc:ContainerizedIndicator" => ContainerizedIndicatorType::class,
        "cbc:GeneralCargoIndicator" => GeneralCargoIndicatorType::class,
        "cbc:SpecialSecurityIndicator" => SpecialSecurityIndicatorType::class,
        "cbc:ThirdPartyPayerIndicator" => ThirdPartyPayerIndicatorType::class,
        "cbc:CarrierServiceInstructions" => CarrierServiceInstructionsType::class . "[]",
        "cbc:CustomsClearanceServiceInstructions" => CustomsClearanceServiceInstructionsType::class . "[]",
        "cbc:ForwarderServiceInstructions" => ForwarderServiceInstructionsType::class . "[]",
        "cbc:SpecialServiceInstructions" => SpecialServiceInstructionsType::class . "[]",
        "cbc:SequenceID" => SequenceIDType::class,
        "cbc:ShippingPriorityLevelCode" => ShippingPriorityLevelCodeType::class,
        "cbc:HandlingCode" => HandlingCodeType::class,
        "cbc:HandlingInstructions" => HandlingInstructionsType::class . "[]",
        "cbc:Information" => InformationType::class . "[]",
        "cbc:TotalGoodsItemQuantity" => TotalGoodsItemQuantityType::class,
        "cbc:TotalTransportHandlingUnitQuantity" => TotalTransportHandlingUnitQuantityType::class,
        "cbc:InsuranceValueAmount" => InsuranceValueAmountType::class,
        "cbc:DeclaredForCarriageValueAmount" => DeclaredForCarriageValueAmountType::class,
        "cbc:DeclaredStatisticsValueAmount" => DeclaredStatisticsValueAmountType::class,
        "cbc:FreeOnBoardValueAmount" => FreeOnBoardValueAmountType::class,
        "cbc:SpecialInstructions" => SpecialInstructionsType::class . "[]",
        "cbc:SplitConsignmentIndicator" => SplitConsignmentIndicatorType::class,
        "cbc:DeliveryInstructions" => DeliveryInstructionsType::class . "[]",
        "cbc:ConsignmentQuantity" => ConsignmentQuantityType::class,
        "cbc:ConsolidatableIndicator" => ConsolidatableIndicatorType::class,
        "cbc:HaulageInstructions" => HaulageInstructionsType::class . "[]",
        "cbc:LoadingSequenceID" => LoadingSequenceIDType::class,
        "cbc:ChildConsignmentQuantity" => ChildConsignmentQuantityType::class,
        "cbc:TotalPackagesQuantity" => TotalPackagesQuantityType::class,
        "cac:ConsolidatedShipment" => ShipmentType::class . "[]",
        "cac:CustomsDeclaration" => CustomsDeclarationType::class . "[]",
        "cac:RequestedPickupTransportEvent" => TransportEventType::class,
        "cac:RequestedDeliveryTransportEvent" => TransportEventType::class,
        "cac:PlannedPickupTransportEvent" => TransportEventType::class,
        "cac:PlannedDeliveryTransportEvent" => TransportEventType::class,
        "cac:Status" => StatusType::class . "[]",
        "cac:ChildConsignment" => ConsignmentType::class . "[]",
        "cac:ConsigneeParty" => PartyType::class,
        "cac:ExporterParty" => PartyType::class,
        "cac:ConsignorParty" => PartyType::class,
        "cac:ImporterParty" => PartyType::class,
        "cac:CarrierParty" => PartyType::class,
        "cac:FreightForwarderParty" => PartyType::class,
        "cac:NotifyParty" => PartyType::class,
        "cac:OriginalDespatchParty" => PartyType::class,
        "cac:FinalDeliveryParty" => PartyType::class,
        "cac:PerformingCarrierParty" => PartyType::class,
        "cac:SubstituteCarrierParty" => PartyType::class,
        "cac:LogisticsOperatorParty" => PartyType::class,
        "cac:TransportAdvisorParty" => PartyType::class,
        "cac:HazardousItemNotificationParty" => PartyType::class,
        "cac:InsuranceParty" => PartyType::class,
        "cac:MortgageHolderParty" => PartyType::class,
        "cac:BillOfLadingHolderParty" => PartyType::class,
        "cac:OriginalDepartureCountry" => CountryType::class,
        "cac:FinalDestinationCountry" => CountryType::class,
        "cac:TransitCountry" => CountryType::class . "[]",
        "cac:TransportContract" => ContractType::class,
        "cac:TransportEvent" => TransportEventType::class . "[]",
        "cac:OriginalDespatchTransportationService" => TransportationServiceType::class,
        "cac:FinalDeliveryTransportationService" => TransportationServiceType::class,
        "cac:DeliveryTerms" => DeliveryTermsType::class,
        "cac:PaymentTerms" => PaymentTermsType::class,
        "cac:CollectPaymentTerms" => PaymentTermsType::class,
        "cac:DisbursementPaymentTerms" => PaymentTermsType::class,
        "cac:PrepaidPaymentTerms" => PaymentTermsType::class,
        "cac:FreightAllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:ExtraAllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:MainCarriageShipmentStage" => ShipmentStageType::class . "[]",
        "cac:PreCarriageShipmentStage" => ShipmentStageType::class . "[]",
        "cac:OnCarriageShipmentStage" => ShipmentStageType::class . "[]",
        "cac:TransportHandlingUnit" => TransportHandlingUnitType::class . "[]",
        "cac:FirstArrivalPortLocation" => LocationType::class,
        "cac:LastExitPortLocation" => LocationType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}