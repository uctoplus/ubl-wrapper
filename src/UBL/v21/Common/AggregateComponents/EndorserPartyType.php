<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RoleCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContactType;

/**
 *
 * @method mixed getRoleCode()
 * @method self setRoleCode($value)
 * @method mixed getSequenceNumeric()
 * @method self setSequenceNumeric($value)
 * @method mixed getParty()
 * @method self setParty($value)
 * @method mixed getSignatoryContact()
 * @method self setSignatoryContact($value)
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