<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AnnualAverageAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PartyCapacityAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTaskAmountType;

/**
 * Class CompletedTaskType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getAnnualAverageAmount()
 * @method self setAnnualAverageAmount($value)
 * @method mixed getTotalTaskAmount()
 * @method self setTotalTaskAmount($value)
 * @method mixed getPartyCapacityAmount()
 * @method self setPartyCapacityAmount($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getEvidenceSupplied()
 * @method self addEvidenceSupplied($value)
 * @method self setEvidenceSupplied($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
 * @method mixed getRecipientCustomerParty()
 * @method self setRecipientCustomerParty($value)
 */
class CompletedTaskType extends AggregateComponent
{
    protected $casts = [
        "cbc:AnnualAverageAmount" => AnnualAverageAmountType::class,
        "cbc:TotalTaskAmount" => TotalTaskAmountType::class,
        "cbc:PartyCapacityAmount" => PartyCapacityAmountType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:EvidenceSupplied" => EvidenceSuppliedType::class . "[]",
        "cac:Period" => PeriodType::class,
        "cac:RecipientCustomerParty" => CustomerPartyType::class,
    ];

    protected $minOccurs = [
    ];
}