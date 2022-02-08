<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class LineResponseType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getLineReference()
 * @method self setLineReference($value)
 * @method mixed getResponse()
 * @method self addResponse($value)
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