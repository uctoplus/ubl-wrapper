<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 * Class IdentifierType
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes
 */
class BinaryObjectType extends BasicComponent
{
    protected $type = "udt:BinaryObjectType";

    protected $attributeCasts = [
        'format' => false,
        'mimeCode' => false,
        'encodingCode' => false,
        'characterSetCode' => false,
        'uri' => false,
        'filename' => false,
    ];
}