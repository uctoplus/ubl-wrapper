<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ResponseType;

/**
 *
 * @method mixed getLineReference()
 * @method self setLineReference($value)
 * @method mixed getResponse()
 * @method self setResponse($value)
 */
class LineResponseType extends AggregateComponent
{
    protected $casts = [
        "cac:LineReference" => LineReferenceType::class,
        "cac:Response" => ResponseType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:LineReference" => 1,
        "cac:Response" => 1,
    ];
}