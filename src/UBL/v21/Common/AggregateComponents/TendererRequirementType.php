<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LegalReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TendererRequirementTypeCodeType;

/**
 * Class TendererRequirementType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NameType getName()
 * @method self addName(NameType|string $value)
 * @method self setName(NameType ...$values)
 * @method TendererRequirementTypeCodeType getTendererRequirementTypeCode()
 * @method self setTendererRequirementTypeCode(TendererRequirementTypeCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method LegalReferenceType getLegalReference()
 * @method self setLegalReference(LegalReferenceType|string $value)
 * @method EvidenceType getSuggestedEvidence()
 * @method self addSuggestedEvidence(EvidenceType $value)
 * @method self setSuggestedEvidence(EvidenceType ...$values)
 */
class TendererRequirementType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class . "[]",
        "cbc:TendererRequirementTypeCode" => TendererRequirementTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:LegalReference" => LegalReferenceType::class,
        "cac:SuggestedEvidence" => EvidenceType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}