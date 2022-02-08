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
 * @method mixed getSubstitutionStatusCode()
 * @method self setSubstitutionStatusCode($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getLineItem()
 * @method self setLineItem($value)
 * @method mixed getSellerProposedSubstituteLineItem()
 * @method self addSellerProposedSubstituteLineItem($value)
 * @method self setSellerProposedSubstituteLineItem($value)
 * @method mixed getSellerSubstitutedLineItem()
 * @method self addSellerSubstitutedLineItem($value)
 * @method self setSellerSubstitutedLineItem($value)
 * @method mixed getBuyerProposedSubstituteLineItem()
 * @method self addBuyerProposedSubstituteLineItem($value)
 * @method self setBuyerProposedSubstituteLineItem($value)
 * @method mixed getCatalogueLineReference()
 * @method self setCatalogueLineReference($value)
 * @method mixed getQuotationLineReference()
 * @method self setQuotationLineReference($value)
 * @method mixed getOrderLineReference()
 * @method self addOrderLineReference($value)
 * @method self setOrderLineReference($value)
 * @method mixed getDocumentReference()
 * @method self addDocumentReference($value)
 * @method self setDocumentReference($value)
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