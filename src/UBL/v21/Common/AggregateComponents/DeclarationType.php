<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclarationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class DeclarationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getName()
 * @method self addName($value)
 * @method self setName($value)
 * @method mixed getDeclarationTypeCode()
 * @method self setDeclarationTypeCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getEvidenceSupplied()
 * @method self addEvidenceSupplied($value)
 * @method self setEvidenceSupplied($value)
 */
class DeclarationType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class . "[]",
        "cbc:DeclarationTypeCode" => DeclarationTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:EvidenceSupplied" => EvidenceSuppliedType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}