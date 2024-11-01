<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractSubdivisionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;

/**
 * Class CatalogueRequestLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ContractSubdivisionType getContractSubdivision()
 * @method self setContractSubdivision(ContractSubdivisionType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method PeriodType getLineValidityPeriod()
 * @method self setLineValidityPeriod(PeriodType $value)
 * @method ItemLocationQuantityType[] getRequiredItemLocationQuantity()
 * @method self addRequiredItemLocationQuantity(ItemLocationQuantityType $value)
 * @method self setRequiredItemLocationQuantity(ItemLocationQuantityType ...$values)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 */
class CatalogueRequestLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ContractSubdivision" => ContractSubdivisionType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cac:LineValidityPeriod" => PeriodType::class,
        "cac:RequiredItemLocationQuantity" => ItemLocationQuantityType::class . "[]",
        "cac:Item" => ItemType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cac:Item" => 1,
    ];
}