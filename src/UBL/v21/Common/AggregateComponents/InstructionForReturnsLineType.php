<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class InstructionForReturnsLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getManufacturerParty()
 * @method self setManufacturerParty($value)
 * @method mixed getItem()
 * @method self setItem($value)
 */
class InstructionForReturnsLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Quantity" => QuantityType::class,
        "cac:ManufacturerParty" => PartyType::class,
        "cac:Item" => ItemType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:Quantity" => 1,
        "cac:Item" => 1,
    ];
}