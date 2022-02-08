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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getRate()
 * @method self setRate($value)
 * @method mixed getUnknownPriceIndicator()
 * @method self setUnknownPriceIndicator($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getSubcontractingConditionsCode()
 * @method self setSubcontractingConditionsCode($value)
 * @method mixed getMaximumPercent()
 * @method self setMaximumPercent($value)
 * @method mixed getMinimumPercent()
 * @method self setMinimumPercent($value)
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