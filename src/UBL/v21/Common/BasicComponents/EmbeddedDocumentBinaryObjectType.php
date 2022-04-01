<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\v21\Common\UnqualifiedDataTypes\BinaryObjectType;

/**
 * Class EmbeddedDocumentBinaryObjectType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents
 */
class EmbeddedDocumentBinaryObjectType extends BinaryObjectType
{
    protected $attributeCasts = [
        'format' => false,
        'encodingCode' => false,
        'characterSetCode' => false,
        'uri' => false,
        'filename' => false,
        'mimeCode' => true,
    ];
}