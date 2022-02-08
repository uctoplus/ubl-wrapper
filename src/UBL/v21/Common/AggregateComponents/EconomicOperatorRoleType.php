<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RoleCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RoleDescriptionType;

/**
 * Class EconomicOperatorRoleType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getRoleCode()
 * @method self setRoleCode($value)
 * @method mixed getRoleDescription()
 * @method self addRoleDescription($value)
 * @method self setRoleDescription($value)
 */
class EconomicOperatorRoleType extends AggregateComponent
{
    protected $casts = [
        "cbc:RoleCode" => RoleCodeType::class,
        "cbc:RoleDescription" => RoleDescriptionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}