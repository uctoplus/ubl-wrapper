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
 * @method RoleCodeType getRoleCode()
 * @method self setRoleCode(RoleCodeType|string $value)
 * @method RoleDescriptionType getRoleDescription()
 * @method self addRoleDescription(RoleDescriptionType|string $value)
 * @method self setRoleDescription(RoleDescriptionType ...$values)
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