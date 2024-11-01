<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualDeliveryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestDeliveryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LatestDeliveryTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReleaseIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TrackingIDType;

/**
 * Class DeliveryType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method MinimumQuantityType getMinimumQuantity()
 * @method self setMinimumQuantity(MinimumQuantityType|string $value)
 * @method MaximumQuantityType getMaximumQuantity()
 * @method self setMaximumQuantity(MaximumQuantityType|string $value)
 * @method ActualDeliveryDateType getActualDeliveryDate()
 * @method self setActualDeliveryDate(ActualDeliveryDateType|string $value)
 * @method ActualDeliveryTimeType getActualDeliveryTime()
 * @method self setActualDeliveryTime(ActualDeliveryTimeType|string $value)
 * @method LatestDeliveryDateType getLatestDeliveryDate()
 * @method self setLatestDeliveryDate(LatestDeliveryDateType|string $value)
 * @method LatestDeliveryTimeType getLatestDeliveryTime()
 * @method self setLatestDeliveryTime(LatestDeliveryTimeType|string $value)
 * @method ReleaseIDType getReleaseID()
 * @method self setReleaseID(ReleaseIDType|string $value)
 * @method TrackingIDType getTrackingID()
 * @method self setTrackingID(TrackingIDType|string $value)
 * @method AddressType getDeliveryAddress()
 * @method self setDeliveryAddress(AddressType $value)
 * @method LocationType getDeliveryLocation()
 * @method self setDeliveryLocation(LocationType $value)
 * @method LocationType getAlternativeDeliveryLocation()
 * @method self setAlternativeDeliveryLocation(LocationType $value)
 * @method PeriodType getRequestedDeliveryPeriod()
 * @method self setRequestedDeliveryPeriod(PeriodType $value)
 * @method PeriodType getPromisedDeliveryPeriod()
 * @method self setPromisedDeliveryPeriod(PeriodType $value)
 * @method PeriodType getEstimatedDeliveryPeriod()
 * @method self setEstimatedDeliveryPeriod(PeriodType $value)
 * @method PartyType getCarrierParty()
 * @method self setCarrierParty(PartyType $value)
 * @method PartyType getDeliveryParty()
 * @method self setDeliveryParty(PartyType $value)
 * @method PartyType[] getNotifyParty()
 * @method self addNotifyParty(PartyType $value)
 * @method self setNotifyParty(PartyType ...$values)
 * @method DespatchType getDespatch()
 * @method self setDespatch(DespatchType $value)
 * @method DeliveryTermsType[] getDeliveryTerms()
 * @method self addDeliveryTerms(DeliveryTermsType $value)
 * @method self setDeliveryTerms(DeliveryTermsType ...$values)
 * @method DeliveryUnitType getMinimumDeliveryUnit()
 * @method self setMinimumDeliveryUnit(DeliveryUnitType $value)
 * @method DeliveryUnitType getMaximumDeliveryUnit()
 * @method self setMaximumDeliveryUnit(DeliveryUnitType $value)
 * @method ShipmentType getShipment()
 * @method self setShipment(ShipmentType $value)
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