<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getTextType()
 * @method self setTextType(string $value)
 */
class TextType extends BasicComponent
{
    protected $type = "udt:TextType";

    protected $attributes = [
        'languageID' => false,
        'languageLocaleID' => false,
    ];
}