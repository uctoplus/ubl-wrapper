<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConditionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IndicationIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReliabilityPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StatusReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StatusReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TextType;

/**
 * Class StatusType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getConditionCode()
 * @method self setConditionCode($value)
 * @method mixed getReferenceDate()
 * @method self setReferenceDate($value)
 * @method mixed getReferenceTime()
 * @method self setReferenceTime($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getStatusReasonCode()
 * @method self setStatusReasonCode($value)
 * @method mixed getStatusReason()
 * @method self addStatusReason($value)
 * @method self setStatusReason($value)
 * @method mixed getSequenceID()
 * @method self setSequenceID($value)
 * @method mixed getText()
 * @method self addText($value)
 * @method self setText($value)
 * @method mixed getIndicationIndicator()
 * @method self setIndicationIndicator($value)
 * @method mixed getPercent()
 * @method self setPercent($value)
 * @method mixed getReliabilityPercent()
 * @method self setReliabilityPercent($value)
 * @method mixed getCondition()
 * @method self addCondition($value)
 * @method self setCondition($value)
 */
class StatusType extends AggregateComponent
{
    protected $casts = [
        "cbc:ConditionCode" => ConditionCodeType::class,
        "cbc:ReferenceDate" => ReferenceDateType::class,
        "cbc:ReferenceTime" => ReferenceTimeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:StatusReasonCode" => StatusReasonCodeType::class,
        "cbc:StatusReason" => StatusReasonType::class . "[]",
        "cbc:SequenceID" => SequenceIDType::class,
        "cbc:Text" => TextType::class . "[]",
        "cbc:IndicationIndicator" => IndicationIndicatorType::class,
        "cbc:Percent" => PercentType::class,
        "cbc:ReliabilityPercent" => ReliabilityPercentType::class,
        "cac:Condition" => ConditionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}