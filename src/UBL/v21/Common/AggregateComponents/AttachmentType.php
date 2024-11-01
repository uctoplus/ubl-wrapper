<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EmbeddedDocumentBinaryObjectType;

/**
 * Class AttachmentType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method EmbeddedDocumentBinaryObjectType getEmbeddedDocumentBinaryObject()
 * @method self setEmbeddedDocumentBinaryObject(EmbeddedDocumentBinaryObjectType|string $value)
 * @method ExternalReferenceType getExternalReference()
 * @method self setExternalReference(ExternalReferenceType $value)
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