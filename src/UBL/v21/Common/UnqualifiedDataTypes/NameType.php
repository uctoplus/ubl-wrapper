<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class NameType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 *
 * @method mixed getLanguageIDAttribute()
 * @method self setLanguageIDAttribute($string)
 * @method mixed getLanguageLocaleIDAttribute()
 * @method self setLanguageLocaleIDAttribute($string)
 */
class NameType extends BasicComponent
{
    protected $type = "udt:NameType";

    protected $attributeCasts = [
        'languageID' => false,
        'languageLocaleID' => false,
    ];
}