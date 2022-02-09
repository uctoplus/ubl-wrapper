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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method LineExtensionAmountType getLineExtensionAmount()
 * @method self setLineExtensionAmount(LineExtensionAmountType|string $value)
 * @method TotalTaxAmountType getTotalTaxAmount()
 * @method self setTotalTaxAmount(TotalTaxAmountType|string $value)
 * @method OrderableUnitType getOrderableUnit()
 * @method self setOrderableUnit(OrderableUnitType|string $value)
 * @method ContentUnitQuantityType getContentUnitQuantity()
 * @method self setContentUnitQuantity(ContentUnitQuantityType|string $value)
 * @method OrderQuantityIncrementNumericType getOrderQuantityIncrementNumeric()
 * @method self setOrderQuantityIncrementNumeric(OrderQuantityIncrementNumericType|string $value)
 * @method MinimumOrderQuantityType getMinimumOrderQuantity()
 * @method self setMinimumOrderQuantity(MinimumOrderQuantityType|string $value)
 * @method MaximumOrderQuantityType getMaximumOrderQuantity()
 * @method self setMaximumOrderQuantity(MaximumOrderQuantityType|string $value)
 * @method WarrantyInformationType getWarrantyInformation()
 * @method self addWarrantyInformation(WarrantyInformationType|string $value)
 * @method self setWarrantyInformation(WarrantyInformationType ...$values)
 * @method PackLevelCodeType getPackLevelCode()
 * @method self setPackLevelCode(PackLevelCodeType|string $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 * @method ItemLocationQuantityType getOfferedItemLocationQuantity()
 * @method self addOfferedItemLocationQuantity(ItemLocationQuantityType $value)
 * @method self setOfferedItemLocationQuantity(ItemLocationQuantityType ...$values)
 * @method RelatedItemType getReplacementRelatedItem()
 * @method self addReplacementRelatedItem(RelatedItemType $value)
 * @method self setReplacementRelatedItem(RelatedItemType ...$values)
 * @method PartyType getWarrantyParty()
 * @method self setWarrantyParty(PartyType $value)
 * @method PeriodType getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod(PeriodType $value)
 * @method TenderLineType getSubTenderLine()
 * @method self addSubTenderLine(TenderLineType $value)
 * @method self setSubTenderLine(TenderLineType ...$values)
 * @method LineReferenceType getCallForTendersLineReference()
 * @method self setCallForTendersLineReference(LineReferenceType $value)
 * @method DocumentReferenceType getCallForTendersDocumentReference()
 * @method self setCallForTendersDocumentReference(DocumentReferenceType $value)
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