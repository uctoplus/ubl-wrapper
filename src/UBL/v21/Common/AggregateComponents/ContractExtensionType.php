<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OptionsDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumNumberNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumNumberNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\RenewalType;

/**
 *
 * @method mixed getOptionsDescription()
 * @method self setOptionsDescription($value)
 * @method mixed getMinimumNumberNumeric()
 * @method self setMinimumNumberNumeric($value)
 * @method mixed getMaximumNumberNumeric()
 * @method self setMaximumNumberNumeric($value)
 * @method mixed getOptionValidityPeriod()
 * @method self setOptionValidityPeriod($value)
 * @method mixed getRenewal()
 * @method self setRenewal($value)
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