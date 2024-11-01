<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class IdentifierType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 */
class IdentifierType extends BasicComponent
{
    protected $type = "udt:IdentifierType";

    protected $attributeCasts = [
        'schemeID' => false,
        'schemeName' => false,
        'schemeAgencyID' => false, // Defaults to the UN/EDIFACT data element 3055 code list.
        'schemeAgencyName' => false,
        'schemeVersionID' => false,
        'schemeDataURI' => false,
        'schemeURI' => false,
    ];
}