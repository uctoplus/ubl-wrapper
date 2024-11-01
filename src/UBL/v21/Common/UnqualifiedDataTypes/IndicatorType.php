<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class IndicatorType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 *
 * @method mixed getFormatAttribute()
 * @method self setFormatAttribute($string)
 */
class IndicatorType extends BasicComponent
{
    protected $type = "udt:IndicatorType";

    protected $attributeCasts = [
        'format' => false,
    ];
}