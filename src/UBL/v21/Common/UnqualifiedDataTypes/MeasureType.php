<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class MeasureType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 *
 * @method mixed getUnitCodeAttribute()
 * @method self setUnitCodeAttribute($string)
 * @method mixed getUnitCodeListVersionIDAttribute()
 * @method self setUnitCodeListVersionIDAttribute($string)
 */
class MeasureType extends BasicComponent
{
    protected $type = "udt:MeasureType";

    protected $attributeCasts = [
        'unitCode' => true,
        'unitCodeListVersionID' => false,
    ];
}