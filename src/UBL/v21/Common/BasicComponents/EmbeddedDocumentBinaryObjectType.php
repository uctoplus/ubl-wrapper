<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getBinaryObjectType()
 * @method self setBinaryObjectType(string $value)
 */
class EmbeddedDocumentBinaryObjectType extends BasicComponent
{
    protected $type = "udt:BinaryObjectType";

    protected $attributes = [
        'format' => false,
        'mimeCode' => true,
        'encodingCode' => false,
        'characterSetCode' => false,
        'uri' => false,
        'filename' => false,
    ];
}