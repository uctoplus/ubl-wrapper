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
 * @method mixed getName()
 * @method self addName($value)
 * @method self setName($value)
 * @method mixed getTendererRequirementTypeCode()
 * @method self setTendererRequirementTypeCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getLegalReference()
 * @method self setLegalReference($value)
 * @method mixed getSuggestedEvidence()
 * @method self addSuggestedEvidence($value)
 * @method self setSuggestedEvidence($value)
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