<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CrewQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DemurrageInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedDeliveryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LoadingSequenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OnCarriageIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PassengerQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreCarriageIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredDeliveryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SuccessiveSequenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransitDirectionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportMeansTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportModeCodeType;

/**
 * Class ShipmentStageType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method TransportModeCodeType getTransportModeCode()
 * @method self setTransportModeCode(TransportModeCodeType|string $value)
 * @method TransportMeansTypeCodeType getTransportMeansTypeCode()
 * @method self setTransportMeansTypeCode(TransportMeansTypeCodeType|string $value)
 * @method TransitDirectionCodeType getTransitDirectionCode()
 * @method self setTransitDirectionCode(TransitDirectionCodeType|string $value)
 * @method PreCarriageIndicatorType getPreCarriageIndicator()
 * @method self setPreCarriageIndicator(PreCarriageIndicatorType|string $value)
 * @method OnCarriageIndicatorType getOnCarriageIndicator()
 * @method self setOnCarriageIndicator(OnCarriageIndicatorType|string $value)
 * @method EstimatedDeliveryDateType getEstimatedDeliveryDate()
 * @method self setEstimatedDeliveryDate(EstimatedDeliveryDateType|string $value)
 * @method EstimatedDeliveryTimeType getEstimatedDeliveryTime()
 * @method self setEstimatedDeliveryTime(EstimatedDeliveryTimeType|string $value)
 * @method RequiredDeliveryDateType getRequiredDeliveryDate()
 * @method self setRequiredDeliveryDate(RequiredDeliveryDateType|string $value)
 * @method RequiredDeliveryTimeType getRequiredDeliveryTime()
 * @method self setRequiredDeliveryTime(RequiredDeliveryTimeType|string $value)
 * @method LoadingSequenceIDType getLoadingSequenceID()
 * @method self setLoadingSequenceID(LoadingSequenceIDType|string $value)
 * @method SuccessiveSequenceIDType getSuccessiveSequenceID()
 * @method self setSuccessiveSequenceID(SuccessiveSequenceIDType|string $value)
 * @method InstructionsType getInstructions()
 * @method self addInstructions(InstructionsType|string $value)
 * @method self setInstructions(InstructionsType ...$values)
 * @method DemurrageInstructionsType getDemurrageInstructions()
 * @method self addDemurrageInstructions(DemurrageInstructionsType|string $value)
 * @method self setDemurrageInstructions(DemurrageInstructionsType ...$values)
 * @method CrewQuantityType getCrewQuantity()
 * @method self setCrewQuantity(CrewQuantityType|string $value)
 * @method PassengerQuantityType getPassengerQuantity()
 * @method self setPassengerQuantity(PassengerQuantityType|string $value)
 * @method PeriodType getTransitPeriod()
 * @method self setTransitPeriod(PeriodType $value)
 * @method PartyType getCarrierParty()
 * @method self addCarrierParty(PartyType $value)
 * @method self setCarrierParty(PartyType ...$values)
 * @method TransportMeansType getTransportMeans()
 * @method self setTransportMeans(TransportMeansType $value)
 * @method LocationType getLoadingPortLocation()
 * @method self setLoadingPortLocation(LocationType $value)
 * @method LocationType getUnloadingPortLocation()
 * @method self setUnloadingPortLocation(LocationType $value)
 * @method LocationType getTransshipPortLocation()
 * @method self setTransshipPortLocation(LocationType $value)
 * @method TransportEventType getLoadingTransportEvent()
 * @method self setLoadingTransportEvent(TransportEventType $value)
 * @method TransportEventType getExaminationTransportEvent()
 * @method self setExaminationTransportEvent(TransportEventType $value)
 * @method TransportEventType getAvailabilityTransportEvent()
 * @method self setAvailabilityTransportEvent(TransportEventType $value)
 * @method TransportEventType getExportationTransportEvent()
 * @method self setExportationTransportEvent(TransportEventType $value)
 * @method TransportEventType getDischargeTransportEvent()
 * @method self setDischargeTransportEvent(TransportEventType $value)
 * @method TransportEventType getWarehousingTransportEvent()
 * @method self setWarehousingTransportEvent(TransportEventType $value)
 * @method TransportEventType getTakeoverTransportEvent()
 * @method self setTakeoverTransportEvent(TransportEventType $value)
 * @method TransportEventType getOptionalTakeoverTransportEvent()
 * @method self setOptionalTakeoverTransportEvent(TransportEventType $value)
 * @method TransportEventType getDropoffTransportEvent()
 * @method self setDropoffTransportEvent(TransportEventType $value)
 * @method TransportEventType getActualPickupTransportEvent()
 * @method self setActualPickupTransportEvent(TransportEventType $value)
 * @method TransportEventType getDeliveryTransportEvent()
 * @method self setDeliveryTransportEvent(TransportEventType $value)
 * @method TransportEventType getReceiptTransportEvent()
 * @method self setReceiptTransportEvent(TransportEventType $value)
 * @method TransportEventType getStorageTransportEvent()
 * @method self setStorageTransportEvent(TransportEventType $value)
 * @method TransportEventType getAcceptanceTransportEvent()
 * @method self setAcceptanceTransportEvent(TransportEventType $value)
 * @method PartyType getTerminalOperatorParty()
 * @method self setTerminalOperatorParty(PartyType $value)
 * @method PartyType getCustomsAgentParty()
 * @method self setCustomsAgentParty(PartyType $value)
 * @method PeriodType getEstimatedTransitPeriod()
 * @method self setEstimatedTransitPeriod(PeriodType $value)
 * @method AllowanceChargeType getFreightAllowanceCharge()
 * @method self addFreightAllowanceCharge(AllowanceChargeType $value)
 * @method self setFreightAllowanceCharge(AllowanceChargeType ...$values)
 * @method LocationType getFreightChargeLocation()
 * @method self setFreightChargeLocation(LocationType $value)
 * @method TransportEventType getDetentionTransportEvent()
 * @method self addDetentionTransportEvent(TransportEventType $value)
 * @method self setDetentionTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getRequestedDepartureTransportEvent()
 * @method self setRequestedDepartureTransportEvent(TransportEventType $value)
 * @method TransportEventType getRequestedArrivalTransportEvent()
 * @method self setRequestedArrivalTransportEvent(TransportEventType $value)
 * @method TransportEventType getRequestedWaypointTransportEvent()
 * @method self addRequestedWaypointTransportEvent(TransportEventType $value)
 * @method self setRequestedWaypointTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getPlannedDepartureTransportEvent()
 * @method self setPlannedDepartureTransportEvent(TransportEventType $value)
 * @method TransportEventType getPlannedArrivalTransportEvent()
 * @method self setPlannedArrivalTransportEvent(TransportEventType $value)
 * @method TransportEventType getPlannedWaypointTransportEvent()
 * @method self addPlannedWaypointTransportEvent(TransportEventType $value)
 * @method self setPlannedWaypointTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getActualDepartureTransportEvent()
 * @method self setActualDepartureTransportEvent(TransportEventType $value)
 * @method TransportEventType getActualWaypointTransportEvent()
 * @method self setActualWaypointTransportEvent(TransportEventType $value)
 * @method TransportEventType getActualArrivalTransportEvent()
 * @method self setActualArrivalTransportEvent(TransportEventType $value)
 * @method TransportEventType getTransportEvent()
 * @method self addTransportEvent(TransportEventType $value)
 * @method self setTransportEvent(TransportEventType ...$values)
 * @method TransportEventType getEstimatedDepartureTransportEvent()
 * @method self setEstimatedDepartureTransportEvent(TransportEventType $value)
 * @method TransportEventType getEstimatedArrivalTransportEvent()
 * @method self setEstimatedArrivalTransportEvent(TransportEventType $value)
 * @method PersonType getPassengerPerson()
 * @method self addPassengerPerson(PersonType $value)
 * @method self setPassengerPerson(PersonType ...$values)
 * @method PersonType getDriverPerson()
 * @method self addDriverPerson(PersonType $value)
 * @method self setDriverPerson(PersonType ...$values)
 * @method PersonType getReportingPerson()
 * @method self setReportingPerson(PersonType $value)
 * @method PersonType getCrewMemberPerson()
 * @method self addCrewMemberPerson(PersonType $value)
 * @method self setCrewMemberPerson(PersonType ...$values)
 * @method PersonType getSecurityOfficerPerson()
 * @method self setSecurityOfficerPerson(PersonType $value)
 * @method PersonType getMasterPerson()
 * @method self setMasterPerson(PersonType $value)
 * @method PersonType getShipsSurgeonPerson()
 * @method self setShipsSurgeonPerson(PersonType $value)
 */
