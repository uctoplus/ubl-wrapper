<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PartecipationPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;

/**
 *
 * @method mixed getPartecipationPercent()
 * @method self setPartecipationPercent($value)
 * @method mixed getParty()
 * @method self setParty($value)
 */
class ShareholderPartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:PartecipationPercent" => PartecipationPercentType::class,
        "cac:Party" => PartyType::class,
    ];

    protected $minOccurs = [
    ];
}