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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getRequestedDespatchDate()
 * @method self setRequestedDespatchDate($value)
 * @method mixed getRequestedDespatchTime()
 * @method self setRequestedDespatchTime($value)
 * @method mixed getEstimatedDespatchDate()
 * @method self setEstimatedDespatchDate($value)
 * @method mixed getEstimatedDespatchTime()
 * @method self setEstimatedDespatchTime($value)
 * @method mixed getActualDespatchDate()
 * @method self setActualDespatchDate($value)
 * @method mixed getActualDespatchTime()
 * @method self setActualDespatchTime($value)
 * @method mixed getGuaranteedDespatchDate()
 * @method self setGuaranteedDespatchDate($value)
 * @method mixed getGuaranteedDespatchTime()
 * @method self setGuaranteedDespatchTime($value)
 * @method mixed getReleaseID()
 * @method self setReleaseID($value)
 * @method mixed getInstructions()
 * @method self addInstructions($value)
 * @method self setInstructions($value)
 * @method mixed getDespatchAddress()
 * @method self setDespatchAddress($value)
 * @method mixed getDespatchLocation()
 * @method self setDespatchLocation($value)
 * @method mixed getDespatchParty()
 * @method self setDespatchParty($value)
 * @method mixed getCarrierParty()
 * @method self setCarrierParty($value)
 * @method mixed getNotifyParty()
 * @method self addNotifyParty($value)
 * @method self setNotifyParty($value)
 * @method mixed getContact()
 * @method self setContact($value)
 * @method mixed getEstimatedDespatchPeriod()
 * @method self setEstimatedDespatchPeriod($value)
 * @method mixed getRequestedDespatchPeriod()
 * @method self setRequestedDespatchPeriod($value)
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