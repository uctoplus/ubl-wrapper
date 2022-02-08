<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getQuantityType()
 * @method self setQuantityType(string $value)
 */
class QuantityType extends BasicComponent
{
    protected $type = "udt:QuantityType";

    protected $attributes = [
        'unitCode' => false,
        'unitCodeListID' => false,
        'unitCodeListAgencyID' => false,
        'unitCodeListAgencyName' => false,
    ];
}