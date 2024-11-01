<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubcontractingConditionsCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UnknownPriceIndicatorType;

/**
 * Class SubcontractTermsType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method RateType getRate()
 * @method self setRate(RateType|string $value)
 * @method UnknownPriceIndicatorType getUnknownPriceIndicator()
 * @method self setUnknownPriceIndicator(UnknownPriceIndicatorType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method SubcontractingConditionsCodeType getSubcontractingConditionsCode()
 * @method self setSubcontractingConditionsCode(SubcontractingConditionsCodeType|string $value)
 * @method MaximumPercentType getMaximumPercent()
 * @method self setMaximumPercent(MaximumPercentType|string $value)
 * @method MinimumPercentType getMinimumPercent()
 * @method self setMinimumPercent(MinimumPercentType|string $value)
 */
class SubcontractTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:Rate" => RateType::class,
        "cbc:UnknownPriceIndicator" => UnknownPriceIndicatorType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:Amount" => AmountType::class,
        "cbc:SubcontractingConditionsCode" => SubcontractingConditionsCodeType::class,
        "cbc:MaximumPercent" => MaximumPercentType::class,
        "cbc:MinimumPercent" => MinimumPercentType::class,
    ];

    protected $minOccurs = [
    ];
}