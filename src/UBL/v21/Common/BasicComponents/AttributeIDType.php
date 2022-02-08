<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getIdentifierType()
 * @method self setIdentifierType(string $value)
 */
class AttributeIDType extends BasicComponent
{
    protected $type = "udt:IdentifierType";
}