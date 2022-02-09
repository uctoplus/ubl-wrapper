<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardingCriterionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationExpressionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationExpressionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumImprovementBidType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WeightNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WeightType;

/**
 * Class AwardingCriterionType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method AwardingCriterionTypeCodeType getAwardingCriterionTypeCode()
 * @method self setAwardingCriterionTypeCode(AwardingCriterionTypeCodeType|string $value)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method WeightNumericType getWeightNumeric()
 * @method self setWeightNumeric(WeightNumericType|string $value)
 * @method WeightType getWeight()
 * @method self addWeight(WeightType|string $value)
 * @method self setWeight(WeightType ...$values)
 * @method CalculationExpressionType getCalculationExpression()
 * @method self addCalculationExpression(CalculationExpressionType|string $value)
 * @method self setCalculationExpression(CalculationExpressionType ...$values)
 * @method CalculationExpressionCodeType getCalculationExpressionCode()
 * @method self setCalculationExpressionCode(CalculationExpressionCodeType|string $value)
 * @method MinimumQuantityType getMinimumQuantity()
 * @method self setMinimumQuantity(MinimumQuantityType|string $value)
 * @method MaximumQuantityType getMaximumQuantity()
 * @method self setMaximumQuantity(MaximumQuantityType|string $value)
 * @method MinimumAmountType getMinimumAmount()
 * @method self setMinimumAmount(MinimumAmountType|string $value)
 * @method MaximumAmountType getMaximumAmount()
 * @method self setMaximumAmount(MaximumAmountType|string $value)
 * @method MinimumImprovementBidType getMinimumImprovementBid()
 * @method self addMinimumImprovementBid(MinimumImprovementBidType|string $value)
 * @method self setMinimumImprovementBid(MinimumImprovementBidType ...$values)
 * @method AwardingCriterionType getSubordinateAwardingCriterion()
 * @method self addSubordinateAwardingCriterion(AwardingCriterionType $value)
 * @method self setSubordinateAwardingCriterion(AwardingCriterionType ...$values)
 */
class AwardingCriterionType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:AwardingCriterionTypeCode" => AwardingCriterionTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:WeightNumeric" => WeightNumericType::class,
        "cbc:Weight" => WeightType::class . "[]",
        "cbc:CalculationExpression" => CalculationExpressionType::class . "[]",
        "cbc:CalculationExpressionCode" => CalculationExpressionCodeType::class,
        "cbc:MinimumQuantity" => MinimumQuantityType::class,
        "cbc:MaximumQuantity" => MaximumQuantityType::class,
        "cbc:MinimumAmount" => MinimumAmountType::class,
        "cbc:MaximumAmount" => MaximumAmountType::class,
        "cbc:MinimumImprovementBid" => MinimumImprovementBidType::class . "[]",
        "cac:SubordinateAwardingCriterion" => AwardingCriterionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}