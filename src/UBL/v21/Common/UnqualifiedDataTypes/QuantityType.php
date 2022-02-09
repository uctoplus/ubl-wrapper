<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class QuantityType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 *
 * @method mixed getUnitCodeAttribute()
 * @method self setUnitCodeAttribute($string)
 * @method mixed getUnitCodeListIDAttribute()
 * @method self setUnitCodeListIDAttribute($string)
 * @method mixed getUnitCodeListAgencyIDAttribute()
 * @method self setUnitCodeListAgencyIDAttribute($string)
 * @method mixed getUnitCodeListAgencyNameAttribute()
 * @method self setUnitCodeListAgencyNameAttribute($string)
 */
class QuantityType extends BasicComponent
{
    protected $type = "udt:QuantityType";

    protected $attributeCasts = [
        'unitCode' => false,
        'unitCodeListID' => false,
        'unitCodeListAgencyID' => false,
        'unitCodeListAgencyName' => false,
    ];
}