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
 * @method AnnualAverageAmountType getAnnualAverageAmount()
 * @method self setAnnualAverageAmount(AnnualAverageAmountType|string $value)
 * @method TotalTaskAmountType getTotalTaskAmount()
 * @method self setTotalTaskAmount(TotalTaskAmountType|string $value)
 * @method PartyCapacityAmountType getPartyCapacityAmount()
 * @method self setPartyCapacityAmount(PartyCapacityAmountType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method EvidenceSuppliedType getEvidenceSupplied()
 * @method self addEvidenceSupplied(EvidenceSuppliedType $value)
 * @method self setEvidenceSupplied(EvidenceSuppliedType ...$values)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
 * @method CustomerPartyType getRecipientCustomerParty()
 * @method self setRecipientCustomerParty(CustomerPartyType $value)
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