<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getAmountType()
 * @method self setAmountType(string $value)
 */
class IdentifierType extends BasicComponent
{
    protected $type = "udt:IdentifierType";

    protected $attributeCasts = [
        'schemeID' => false,
        'schemeName' => false,
        'schemeAgencyID' => false,
        'schemeAgencyName' => false,
        'schemeVersionID' => false,
        'schemeDataURI' => false,
        'schemeURI' => false,
    ];
}