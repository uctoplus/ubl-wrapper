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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method EvidenceTypeCodeType getEvidenceTypeCode()
 * @method self setEvidenceTypeCode(EvidenceTypeCodeType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method CandidateStatementType[] getCandidateStatement()
 * @method self addCandidateStatement(CandidateStatementType|string $value)
 * @method self setCandidateStatement(CandidateStatementType ...$values)
 * @method PartyType getEvidenceIssuingParty()
 * @method self setEvidenceIssuingParty(PartyType $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self setDocumentReference(DocumentReferenceType $value)
 * @method LanguageType getLanguage()
 * @method self setLanguage(LanguageType $value)
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