<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CandidateStatementType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EvidenceTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class EvidenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getEvidenceTypeCode()
 * @method self setEvidenceTypeCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getCandidateStatement()
 * @method self addCandidateStatement($value)
 * @method self setCandidateStatement($value)
 * @method mixed getEvidenceIssuingParty()
 * @method self setEvidenceIssuingParty($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getLanguage()
 * @method self setLanguage($value)
 */
class EvidenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:EvidenceTypeCode" => EvidenceTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:CandidateStatement" => CandidateStatementType::class . "[]",
        "cac:EvidenceIssuingParty" => PartyType::class,
        "cac:DocumentReference" => DocumentReferenceType::class,
        "cac:Language" => LanguageType::class,
    ];

    protected $minOccurs = [
    ];
}