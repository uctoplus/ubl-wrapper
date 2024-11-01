<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumNumberNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumNumberNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OptionsDescriptionType;

/**
 * Class ContractExtensionType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method OptionsDescriptionType[] getOptionsDescription()
 * @method self addOptionsDescription(OptionsDescriptionType|string $value)
 * @method self setOptionsDescription(OptionsDescriptionType ...$values)
 * @method MinimumNumberNumericType getMinimumNumberNumeric()
 * @method self setMinimumNumberNumeric(MinimumNumberNumericType|string $value)
 * @method MaximumNumberNumericType getMaximumNumberNumeric()
 * @method self setMaximumNumberNumeric(MaximumNumberNumericType|string $value)
 * @method PeriodType getOptionValidityPeriod()
 * @method self setOptionValidityPeriod(PeriodType $value)
 * @method RenewalType[] getRenewal()
 * @method self addRenewal(RenewalType $value)
 * @method self setRenewal(RenewalType ...$values)
 */
class ContractExtensionType extends AggregateComponent
{
    protected $casts = [
        "cbc:OptionsDescription" => OptionsDescriptionType::class . "[]",
        "cbc:MinimumNumberNumeric" => MinimumNumberNumericType::class,
        "cbc:MaximumNumberNumeric" => MaximumNumberNumericType::class,
        "cac:OptionValidityPeriod" => PeriodType::class,
        "cac:Renewal" => RenewalType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}