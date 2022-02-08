<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AttributeIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PositionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;

/**
 *
 * @method mixed getAttributeID()
 * @method self setAttributeID($value)
 * @method mixed getPositionCode()
 * @method self setPositionCode($value)
 * @method mixed getDescriptionCode()
 * @method self setDescriptionCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 */
class PhysicalAttributeType extends AggregateComponent
{
    protected $casts = [
        "cbc:AttributeID" => AttributeIDType::class,
        "cbc:PositionCode" => PositionCodeType::class,
        "cbc:DescriptionCode" => DescriptionCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:AttributeID" => 1,
    ];
}