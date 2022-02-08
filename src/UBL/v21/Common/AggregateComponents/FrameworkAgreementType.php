<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpectedOperatorQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumOperatorQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\JustificationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FrequencyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TenderRequirementType;

/**
 *
 * @method mixed getExpectedOperatorQuantity()
 * @method self setExpectedOperatorQuantity($value)
 * @method mixed getMaximumOperatorQuantity()
 * @method self setMaximumOperatorQuantity($value)
 * @method mixed getJustification()
 * @method self setJustification($value)
 * @method mixed getFrequency()
 * @method self setFrequency($value)
 * @method mixed getDurationPeriod()
 * @method self setDurationPeriod($value)
 * @method mixed getSubsequentProcessTenderRequirement()
 * @method self setSubsequentProcessTenderRequirement($value)
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