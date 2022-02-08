<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EvaluationCriterionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThresholdAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThresholdQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpressionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpressionType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EvidenceType;

/**
 *
 * @method mixed getEvaluationCriterionTypeCode()
 * @method self setEvaluationCriterionTypeCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getThresholdAmount()
 * @method self setThresholdAmount($value)
 * @method mixed getThresholdQuantity()
 * @method self setThresholdQuantity($value)
 * @method mixed getExpressionCode()
 * @method self setExpressionCode($value)
 * @method mixed getExpression()
 * @method self setExpression($value)
 * @method mixed getDurationPeriod()
 * @method self setDurationPeriod($value)
 * @method mixed getSuggestedEvidence()
 * @method self setSuggestedEvidence($value)
 */
class EvaluationCriterionType extends AggregateComponent
{
    protected $casts = [
        "cbc:EvaluationCriterionTypeCode" => EvaluationCriterionTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:ThresholdAmount" => ThresholdAmountType::class,
        "cbc:ThresholdQuantity" => ThresholdQuantityType::class,
        "cbc:ExpressionCode" => ExpressionCodeType::class,
        "cbc:Expression" => ExpressionType::class . "[]",
        "cac:DurationPeriod" => PeriodType::class,
        "cac:SuggestedEvidence" => EvidenceType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}