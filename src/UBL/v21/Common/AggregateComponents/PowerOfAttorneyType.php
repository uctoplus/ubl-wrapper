<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getIssueTime()
 * @method self setIssueTime($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getNotaryParty()
 * @method self setNotaryParty($value)
 * @method mixed getAgentParty()
 * @method self setAgentParty($value)
 * @method mixed getWitnessParty()
 * @method self setWitnessParty($value)
 * @method mixed getMandateDocumentReference()
 * @method self setMandateDocumentReference($value)
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