<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxIncludedIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class RequestForTenderLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method MinimumQuantityType getMinimumQuantity()
 * @method self setMinimumQuantity(MinimumQuantityType|string $value)
 * @method MaximumQuantityType getMaximumQuantity()
 * @method self setMaximumQuantity(MaximumQuantityType|string $value)
 * @method TaxIncludedIndicatorType getTaxIncludedIndicator()
 * @method self setTaxIncludedIndicator(TaxIncludedIndicatorType|string $value)
 * @method MinimumAmountType getMinimumAmount()
 * @method self setMinimumAmount(MinimumAmountType|string $value)
 * @method MaximumAmountType getMaximumAmount()
 * @method self setMaximumAmount(MaximumAmountType|string $value)
 * @method EstimatedAmountType getEstimatedAmount()
 * @method self setEstimatedAmount(EstimatedAmountType|string $value)
 * @method DocumentReferenceType getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method PeriodType getDeliveryPeriod()
 * @method self addDeliveryPeriod(PeriodType $value)
 * @method self setDeliveryPeriod(PeriodType ...$values)
 * @method ItemLocationQuantityType getRequiredItemLocationQuantity()
 * @method self addRequiredItemLocationQuantity(ItemLocationQuantityType $value)
 * @method self setRequiredItemLocationQuantity(ItemLocationQuantityType ...$values)
 * @method PeriodType getWarrantyValidityPeriod()
 * @method self setWarrantyValidityPeriod(PeriodType $value)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 * @method RequestForTenderLineType getSubRequestForTenderLine()
 * @method self addSubRequestForTenderLine(RequestForTenderLineType $value)
 * @method self setSubRequestForTenderLine(RequestForTenderLineType ...$values)
 */
class RequestForTenderLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Quantity" => QuantityType::class,
        "cbc:MinimumQuantity" => MinimumQuantityType::class,
        "cbc:MaximumQuantity" => MaximumQuantityType::class,
        "cbc:TaxIncludedIndicator" => TaxIncludedIndicatorType::class,
        "cbc:MinimumAmount" => MinimumAmountType::class,
        "cbc:MaximumAmount" => MaximumAmountType::class,
        "cbc:EstimatedAmount" => EstimatedAmountType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:DeliveryPeriod" => PeriodType::class . "[]",
        "cac:RequiredItemLocationQuantity" => ItemLocationQuantityType::class . "[]",
        "cac:WarrantyValidityPeriod" => PeriodType::class,
        "cac:Item" => ItemType::class,
        "cac:SubRequestForTenderLine" => RequestForTenderLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:Item" => 1,
    ];
}