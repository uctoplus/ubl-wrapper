<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PartyTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PartyTypeType;

/**
 * Class ContractingPartyTypeType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getPartyTypeCode()
 * @method self setPartyTypeCode($value)
 * @method mixed getPartyType()
 * @method self setPartyType($value)
 */
class ContractingPartyTypeType extends AggregateComponent
{
    protected $casts = [
        "cbc:PartyTypeCode" => PartyTypeCodeType::class,
        "cbc:PartyType" => PartyTypeType::class,
    ];

    protected $minOccurs = [
    ];
}