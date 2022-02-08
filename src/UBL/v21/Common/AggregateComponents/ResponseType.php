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
 * @method mixed getReferenceID()
 * @method self setReferenceID($value)
 * @method mixed getResponseCode()
 * @method self setResponseCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getEffectiveDate()
 * @method self setEffectiveDate($value)
 * @method mixed getEffectiveTime()
 * @method self setEffectiveTime($value)
 * @method mixed getStatus()
 * @method self addStatus($value)
 * @method self setStatus($value)
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