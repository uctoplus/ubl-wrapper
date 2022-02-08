<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getPercentType()
 * @method self setPercentType(string $value)
 */
class PercentType extends BasicComponent
{
    protected $type = "udt:PercentType";

    protected $attributes = [
        'format' => false,
    ];
}