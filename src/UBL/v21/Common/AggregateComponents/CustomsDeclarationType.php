<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getIssuerParty()
 * @method self setIssuerParty($value)
 */
class CustomsDeclarationType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cac:IssuerParty" => PartyType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}