<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;


/**
 * Class CodeType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 *
 * @method mixed getListIDAttribute()
 * @method self setListIDAttribute($string)
 * @method mixed getListAgencyIDAttribute()
 * @method self setListAgencyIDAttribute($string)
 * @method mixed getListAgencyNameAttribute()
 * @method self setListAgencyNameAttribute($string)
 * @method mixed getListVersionIDAttribute()
 * @method self setListVersionIDAttribute($string)
 * @method mixed getNameAttribute()
 * @method self setNameAttribute($string)
 * @method mixed getLanguageIDAttribute()
 * @method self setLanguageIDAttribute($string)
 * @method mixed getListURIAttribute()
 * @method self setListURIAttribute($string)
 * @method mixed getListSchemeURIAttribute()
 * @method self setListSchemeURIAttribute($string)
 */
class CodeType extends BasicComponent
{
    protected $type = "udt:CodeType";

    protected $attributes = [
        'listID' => false,
        'listAgencyID' => false,
        'listAgencyName' => false,
        'listName' => false,
        'listVersionID' => false,
        'name' => false,
        'languageID' => false,
        'listURI' => false,
        'listSchemeURI' => false,
    ];
}