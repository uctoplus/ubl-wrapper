<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualDespatchDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualDespatchTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedDespatchDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedDespatchTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GuaranteedDespatchDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GuaranteedDespatchTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstructionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReleaseIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequestedDespatchDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequestedDespatchTimeType;

/**
 * Class DespatchType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method RequestedDespatchDateType getRequestedDespatchDate()
 * @method self setRequestedDespatchDate(RequestedDespatchDateType|string $value)
 * @method RequestedDespatchTimeType getRequestedDespatchTime()
 * @method self setRequestedDespatchTime(RequestedDespatchTimeType|string $value)
 * @method EstimatedDespatchDateType getEstimatedDespatchDate()
 * @method self setEstimatedDespatchDate(EstimatedDespatchDateType|string $value)
 * @method EstimatedDespatchTimeType getEstimatedDespatchTime()
 * @method self setEstimatedDespatchTime(EstimatedDespatchTimeType|string $value)
 * @method ActualDespatchDateType getActualDespatchDate()
 * @method self setActualDespatchDate(ActualDespatchDateType|string $value)
 * @method ActualDespatchTimeType getActualDespatchTime()
 * @method self setActualDespatchTime(ActualDespatchTimeType|string $value)
 * @method GuaranteedDespatchDateType getGuaranteedDespatchDate()
 * @method self setGuaranteedDespatchDate(GuaranteedDespatchDateType|string $value)
 * @method GuaranteedDespatchTimeType getGuaranteedDespatchTime()
 * @method self setGuaranteedDespatchTime(GuaranteedDespatchTimeType|string $value)
 * @method ReleaseIDType getReleaseID()
 * @method self setReleaseID(ReleaseIDType|string $value)
 * @method InstructionsType[] getInstructions()
 * @method self addInstructions(InstructionsType|string $value)
 * @method self setInstructions(InstructionsType ...$values)
 * @method AddressType getDespatchAddress()
 * @method self setDespatchAddress(AddressType $value)
 * @method LocationType getDespatchLocation()
 * @method self setDespatchLocation(LocationType $value)
 * @method PartyType getDespatchParty()
 * @method self setDespatchParty(PartyType $value)
 * @method PartyType getCarrierParty()
 * @method self setCarrierParty(PartyType $value)
 * @method PartyType[] getNotifyParty()
 * @method self addNotifyParty(PartyType $value)
 * @method self setNotifyParty(PartyType ...$values)
 * @method ContactType getContact()
 * @method self setContact(ContactType $value)
 * @method PeriodType getEstimatedDespatchPeriod()
 * @method self setEstimatedDespatchPeriod(PeriodType $value)
 * @method PeriodType getRequestedDespatchPeriod()
 * @method self setRequestedDespatchPeriod(PeriodType $value)
 */
class DespatchType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:RequestedDespatchDate" => RequestedDespatchDateType::class,
        "cbc:RequestedDespatchTime" => RequestedDespatchTimeType::class,
        "cbc:EstimatedDespatchDate" => EstimatedDespatchDateType::class,
        "cbc:EstimatedDespatchTime" => EstimatedDespatchTimeType::class,
        "cbc:ActualDespatchDate" => ActualDespatchDateType::class,
        "cbc:ActualDespatchTime" => ActualDespatchTimeType::class,
        "cbc:GuaranteedDespatchDate" => GuaranteedDespatchDateType::class,
        "cbc:GuaranteedDespatchTime" => GuaranteedDespatchTimeType::class,
        "cbc:ReleaseID" => ReleaseIDType::class,
        "cbc:Instructions" => InstructionsType::class . "[]",
        "cac:DespatchAddress" => AddressType::class,
        "cac:DespatchLocation" => LocationType::class,
        "cac:DespatchParty" => PartyType::class,
        "cac:CarrierParty" => PartyType::class,
        "cac:NotifyParty" => PartyType::class . "[]",
        "cac:Contact" => ContactType::class,
        "cac:EstimatedDespatchPeriod" => PeriodType::class,
        "cac:RequestedDespatchPeriod" => PeriodType::class,
    ];

    protected $minOccurs = [
    ];
}