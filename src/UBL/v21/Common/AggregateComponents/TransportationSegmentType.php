<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportExecutionPlanReferenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransportationServiceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsignmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShipmentStageType;

/**
 *
 * @method mixed getSequenceNumeric()
 * @method self setSequenceNumeric($value)
 * @method mixed getTransportExecutionPlanReferenceID()
 * @method self setTransportExecutionPlanReferenceID($value)
 * @method mixed getTransportationService()
 * @method self setTransportationService($value)
 * @method mixed getTransportServiceProviderParty()
 * @method self setTransportServiceProviderParty($value)
 * @method mixed getReferencedConsignment()
 * @method self setReferencedConsignment($value)
 * @method mixed getShipmentStage()
 * @method self setShipmentStage($value)
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