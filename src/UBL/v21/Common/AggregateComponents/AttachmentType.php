<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmbeddedDocumentBinaryObjectType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ExternalReferenceType;

/**
 *
 * @method mixed getEmbeddedDocumentBinaryObject()
 * @method self setEmbeddedDocumentBinaryObject($value)
 * @method mixed getExternalReference()
 * @method self setExternalReference($value)
 */
class AttachmentType extends AggregateComponent
{
    protected $casts = [
        "cbc:EmbeddedDocumentBinaryObject" => EmbeddedDocumentBinaryObjectType::class,
        "cac:ExternalReference" => ExternalReferenceType::class,
    ];

    protected $minOccurs = [
    ];
}