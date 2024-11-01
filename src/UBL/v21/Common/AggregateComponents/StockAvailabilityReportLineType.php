<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AvailabilityDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AvailabilityStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValueAmountType;

/**
 * Class StockAvailabilityReportLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method ValueAmountType getValueAmount()
 * @method self setValueAmount(ValueAmountType|string $value)
 * @method AvailabilityDateType getAvailabilityDate()
 * @method self setAvailabilityDate(AvailabilityDateType|string $value)
 * @method AvailabilityStatusCodeType getAvailabilityStatusCode()
 * @method self setAvailabilityStatusCode(AvailabilityStatusCodeType|string $value)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 */
class StockAvailabilityReportLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Quantity" => QuantityType::class,
        "cbc:ValueAmount" => ValueAmountType::class,
        "cbc:AvailabilityDate" => AvailabilityDateType::class,
        "cbc:AvailabilityStatusCode" => AvailabilityStatusCodeType::class,
        "cac:Item" => ItemType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:Quantity" => 1,
        "cac:Item" => 1,
    ];
}