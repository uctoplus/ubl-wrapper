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
 * @method mixed getActivityTypeCode()
 * @method self setActivityTypeCode($value)
 * @method mixed getActivityType()
 * @method self setActivityType($value)
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