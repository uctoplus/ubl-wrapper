<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EffectiveDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EffectiveTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ResponseCodeType;

/**
 * Class ResponseType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ReferenceIDType getReferenceID()
 * @method self setReferenceID(ReferenceIDType|string $value)
 * @method ResponseCodeType getResponseCode()
 * @method self setResponseCode(ResponseCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method EffectiveDateType getEffectiveDate()
 * @method self setEffectiveDate(EffectiveDateType|string $value)
 * @method EffectiveTimeType getEffectiveTime()
 * @method self setEffectiveTime(EffectiveTimeType|string $value)
 * @method StatusType getStatus()
 * @method self addStatus(StatusType $value)
 * @method self setStatus(StatusType ...$values)
 */
class ResponseType extends AggregateComponent
{
    protected $casts = [
        "cbc:ReferenceID" => ReferenceIDType::class,
        "cbc:ResponseCode" => ResponseCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:EffectiveDate" => EffectiveDateType::class,
        "cbc:EffectiveTime" => EffectiveTimeType::class,
        "cac:Status" => StatusType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}