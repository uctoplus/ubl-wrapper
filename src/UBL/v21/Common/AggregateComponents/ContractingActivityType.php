<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActivityTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActivityTypeType;

/**
 * Class ContractingActivityType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ActivityTypeCodeType getActivityTypeCode()
 * @method self setActivityTypeCode(ActivityTypeCodeType|string $value)
 * @method ActivityTypeType getActivityType()
 * @method self setActivityType(ActivityTypeType|string $value)
 */
class ContractingActivityType extends AggregateComponent
{
    protected $casts = [
        "cbc:ActivityTypeCode" => ActivityTypeCodeType::class,
        "cbc:ActivityType" => ActivityTypeType::class,
    ];

    protected $minOccurs = [
    ];
}