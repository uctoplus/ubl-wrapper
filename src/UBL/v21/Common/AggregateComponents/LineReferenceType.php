<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class LineReferenceType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method LineIDType getLineID()
 * @method self setLineID(LineIDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method LineStatusCodeType getLineStatusCode()
 * @method self setLineStatusCode(LineStatusCodeType|string $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self setDocumentReference(DocumentReferenceType $value)
 */
class LineReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:LineID" => LineIDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:LineStatusCode" => LineStatusCodeType::class,
        "cac:DocumentReference" => DocumentReferenceType::class,
    ];

    protected $minOccurs = [
        "cbc:LineID" => 1,
    ];
}