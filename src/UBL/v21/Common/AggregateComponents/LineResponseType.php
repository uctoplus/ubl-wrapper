<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class LineResponseType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method LineReferenceType getLineReference()
 * @method self setLineReference(LineReferenceType $value)
 * @method ResponseType[] getResponse()
 * @method self addResponse(ResponseType $value)
 * @method self setResponse(ResponseType ...$values)
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