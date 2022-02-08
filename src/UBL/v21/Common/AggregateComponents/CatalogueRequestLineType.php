<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContractSubdivisionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemLocationQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getContractSubdivision()
 * @method self setContractSubdivision($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getLineValidityPeriod()
 * @method self setLineValidityPeriod($value)
 * @method mixed getRequiredItemLocationQuantity()
 * @method self setRequiredItemLocationQuantity($value)
 * @method mixed getItem()
 * @method self setItem($value)
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