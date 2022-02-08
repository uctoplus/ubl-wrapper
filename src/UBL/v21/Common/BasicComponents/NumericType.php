<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getNumericType()
 * @method self setNumericType(string $value)
 */
class NumericType extends BasicComponent
{
    protected $type = "udt:NumericType";

    protected $attributes = [
        'format' => false,
    ];
}