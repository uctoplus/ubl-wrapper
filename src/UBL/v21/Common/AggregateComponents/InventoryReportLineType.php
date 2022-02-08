<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InventoryValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AvailabilityDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AvailabilityStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getInventoryValueAmount()
 * @method self setInventoryValueAmount($value)
 * @method mixed getAvailabilityDate()
 * @method self setAvailabilityDate($value)
 * @method mixed getAvailabilityStatusCode()
 * @method self setAvailabilityStatusCode($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getInventoryLocation()
 * @method self setInventoryLocation($value)
 */
class InventoryReportLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Quantity" => QuantityType::class,
        "cbc:InventoryValueAmount" => InventoryValueAmountType::class,
        "cbc:AvailabilityDate" => AvailabilityDateType::class,
        "cbc:AvailabilityStatusCode" => AvailabilityStatusCodeType::class,
        "cac:Item" => ItemType::class,
        "cac:InventoryLocation" => LocationType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:Quantity" => 1,
        "cac:Item" => 1,
    ];
}