<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getRateType()
 * @method self setRateType(string $value)
 */
class RateType extends BasicComponent
{
    protected $type = "udt:RateType";

    protected $attributes = [
        'format' => false,
    ];
}