<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RoleCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumericType;

/**
 * Class EndorserPartyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method RoleCodeType getRoleCode()
 * @method self setRoleCode(RoleCodeType|string $value)
 * @method SequenceNumericType getSequenceNumeric()
 * @method self setSequenceNumeric(SequenceNumericType|string $value)
 * @method PartyType getParty()
 * @method self setParty(PartyType $value)
 * @method ContactType getSignatoryContact()
 * @method self setSignatoryContact(ContactType $value)
 */
class EndorserPartyType extends AggregateComponent
{
    protected $casts = [
        "cbc:RoleCode" => RoleCodeType::class,
        "cbc:SequenceNumeric" => SequenceNumericType::class,
        "cac:Party" => PartyType::class,
        "cac:SignatoryContact" => ContactType::class,
    ];

    protected $minOccurs = [
        "cbc:RoleCode" => 1,
        "cbc:SequenceNumeric" => 1,
        "cac:Party" => 1,
        "cac:SignatoryContact" => 1,
    ];
}