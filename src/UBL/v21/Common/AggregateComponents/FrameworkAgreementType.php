<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpectedOperatorQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FrequencyType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\JustificationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumOperatorQuantityType;

/**
 * Class FrameworkAgreementType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ExpectedOperatorQuantityType getExpectedOperatorQuantity()
 * @method self setExpectedOperatorQuantity(ExpectedOperatorQuantityType|string $value)
 * @method MaximumOperatorQuantityType getMaximumOperatorQuantity()
 * @method self setMaximumOperatorQuantity(MaximumOperatorQuantityType|string $value)
 * @method JustificationType getJustification()
 * @method self addJustification(JustificationType|string $value)
 * @method self setJustification(JustificationType ...$values)
 * @method FrequencyType getFrequency()
 * @method self addFrequency(FrequencyType|string $value)
 * @method self setFrequency(FrequencyType ...$values)
 * @method PeriodType getDurationPeriod()
 * @method self setDurationPeriod(PeriodType $value)
 * @method TenderRequirementType getSubsequentProcessTenderRequirement()
 * @method self addSubsequentProcessTenderRequirement(TenderRequirementType $value)
 * @method self setSubsequentProcessTenderRequirement(TenderRequirementType ...$values)
 */
class FrameworkAgreementType extends AggregateComponent
{
    protected $casts = [
        "cbc:ExpectedOperatorQuantity" => ExpectedOperatorQuantityType::class,
        "cbc:MaximumOperatorQuantity" => MaximumOperatorQuantityType::class,
        "cbc:Justification" => JustificationType::class . "[]",
        "cbc:Frequency" => FrequencyType::class . "[]",
        "cac:DurationPeriod" => PeriodType::class,
        "cac:SubsequentProcessTenderRequirement" => TenderRequirementType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}