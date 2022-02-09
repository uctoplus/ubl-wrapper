<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class PercentType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 *
 * @method mixed getFormatAttribute()
 * @method self setFormatAttribute($string)
 */
class PercentType extends BasicComponent
{
    protected $type = "udt:PercentType";

    protected $attributeCasts = [
        'format' => false,
    ];
}