<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;


/**
 *
 * @method mixed getCodeType()
 * @method self setCodeType(string $value)
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