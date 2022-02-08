<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;

/**
 *
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getTemplateDocumentReference()
 * @method self setTemplateDocumentReference($value)
 */
class TenderRequirementType extends AggregateComponent
{
    protected $casts = [
        "cbc:Name" => NameType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:TemplateDocumentReference" => DocumentReferenceType::class,
    ];

    protected $minOccurs = [
        "cbc:Name" => 1,
    ];
}