<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SubstitutionStatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\OrderLineReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;

/**
 *
 * @method mixed getSubstitutionStatusCode()
 * @method self setSubstitutionStatusCode($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getLineItem()
 * @method self setLineItem($value)
 * @method mixed getSellerProposedSubstituteLineItem()
 * @method self setSellerProposedSubstituteLineItem($value)
 * @method mixed getSellerSubstitutedLineItem()
 * @method self setSellerSubstitutedLineItem($value)
 * @method mixed getBuyerProposedSubstituteLineItem()
 * @method self setBuyerProposedSubstituteLineItem($value)
 * @method mixed getCatalogueLineReference()
 * @method self setCatalogueLineReference($value)
 * @method mixed getQuotationLineReference()
 * @method self setQuotationLineReference($value)
 * @method mixed getOrderLineReference()
 * @method self setOrderLineReference($value)
 * @method mixed getDocumentReference()
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