<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContentType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getContent()
 * @method self setContent($value)
 */
class ClauseType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Content" => ContentType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}