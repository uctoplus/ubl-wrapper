<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DeclarationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class DeclarationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method NameType[] getName()
 * @method self addName(NameType|string $value)
 * @method self setName(NameType ...$values)
 * @method DeclarationTypeCodeType getDeclarationTypeCode()
 * @method self setDeclarationTypeCode(DeclarationTypeCodeType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method EvidenceSuppliedType[] getEvidenceSupplied()
 * @method self addEvidenceSupplied(EvidenceSuppliedType $value)
 * @method self setEvidenceSupplied(EvidenceSuppliedType ...$values)
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