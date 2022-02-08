<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class GoodsItemContainerType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getTransportEquipment()
 * @method self addTransportEquipment($value)
 * @method self setTransportEquipment($value)
 */
class GoodsItemContainerType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Quantity" => QuantityType::class,
        "cac:TransportEquipment" => TransportEquipmentType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}