<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getIndicatorType()
 * @method self setIndicatorType(string $value)
 */
class IndicatorType extends BasicComponent
{
    protected $type = "udt:IndicatorType";

    protected $attributes = [
        'format' => false,
    ];
}