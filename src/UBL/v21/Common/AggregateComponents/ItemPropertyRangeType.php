<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumValueType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumValueType;

/**
 * Class ItemPropertyRangeType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getMinimumValue()
 * @method self setMinimumValue($value)
 * @method mixed getMaximumValue()
 * @method self setMaximumValue($value)
 */
class ItemPropertyRangeType extends AggregateComponent
{
    protected $casts = [
        "cbc:MinimumValue" => MinimumValueType::class,
        "cbc:MaximumValue" => MaximumValueType::class,
    ];

    protected $minOccurs = [
    ];
}