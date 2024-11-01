<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportExecutionPlanReferenceIDType;

/**
 * Class TransportationSegmentType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method SequenceNumericType getSequenceNumeric()
 * @method self setSequenceNumeric(SequenceNumericType|string $value)
 * @method TransportExecutionPlanReferenceIDType getTransportExecutionPlanReferenceID()
 * @method self setTransportExecutionPlanReferenceID(TransportExecutionPlanReferenceIDType|string $value)
 * @method TransportationServiceType getTransportationService()
 * @method self setTransportationService(TransportationServiceType $value)
 * @method PartyType getTransportServiceProviderParty()
 * @method self setTransportServiceProviderParty(PartyType $value)
 * @method ConsignmentType getReferencedConsignment()
 * @method self setReferencedConsignment(ConsignmentType $value)
 * @method ShipmentStageType[] getShipmentStage()
 * @method self addShipmentStage(ShipmentStageType $value)
 * @method self setShipmentStage(ShipmentStageType ...$values)
 */
class TransportationSegmentType extends AggregateComponent
{
    protected $casts = [
        "cbc:SequenceNumeric" => SequenceNumericType::class,
        "cbc:TransportExecutionPlanReferenceID" => TransportExecutionPlanReferenceIDType::class,
        "cac:TransportationService" => TransportationServiceType::class,
        "cac:TransportServiceProviderParty" => PartyType::class,
        "cac:ReferencedConsignment" => ConsignmentType::class,
        "cac:ShipmentStage" => ShipmentStageType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:SequenceNumeric" => 1,
        "cac:TransportationService" => 1,
        "cac:TransportServiceProviderParty" => 1,
    ];
}