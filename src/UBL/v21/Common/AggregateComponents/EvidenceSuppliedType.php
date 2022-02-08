<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class EvidenceSuppliedType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 */
class EvidenceSuppliedType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}