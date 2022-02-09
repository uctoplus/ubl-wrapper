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
 * @method BuyerProfileURIType getBuyerProfileURI()
 * @method self setBuyerProfileURI(BuyerProfileURIType|string $value)
 * @method ContractingPartyTypeType getContractingPartyType()
 * @method self addContractingPartyType(ContractingPartyTypeType $value)
 * @method self setContractingPartyType(ContractingPartyTypeType ...$values)
 * @method ContractingActivityType getContractingActivity()
 * @method self addContractingActivity(ContractingActivityType $value)
 * @method self setContractingActivity(ContractingActivityType ...$values)
 * @method PartyType getParty()
 * @method self setParty(PartyType $value)
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