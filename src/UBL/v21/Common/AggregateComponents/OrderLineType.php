<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubstitutionStatusCodeType;

/**
 * Class OrderLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method SubstitutionStatusCodeType getSubstitutionStatusCode()
 * @method self setSubstitutionStatusCode(SubstitutionStatusCodeType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method LineItemType getLineItem()
 * @method self setLineItem(LineItemType $value)
 * @method LineItemType getSellerProposedSubstituteLineItem()
 * @method self addSellerProposedSubstituteLineItem(LineItemType $value)
 * @method self setSellerProposedSubstituteLineItem(LineItemType ...$values)
 * @method LineItemType getSellerSubstitutedLineItem()
 * @method self addSellerSubstitutedLineItem(LineItemType $value)
 * @method self setSellerSubstitutedLineItem(LineItemType ...$values)
 * @method LineItemType getBuyerProposedSubstituteLineItem()
 * @method self addBuyerProposedSubstituteLineItem(LineItemType $value)
 * @method self setBuyerProposedSubstituteLineItem(LineItemType ...$values)
 * @method LineReferenceType getCatalogueLineReference()
 * @method self setCatalogueLineReference(LineReferenceType $value)
 * @method LineReferenceType getQuotationLineReference()
 * @method self setQuotationLineReference(LineReferenceType $value)
 * @method OrderLineReferenceType getOrderLineReference()
 * @method self addOrderLineReference(OrderLineReferenceType $value)
 * @method self setOrderLineReference(OrderLineReferenceType ...$values)
 * @method DocumentReferenceType getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 */
class OrderLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:SubstitutionStatusCode" => SubstitutionStatusCodeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cac:LineItem" => LineItemType::class,
        "cac:SellerProposedSubstituteLineItem" => LineItemType::class . "[]",
        "cac:SellerSubstitutedLineItem" => LineItemType::class . "[]",
        "cac:BuyerProposedSubstituteLineItem" => LineItemType::class . "[]",
        "cac:CatalogueLineReference" => LineReferenceType::class,
        "cac:QuotationLineReference" => LineReferenceType::class,
        "cac:OrderLineReference" => OrderLineReferenceType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:LineItem" => 1,
    ];
}