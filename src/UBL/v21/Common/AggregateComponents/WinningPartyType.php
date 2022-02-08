<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RankType;

/**
 * Class WinningPartyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getRank()
 * @method self setRank($value)
 * @method mixed getParty()
 * @method self setParty($value)
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