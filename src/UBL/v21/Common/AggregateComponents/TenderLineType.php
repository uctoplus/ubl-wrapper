<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ContentUnitQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumOrderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumOrderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderableUnitType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderQuantityIncrementNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PackLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTaxAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WarrantyInformationType;

/**
 * Class TenderLineType
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
 * @method mixed getLineExtensionAmount()
 * @method self setLineExtensionAmount($value)
 * @method mixed getTotalTaxAmount()
 * @method self setTotalTaxAmount($value)
 * @method mixed getOrderableUnit()
 * @method self setOrderableUnit($value)
 * @method mixed getContentUnitQuantity()
 * @method self setContentUnitQuantity($value)
 * @method mixed getOrderQuantityIncrementNumeric()
 * @method self setOrderQuantityIncrementNumeric($value)
 * @method mixed getMinimumOrderQuantity()
 * @method self setMinimumOrderQuantity($value)
 * @method mixed getMaximumOrderQuantity()
 * @method self setMaximumOrderQuantity($value)
 * @method mixed getWarrantyInformation()
 * @method self addWarrantyInformation($value)
 * @method self setWarrantyInformation($value)
 * @method mixed getPackLevelCode()
 * @method self setPackLevelCode($value)
 * @method mixed getDocumentReference()
 * @method self addDocumentReference($value)
 * @method self setDocumentReference($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getOfferedItemLocationQuantity()
 * @method self addOfferedItemLocationQuantity($value)
 * @method self setOfferedItemLocationQuantity($value)
 * @method mixed getReplacementRelatedItem()
 * @method self addReplacementRelatedItem($value)
 * @method self setReplacementRelatedItem($value)
 * @method mixed getWarrantyParty()
 * @method self setWarrantyParty($value)
 * @method mixed getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod($value)
 * @method mixed getSubTenderLine()
 * @method self addSubTenderLine($value)
 * @method self setSubTenderLine($value)
 * @method mixed getCallForTendersLineReference()
 * @method self setCallForTendersLineReference($value)
 * @method mixed getCallForTendersDocumentReference()
 * @method self setCallForTendersDocumentReference($value)
 */
class TenderLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Quantity" => QuantityType::class,
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cbc:TotalTaxAmount" => TotalTaxAmountType::class,
        "cbc:OrderableUnit" => OrderableUnitType::class,
        "cbc:ContentUnitQuantity" => ContentUnitQuantityType::class,
        "cbc:OrderQuantityIncrementNumeric" => OrderQuantityIncrementNumericType::class,
        "cbc:MinimumOrderQuantity" => MinimumOrderQuantityType::class,
        "cbc:MaximumOrderQuantity" => MaximumOrderQuantityType::class,
        "cbc:WarrantyInformation" => WarrantyInformationType::class . "[]",
        "cbc:PackLevelCode" => PackLevelCodeType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Item" => ItemType::class,
        "cac:OfferedItemLocationQuantity" => ItemLocationQuantityType::class . "[]",
        "cac:ReplacementRelatedItem" => RelatedItemType::class . "[]",
        "cac:WarrantyParty" => PartyType::class,
        "cac:WarrantyValidityPeriod" => PeriodType::class,
        "cac:SubTenderLine" => TenderLineType::class . "[]",
        "cac:CallForTendersLineReference" => LineReferenceType::class,
        "cac:CallForTendersDocumentReference" => DocumentReferenceType::class,
    ];

    protected $minOccurs = [
    ];
}