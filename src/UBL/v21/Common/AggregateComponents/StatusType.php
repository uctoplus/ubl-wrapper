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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ConditionCodeType getConditionCode()
 * @method self setConditionCode(ConditionCodeType|string $value)
 * @method ReferenceDateType getReferenceDate()
 * @method self setReferenceDate(ReferenceDateType|string $value)
 * @method ReferenceTimeType getReferenceTime()
 * @method self setReferenceTime(ReferenceTimeType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method StatusReasonCodeType getStatusReasonCode()
 * @method self setStatusReasonCode(StatusReasonCodeType|string $value)
 * @method StatusReasonType[] getStatusReason()
 * @method self addStatusReason(StatusReasonType|string $value)
 * @method self setStatusReason(StatusReasonType ...$values)
 * @method SequenceIDType getSequenceID()
 * @method self setSequenceID(SequenceIDType|string $value)
 * @method TextType[] getText()
 * @method self addText(TextType|string $value)
 * @method self setText(TextType ...$values)
 * @method IndicationIndicatorType getIndicationIndicator()
 * @method self setIndicationIndicator(IndicationIndicatorType|string $value)
 * @method PercentType getPercent()
 * @method self setPercent(PercentType|string $value)
 * @method ReliabilityPercentType getReliabilityPercent()
 * @method self setReliabilityPercent(ReliabilityPercentType|string $value)
 * @method ConditionType[] getCondition()
 * @method self addCondition(ConditionType $value)
 * @method self setCondition(ConditionType ...$values)
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