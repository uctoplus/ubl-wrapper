<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardingCriterionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WeightNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WeightType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationExpressionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CalculationExpressionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumImprovementBidType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getAwardingCriterionTypeCode()
 * @method self setAwardingCriterionTypeCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getWeightNumeric()
 * @method self setWeightNumeric($value)
 * @method mixed getWeight()
 * @method self setWeight($value)
 * @method mixed getCalculationExpression()
 * @method self setCalculationExpression($value)
 * @method mixed getCalculationExpressionCode()
 * @method self setCalculationExpressionCode($value)
 * @method mixed getMinimumQuantity()
 * @method self setMinimumQuantity($value)
 * @method mixed getMaximumQuantity()
 * @method self setMaximumQuantity($value)
 * @method mixed getMinimumAmount()
 * @method self setMinimumAmount($value)
 * @method mixed getMaximumAmount()
 * @method self setMaximumAmount($value)
 * @method mixed getMinimumImprovementBid()
 * @method self setMinimumImprovementBid($value)
 * @method mixed getSubordinateAwardingCriterion()
 * @method self setSubordinateAwardingCriterion($value)
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