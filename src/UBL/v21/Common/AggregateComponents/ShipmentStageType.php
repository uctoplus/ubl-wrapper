<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportModeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportMeansTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransitDirectionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreCarriageIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OnCarriageIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedDeliveryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequiredDeliveryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LoadingSequenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SuccessiveSequenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DemurrageInstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CrewQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PassengerQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransportMeansType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransportEventType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PersonType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getTransportModeCode()
 * @method self setTransportModeCode($value)
 * @method mixed getTransportMeansTypeCode()
 * @method self setTransportMeansTypeCode($value)
 * @method mixed getTransitDirectionCode()
 * @method self setTransitDirectionCode($value)
 * @method mixed getPreCarriageIndicator()
 * @method self setPreCarriageIndicator($value)
 * @method mixed getOnCarriageIndicator()
 * @method self setOnCarriageIndicator($value)
 * @method mixed getEstimatedDeliveryDate()
 * @method self setEstimatedDeliveryDate($value)
 * @method mixed getEstimatedDeliveryTime()
 * @method self setEstimatedDeliveryTime($value)
 * @method mixed getRequiredDeliveryDate()
 * @method self setRequiredDeliveryDate($value)
 * @method mixed getRequiredDeliveryTime()
 * @method self setRequiredDeliveryTime($value)
 * @method mixed getLoadingSequenceID()
 * @method self setLoadingSequenceID($value)
 * @method mixed getSuccessiveSequenceID()
 * @method self setSuccessiveSequenceID($value)
 * @method mixed getInstructions()
 * @method self setInstructions($value)
 * @method mixed getDemurrageInstructions()
 * @method self setDemurrageInstructions($value)
 * @method mixed getCrewQuantity()
 * @method self setCrewQuantity($value)
 * @method mixed getPassengerQuantity()
 * @method self setPassengerQuantity($value)
 * @method mixed getTransitPeriod()
 * @method self setTransitPeriod($value)
 * @method mixed getCarrierParty()
 * @method self setCarrierParty($value)
 * @method mixed getTransportMeans()
 * @method self setTransportMeans($value)
 * @method mixed getLoadingPortLocation()
 * @method self setLoadingPortLocation($value)
 * @method mixed getUnloadingPortLocation()
 * @method self setUnloadingPortLocation($value)
 * @method mixed getTransshipPortLocation()
 * @method self setTransshipPortLocation($value)
 * @method mixed getLoadingTransportEvent()
 * @method self setLoadingTransportEvent($value)
 * @method mixed getExaminationTransportEvent()
 * @method self setExaminationTransportEvent($value)
 * @method mixed getAvailabilityTransportEvent()
 * @method self setAvailabilityTransportEvent($value)
 * @method mixed getExportationTransportEvent()
 * @method self setExportationTransportEvent($value)
 * @method mixed getDischargeTransportEvent()
 * @method self setDischargeTransportEvent($value)
 * @method mixed getWarehousingTransportEvent()
 * @method self setWarehousingTransportEvent($value)
 * @method mixed getTakeoverTransportEvent()
 * @method self setTakeoverTransportEvent($value)
 * @method mixed getOptionalTakeoverTransportEvent()
 * @method self setOptionalTakeoverTransportEvent($value)
 * @method mixed getDropoffTransportEvent()
 * @method self setDropoffTransportEvent($value)
 * @method mixed getActualPickupTransportEvent()
 * @method self setActualPickupTransportEvent($value)
 * @method mixed getDeliveryTransportEvent()
 * @method self setDeliveryTransportEvent($value)
 * @method mixed getReceiptTransportEvent()
 * @method self setReceiptTransportEvent($value)
 * @method mixed getStorageTransportEvent()
 * @method self setStorageTransportEvent($value)
 * @method mixed getAcceptanceTransportEvent()
 * @method self setAcceptanceTransportEvent($value)
 * @method mixed getTerminalOperatorParty()
 * @method self setTerminalOperatorParty($value)
 * @method mixed getCustomsAgentParty()
 * @method self setCustomsAgentParty($value)
 * @method mixed getEstimatedTransitPeriod()
 * @method self setEstimatedTransitPeriod($value)
 * @method mixed getFreightAllowanceCharge()
 * @method self setFreightAllowanceCharge($value)
 * @method mixed getFreightChargeLocation()
 * @method self setFreightChargeLocation($value)
 * @method mixed getDetentionTransportEvent()
 * @method self setDetentionTransportEvent($value)
 * @method mixed getRequestedDepartureTransportEvent()
 * @method self setRequestedDepartureTransportEvent($value)
 * @method mixed getRequestedArrivalTransportEvent()
 * @method self setRequestedArrivalTransportEvent($value)
 * @method mixed getRequestedWaypointTransportEvent()
 * @method self setRequestedWaypointTransportEvent($value)
 * @method mixed getPlannedDepartureTransportEvent()
 * @method self setPlannedDepartureTransportEvent($value)
 * @method mixed getPlannedArrivalTransportEvent()
 * @method self setPlannedArrivalTransportEvent($value)
 * @method mixed getPlannedWaypointTransportEvent()
 * @method self setPlannedWaypointTransportEvent($value)
 * @method mixed getActualDepartureTransportEvent()
 * @method self setActualDepartureTransportEvent($value)
 * @method mixed getActualWaypointTransportEvent()
 * @method self setActualWaypointTransportEvent($value)
 * @method mixed getActualArrivalTransportEvent()
 * @method self setActualArrivalTransportEvent($value)
 * @method mixed getTransportEvent()
 * @method self setTransportEvent($value)
 * @method mixed getEstimatedDepartureTransportEvent()
 * @method self setEstimatedDepartureTransportEvent($value)
 * @method mixed getEstimatedArrivalTransportEvent()
 * @method self setEstimatedArrivalTransportEvent($value)
 * @method mixed getPassengerPerson()
 * @method self setPassengerPerson($value)
 * @method mixed getDriverPerson()
 * @method self setDriverPerson($value)
 * @method mixed getReportingPerson()
 * @method self setReportingPerson($value)
 * @method mixed getCrewMemberPerson()
 * @method self setCrewMemberPerson($value)
 * @method mixed getSecurityOfficerPerson()
 * @method self setSecurityOfficerPerson($value)
 * @method mixed getMasterPerson()
 * @method self setMasterPerson($value)
 * @method mixed getShipsSurgeonPerson()
 * @method self setShipsSurgeonPerson($value)
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