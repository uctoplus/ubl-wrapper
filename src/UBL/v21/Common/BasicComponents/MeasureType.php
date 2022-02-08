<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents;

use Uctoplus\UblWrapper\UBL\Schema\BasicComponent;

/**
 *
 * @method mixed getMeasureType()
 * @method self setMeasureType(string $value)
 */
class MeasureType extends BasicComponent
{
    protected $type = "udt:MeasureType";

    protected $attributes = [
        'unitCode' => true,
        'unitCodeListVersionID' => false,
    ];
}