<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class CustomsDeclarationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method PartyType getIssuerParty()
 * @method self setIssuerParty(PartyType $value)
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