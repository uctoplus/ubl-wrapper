<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;

/**
 * Class PowerOfAttorneyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method PartyType getNotaryParty()
 * @method self setNotaryParty(PartyType $value)
 * @method PartyType getAgentParty()
 * @method self setAgentParty(PartyType $value)
 * @method PartyType[] getWitnessParty()
 * @method self addWitnessParty(PartyType $value)
 * @method self setWitnessParty(PartyType ...$values)
 * @method DocumentReferenceType[] getMandateDocumentReference()
 * @method self addMandateDocumentReference(DocumentReferenceType $value)
 * @method self setMandateDocumentReference(DocumentReferenceType ...$values)
 */
class PowerOfAttorneyType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:NotaryParty" => PartyType::class,
        "cac:AgentParty" => PartyType::class,
        "cac:WitnessParty" => PartyType::class . "[]",
        "cac:MandateDocumentReference" => DocumentReferenceType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:AgentParty" => 1,
    ];
}