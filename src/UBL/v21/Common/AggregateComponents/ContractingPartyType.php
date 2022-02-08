<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BuyerProfileURIType;

/**
 * Class ContractingPartyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getBuyerProfileURI()
 * @method self setBuyerProfileURI($value)
 * @method mixed getContractingPartyType()
 * @method self addContractingPartyType($value)
 * @method self setContractingPartyType($value)
 * @method mixed getContractingActivity()
 * @method self addContractingActivity($value)
 * @method self setContractingActivity($value)
 * @method mixed getParty()
 * @method self setParty($value)
 */
class ContractingPartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:BuyerProfileURI" => BuyerProfileURIType::class,
        "cac:ContractingPartyType" => ContractingPartyTypeType::class . "[]",
        "cac:ContractingActivity" => ContractingActivityType::class . "[]",
        "cac:Party" => PartyType::class,
    ];

    protected $minOccurs = [
        "cac:Party" => 1,
    ];
}