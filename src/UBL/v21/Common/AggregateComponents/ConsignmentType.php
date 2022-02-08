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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getCarrierAssignedID()
 * @method self setCarrierAssignedID($value)
 * @method mixed getConsigneeAssignedID()
 * @method self setConsigneeAssignedID($value)
 * @method mixed getConsignorAssignedID()
 * @method self setConsignorAssignedID($value)
 * @method mixed getFreightForwarderAssignedID()
 * @method self setFreightForwarderAssignedID($value)
 * @method mixed getBrokerAssignedID()
 * @method self setBrokerAssignedID($value)
 * @method mixed getContractedCarrierAssignedID()
 * @method self setContractedCarrierAssignedID($value)
 * @method mixed getPerformingCarrierAssignedID()
 * @method self setPerformingCarrierAssignedID($value)
 * @method mixed getSummaryDescription()
 * @method self addSummaryDescription($value)
 * @method self setSummaryDescription($value)
 * @method mixed getTotalInvoiceAmount()
 * @method self setTotalInvoiceAmount($value)
 * @method mixed getDeclaredCustomsValueAmount()
 * @method self setDeclaredCustomsValueAmount($value)
 * @method mixed getTariffDescription()
 * @method self addTariffDescription($value)
 * @method self setTariffDescription($value)
 * @method mixed getTariffCode()
 * @method self setTariffCode($value)
 * @method mixed getInsurancePremiumAmount()
 * @method self setInsurancePremiumAmount($value)
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
 * @method mixed getLoadingLengthMeasure()
 * @method self setLoadingLengthMeasure($value)
 * @method mixed getRemarks()
 * @method self addRemarks($value)
 * @method self setRemarks($value)
 * @method mixed getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator($value)
 * @method mixed getAnimalFoodIndicator()
 * @method self setAnimalFoodIndicator($value)
 * @method mixed getHumanFoodIndicator()
 * @method self setHumanFoodIndicator($value)
 * @method mixed getLivestockIndicator()
 * @method self setLivestockIndicator($value)
 * @method mixed getBulkCargoIndicator()
 * @method self setBulkCargoIndicator($value)
 * @method mixed getContainerizedIndicator()
 * @method self setContainerizedIndicator($value)
 * @method mixed getGeneralCargoIndicator()
 * @method self setGeneralCargoIndicator($value)
 * @method mixed getSpecialSecurityIndicator()
 * @method self setSpecialSecurityIndicator($value)
 * @method mixed getThirdPartyPayerIndicator()
 * @method self setThirdPartyPayerIndicator($value)
 * @method mixed getCarrierServiceInstructions()
 * @method self addCarrierServiceInstructions($value)
 * @method self setCarrierServiceInstructions($value)
 * @method mixed getCustomsClearanceServiceInstructions()
 * @method self addCustomsClearanceServiceInstructions($value)
 * @method self setCustomsClearanceServiceInstructions($value)
 * @method mixed getForwarderServiceInstructions()
 * @method self addForwarderServiceInstructions($value)
 * @method self setForwarderServiceInstructions($value)
 * @method mixed getSpecialServiceInstructions()
 * @method self addSpecialServiceInstructions($value)
 * @method self setSpecialServiceInstructions($value)
 * @method mixed getSequenceID()
 * @method self setSequenceID($value)
 * @method mixed getShippingPriorityLevelCode()
 * @method self setShippingPriorityLevelCode($value)
 * @method mixed getHandlingCode()
 * @method self setHandlingCode($value)
 * @method mixed getHandlingInstructions()
 * @method self addHandlingInstructions($value)
 * @method self setHandlingInstructions($value)
 * @method mixed getInformation()
 * @method self addInformation($value)
 * @method self setInformation($value)
 * @method mixed getTotalGoodsItemQuantity()
 * @method self setTotalGoodsItemQuantity($value)
 * @method mixed getTotalTransportHandlingUnitQuantity()
 * @method self setTotalTransportHandlingUnitQuantity($value)
 * @method mixed getInsuranceValueAmount()
 * @method self setInsuranceValueAmount($value)
 * @method mixed getDeclaredForCarriageValueAmount()
 * @method self setDeclaredForCarriageValueAmount($value)
 * @method mixed getDeclaredStatisticsValueAmount()
 * @method self setDeclaredStatisticsValueAmount($value)
 * @method mixed getFreeOnBoardValueAmount()
 * @method self setFreeOnBoardValueAmount($value)
 * @method mixed getSpecialInstructions()
 * @method self addSpecialInstructions($value)
 * @method self setSpecialInstructions($value)
 * @method mixed getSplitConsignmentIndicator()
 * @method self setSplitConsignmentIndicator($value)
 * @method mixed getDeliveryInstructions()
 * @method self addDeliveryInstructions($value)
 * @method self setDeliveryInstructions($value)
 * @method mixed getConsignmentQuantity()
 * @method self setConsignmentQuantity($value)
 * @method mixed getConsolidatableIndicator()
 * @method self setConsolidatableIndicator($value)
 * @method mixed getHaulageInstructions()
 * @method self addHaulageInstructions($value)
 * @method self setHaulageInstructions($value)
 * @method mixed getLoadingSequenceID()
 * @method self setLoadingSequenceID($value)
 * @method mixed getChildConsignmentQuantity()
 * @method self setChildConsignmentQuantity($value)
 * @method mixed getTotalPackagesQuantity()
 * @method self setTotalPackagesQuantity($value)
 * @method mixed getConsolidatedShipment()
 * @method self addConsolidatedShipment($value)
 * @method self setConsolidatedShipment($value)
 * @method mixed getCustomsDeclaration()
 * @method self addCustomsDeclaration($value)
 * @method self setCustomsDeclaration($value)
 * @method mixed getRequestedPickupTransportEvent()
 * @method self setRequestedPickupTransportEvent($value)
 * @method mixed getRequestedDeliveryTransportEvent()
 * @method self setRequestedDeliveryTransportEvent($value)
 * @method mixed getPlannedPickupTransportEvent()
 * @method self setPlannedPickupTransportEvent($value)
 * @method mixed getPlannedDeliveryTransportEvent()
 * @method self setPlannedDeliveryTransportEvent($value)
 * @method mixed getStatus()
 * @method self addStatus($value)
 * @method self setStatus($value)
 * @method mixed getChildConsignment()
 * @method self addChildConsignment($value)
 * @method self setChildConsignment($value)
 * @method mixed getConsigneeParty()
 * @method self setConsigneeParty($value)
 * @method mixed getExporterParty()
 * @method self setExporterParty($value)
 * @method mixed getConsignorParty()
 * @method self setConsignorParty($value)
 * @method mixed getImporterParty()
 * @method self setImporterParty($value)
 * @method mixed getCarrierParty()
 * @method self setCarrierParty($value)
 * @method mixed getFreightForwarderParty()
 * @method self setFreightForwarderParty($value)
 * @method mixed getNotifyParty()
 * @method self setNotifyParty($value)
 * @method mixed getOriginalDespatchParty()
 * @method self setOriginalDespatchParty($value)
 * @method mixed getFinalDeliveryParty()
 * @method self setFinalDeliveryParty($value)
 * @method mixed getPerformingCarrierParty()
 * @method self setPerformingCarrierParty($value)
 * @method mixed getSubstituteCarrierParty()
 * @method self setSubstituteCarrierParty($value)
 * @method mixed getLogisticsOperatorParty()
 * @method self setLogisticsOperatorParty($value)
 * @method mixed getTransportAdvisorParty()
 * @method self setTransportAdvisorParty($value)
 * @method mixed getHazardousItemNotificationParty()
 * @method self setHazardousItemNotificationParty($value)
 * @method mixed getInsuranceParty()
 * @method self setInsuranceParty($value)
 * @method mixed getMortgageHolderParty()
 * @method self setMortgageHolderParty($value)
 * @method mixed getBillOfLadingHolderParty()
 * @method self setBillOfLadingHolderParty($value)
 * @method mixed getOriginalDepartureCountry()
 * @method self setOriginalDepartureCountry($value)
 * @method mixed getFinalDestinationCountry()
 * @method self setFinalDestinationCountry($value)
 * @method mixed getTransitCountry()
 * @method self addTransitCountry($value)
 * @method self setTransitCountry($value)
 * @method mixed getTransportContract()
 * @method self setTransportContract($value)
 * @method mixed getTransportEvent()
 * @method self addTransportEvent($value)
 * @method self setTransportEvent($value)
 * @method mixed getOriginalDespatchTransportationService()
 * @method self setOriginalDespatchTransportationService($value)
 * @method mixed getFinalDeliveryTransportationService()
 * @method self setFinalDeliveryTransportationService($value)
 * @method mixed getDeliveryTerms()
 * @method self setDeliveryTerms($value)
 * @method mixed getPaymentTerms()
 * @method self setPaymentTerms($value)
 * @method mixed getCollectPaymentTerms()
 * @method self setCollectPaymentTerms($value)
 * @method mixed getDisbursementPaymentTerms()
 * @method self setDisbursementPaymentTerms($value)
 * @method mixed getPrepaidPaymentTerms()
 * @method self setPrepaidPaymentTerms($value)
 * @method mixed getFreightAllowanceCharge()
 * @method self addFreightAllowanceCharge($value)
 * @method self setFreightAllowanceCharge($value)
 * @method mixed getExtraAllowanceCharge()
 * @method self addExtraAllowanceCharge($value)
 * @method self setExtraAllowanceCharge($value)
 * @method mixed getMainCarriageShipmentStage()
 * @method self addMainCarriageShipmentStage($value)
 * @method self setMainCarriageShipmentStage($value)
 * @method mixed getPreCarriageShipmentStage()
 * @method self addPreCarriageShipmentStage($value)
 * @method self setPreCarriageShipmentStage($value)
 * @method mixed getOnCarriageShipmentStage()
 * @method self addOnCarriageShipmentStage($value)
 * @method self setOnCarriageShipmentStage($value)
 * @method mixed getTransportHandlingUnit()
 * @method self addTransportHandlingUnit($value)
 * @method self setTransportHandlingUnit($value)
 * @method mixed getFirstArrivalPortLocation()
 * @method self setFirstArrivalPortLocation($value)
 * @method mixed getLastExitPortLocation()
 * @method self setLastExitPortLocation($value)
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