class ShipmentStageType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:TransportModeCode" => TransportModeCodeType::class,
        "cbc:TransportMeansTypeCode" => TransportMeansTypeCodeType::class,
        "cbc:TransitDirectionCode" => TransitDirectionCodeType::class,
        "cbc:PreCarriageIndicator" => PreCarriageIndicatorType::class,
        "cbc:OnCarriageIndicator" => OnCarriageIndicatorType::class,
        "cbc:EstimatedDeliveryDate" => EstimatedDeliveryDateType::class,
        "cbc:EstimatedDeliveryTime" => EstimatedDeliveryTimeType::class,
        "cbc:RequiredDeliveryDate" => RequiredDeliveryDateType::class,
        "cbc:RequiredDeliveryTime" => RequiredDeliveryTimeType::class,
        "cbc:LoadingSequenceID" => LoadingSequenceIDType::class,
        "cbc:SuccessiveSequenceID" => SuccessiveSequenceIDType::class,
        "cbc:Instructions" => InstructionsType::class . "[]",
        "cbc:DemurrageInstructions" => DemurrageInstructionsType::class . "[]",
        "cbc:CrewQuantity" => CrewQuantityType::class,
        "cbc:PassengerQuantity" => PassengerQuantityType::class,
        "cac:TransitPeriod" => PeriodType::class,
        "cac:CarrierParty" => PartyType::class . "[]",
        "cac:TransportMeans" => TransportMeansType::class,
        "cac:LoadingPortLocation" => LocationType::class,
        "cac:UnloadingPortLocation" => LocationType::class,
        "cac:TransshipPortLocation" => LocationType::class,
        "cac:LoadingTransportEvent" => TransportEventType::class,
        "cac:ExaminationTransportEvent" => TransportEventType::class,
        "cac:AvailabilityTransportEvent" => TransportEventType::class,
        "cac:ExportationTransportEvent" => TransportEventType::class,
        "cac:DischargeTransportEvent" => TransportEventType::class,
        "cac:WarehousingTransportEvent" => TransportEventType::class,
        "cac:TakeoverTransportEvent" => TransportEventType::class,
        "cac:OptionalTakeoverTransportEvent" => TransportEventType::class,
        "cac:DropoffTransportEvent" => TransportEventType::class,
        "cac:ActualPickupTransportEvent" => TransportEventType::class,
        "cac:DeliveryTransportEvent" => TransportEventType::class,
        "cac:ReceiptTransportEvent" => TransportEventType::class,
        "cac:StorageTransportEvent" => TransportEventType::class,
        "cac:AcceptanceTransportEvent" => TransportEventType::class,
        "cac:TerminalOperatorParty" => PartyType::class,
        "cac:CustomsAgentParty" => PartyType::class,
        "cac:EstimatedTransitPeriod" => PeriodType::class,
        "cac:FreightAllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:FreightChargeLocation" => LocationType::class,
        "cac:DetentionTransportEvent" => TransportEventType::class . "[]",
        "cac:RequestedDepartureTransportEvent" => TransportEventType::class,
        "cac:RequestedArrivalTransportEvent" => TransportEventType::class,
        "cac:RequestedWaypointTransportEvent" => TransportEventType::class . "[]",
        "cac:PlannedDepartureTransportEvent" => TransportEventType::class,
        "cac:PlannedArrivalTransportEvent" => TransportEventType::class,
        "cac:PlannedWaypointTransportEvent" => TransportEventType::class . "[]",
        "cac:ActualDepartureTransportEvent" => TransportEventType::class,
        "cac:ActualWaypointTransportEvent" => TransportEventType::class,
        "cac:ActualArrivalTransportEvent" => TransportEventType::class,
        "cac:TransportEvent" => TransportEventType::class . "[]",
        "cac:EstimatedDepartureTransportEvent" => TransportEventType::class,
        "cac:EstimatedArrivalTransportEvent" => TransportEventType::class,
        "cac:PassengerPerson" => PersonType::class . "[]",
        "cac:DriverPerson" => PersonType::class . "[]",
        "cac:ReportingPerson" => PersonType::class,
        "cac:CrewMemberPerson" => PersonType::class . "[]",
        "cac:SecurityOfficerPerson" => PersonType::class,
        "cac:MasterPerson" => PersonType::class,
        "cac:ShipsSurgeonPerson" => PersonType::class,
    ];

    protected $minOccurs = [
    ];
}