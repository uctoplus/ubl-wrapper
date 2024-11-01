<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EvaluationCriterionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpressionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpressionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThresholdAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ThresholdQuantityType;

/**
 * Class EvaluationCriterionType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method EvaluationCriterionTypeCodeType getEvaluationCriterionTypeCode()
 * @method self setEvaluationCriterionTypeCode(EvaluationCriterionTypeCodeType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method ThresholdAmountType getThresholdAmount()
 * @method self setThresholdAmount(ThresholdAmountType|string $value)
 * @method ThresholdQuantityType getThresholdQuantity()
 * @method self setThresholdQuantity(ThresholdQuantityType|string $value)
 * @method ExpressionCodeType getExpressionCode()
 * @method self setExpressionCode(ExpressionCodeType|string $value)
 * @method ExpressionType[] getExpression()
 * @method self addExpression(ExpressionType|string $value)
 * @method self setExpression(ExpressionType ...$values)
 * @method PeriodType getDurationPeriod()
 * @method self setDurationPeriod(PeriodType $value)
 * @method EvidenceType[] getSuggestedEvidence()
 * @method self addSuggestedEvidence(EvidenceType $value)
 * @method self setSuggestedEvidence(EvidenceType ...$values)
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