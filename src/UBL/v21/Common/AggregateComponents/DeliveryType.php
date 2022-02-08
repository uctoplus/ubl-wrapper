<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualDeliveryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestDeliveryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReleaseIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TrackingIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DespatchType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryUnitType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ShipmentType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getMinimumQuantity()
 * @method self setMinimumQuantity($value)
 * @method mixed getMaximumQuantity()
 * @method self setMaximumQuantity($value)
 * @method mixed getActualDeliveryDate()
 * @method self setActualDeliveryDate($value)
 * @method mixed getActualDeliveryTime()
 * @method self setActualDeliveryTime($value)
 * @method mixed getLatestDeliveryDate()
 * @method self setLatestDeliveryDate($value)
 * @method mixed getLatestDeliveryTime()
 * @method self setLatestDeliveryTime($value)
 * @method mixed getReleaseID()
 * @method self setReleaseID($value)
 * @method mixed getTrackingID()
 * @method self setTrackingID($value)
 * @method mixed getDeliveryAddress()
 * @method self setDeliveryAddress($value)
 * @method mixed getDeliveryLocation()
 * @method self setDeliveryLocation($value)
 * @method mixed getAlternativeDeliveryLocation()
 * @method self setAlternativeDeliveryLocation($value)
 * @method mixed getRequestedDeliveryPeriod()
 * @method self setRequestedDeliveryPeriod($value)
 * @method mixed getPromisedDeliveryPeriod()
 * @method self setPromisedDeliveryPeriod($value)
 * @method mixed getEstimatedDeliveryPeriod()
 * @method self setEstimatedDeliveryPeriod($value)
 * @method mixed getCarrierParty()
 * @method self setCarrierParty($value)
 * @method mixed getDeliveryParty()
 * @method self setDeliveryParty($value)
 * @method mixed getNotifyParty()
 * @method self setNotifyParty($value)
 * @method mixed getDespatch()
 * @method self setDespatch($value)
 * @method mixed getDeliveryTerms()
 * @method self setDeliveryTerms($value)
 * @method mixed getMinimumDeliveryUnit()
 * @method self setMinimumDeliveryUnit($value)
 * @method mixed getMaximumDeliveryUnit()
 * @method self setMaximumDeliveryUnit($value)
 * @method mixed getShipment()
 * @method self setShipment($value)
 */
class DeliveryType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Quantity" => QuantityType::class,
        "cbc:MinimumQuantity" => MinimumQuantityType::class,
        "cbc:MaximumQuantity" => MaximumQuantityType::class,
        "cbc:ActualDeliveryDate" => ActualDeliveryDateType::class,
        "cbc:ActualDeliveryTime" => ActualDeliveryTimeType::class,
        "cbc:LatestDeliveryDate" => LatestDeliveryDateType::class,
        "cbc:LatestDeliveryTime" => LatestDeliveryTimeType::class,
        "cbc:ReleaseID" => ReleaseIDType::class,
        "cbc:TrackingID" => TrackingIDType::class,
        "cac:DeliveryAddress" => AddressType::class,
        "cac:DeliveryLocation" => LocationType::class,
        "cac:AlternativeDeliveryLocation" => LocationType::class,
        "cac:RequestedDeliveryPeriod" => PeriodType::class,
        "cac:PromisedDeliveryPeriod" => PeriodType::class,
        "cac:EstimatedDeliveryPeriod" => PeriodType::class,
        "cac:CarrierParty" => PartyType::class,
        "cac:DeliveryParty" => PartyType::class,
        "cac:NotifyParty" => PartyType::class . "[]",
        "cac:Despatch" => DespatchType::class,
        "cac:DeliveryTerms" => DeliveryTermsType::class . "[]",
        "cac:MinimumDeliveryUnit" => DeliveryUnitType::class,
        "cac:MaximumDeliveryUnit" => DeliveryUnitType::class,
        "cac:Shipment" => ShipmentType::class,
    ];

    protected $minOccurs = [
    ];
}