<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalTaxAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequestForQuotationLineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getLineExtensionAmount()
 * @method self setLineExtensionAmount($value)
 * @method mixed getTotalTaxAmount()
 * @method self setTotalTaxAmount($value)
 * @method mixed getRequestForQuotationLineID()
 * @method self setRequestForQuotationLineID($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getLineItem()
 * @method self setLineItem($value)
 * @method mixed getSellerProposedSubstituteLineItem()
 * @method self setSellerProposedSubstituteLineItem($value)
 * @method mixed getAlternativeLineItem()
 * @method self setAlternativeLineItem($value)
 * @method mixed getRequestLineReference()
 * @method self setRequestLineReference($value)
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