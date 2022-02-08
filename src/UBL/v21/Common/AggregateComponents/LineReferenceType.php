<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class LineReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getLineID()
 * @method self setLineID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getLineStatusCode()
 * @method self setLineStatusCode($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
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