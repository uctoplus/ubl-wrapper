<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequestForQuotationLineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTaxAmountType;

/**
 * Class QuotationLineType
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
 * @method LineExtensionAmountType getLineExtensionAmount()
 * @method self setLineExtensionAmount(LineExtensionAmountType|string $value)
 * @method TotalTaxAmountType getTotalTaxAmount()
 * @method self setTotalTaxAmount(TotalTaxAmountType|string $value)
 * @method RequestForQuotationLineIDType getRequestForQuotationLineID()
 * @method self setRequestForQuotationLineID(RequestForQuotationLineIDType|string $value)
 * @method DocumentReferenceType[] getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method LineItemType getLineItem()
 * @method self setLineItem(LineItemType $value)
 * @method LineItemType[] getSellerProposedSubstituteLineItem()
 * @method self addSellerProposedSubstituteLineItem(LineItemType $value)
 * @method self setSellerProposedSubstituteLineItem(LineItemType ...$values)
 * @method LineItemType[] getAlternativeLineItem()
 * @method self addAlternativeLineItem(LineItemType $value)
 * @method self setAlternativeLineItem(LineItemType ...$values)
 * @method LineReferenceType getRequestLineReference()
 * @method self setRequestLineReference(LineReferenceType $value)
 */
class QuotationLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Quantity" => QuantityType::class,
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cbc:TotalTaxAmount" => TotalTaxAmountType::class,
        "cbc:RequestForQuotationLineID" => RequestForQuotationLineIDType::class,
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:LineItem" => LineItemType::class,
        "cac:SellerProposedSubstituteLineItem" => LineItemType::class . "[]",
        "cac:AlternativeLineItem" => LineItemType::class . "[]",
        "cac:RequestLineReference" => LineReferenceType::class,
    ];

    protected $minOccurs = [
        "cac:LineItem" => 1,
    ];
}