<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RankType;

/**
 * Class WinningPartyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method RankType getRank()
 * @method self setRank(RankType|string $value)
 * @method PartyType getParty()
 * @method self setParty(PartyType $value)
 */
class WinningPartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:Rank" => RankType::class,
        "cac:Party" => PartyType::class,
    ];

    protected $minOccurs = [
        "cac:Party" => 1,
    ];
}