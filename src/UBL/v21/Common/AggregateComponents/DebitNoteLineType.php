<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DebitedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxPointDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class DebitNoteLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getDebitedQuantity()
 * @method self setDebitedQuantity($value)
 * @method mixed getLineExtensionAmount()
 * @method self setLineExtensionAmount($value)
 * @method mixed getTaxPointDate()
 * @method self setTaxPointDate($value)
 * @method mixed getAccountingCostCode()
 * @method self setAccountingCostCode($value)
 * @method mixed getAccountingCost()
 * @method self setAccountingCost($value)
 * @method mixed getPaymentPurposeCode()
 * @method self setPaymentPurposeCode($value)
 * @method mixed getDiscrepancyResponse()
 * @method self addDiscrepancyResponse($value)
 * @method self setDiscrepancyResponse($value)
 * @method mixed getDespatchLineReference()
 * @method self addDespatchLineReference($value)
 * @method self setDespatchLineReference($value)
 * @method mixed getReceiptLineReference()
 * @method self addReceiptLineReference($value)
 * @method self setReceiptLineReference($value)
 * @method mixed getBillingReference()
 * @method self addBillingReference($value)
 * @method self setBillingReference($value)
 * @method mixed getDocumentReference()
 * @method self addDocumentReference($value)
 * @method self setDocumentReference($value)
 * @method mixed getPricingReference()
 * @method self setPricingReference($value)
 * @method mixed getDelivery()
 * @method self addDelivery($value)
 * @method self setDelivery($value)
 * @method mixed getTaxTotal()
 * @method self addTaxTotal($value)
 * @method self setTaxTotal($value)
 * @method mixed getAllowanceCharge()
 * @method self addAllowanceCharge($value)
 * @method self setAllowanceCharge($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getPrice()
 * @method self setPrice($value)
 * @method mixed getSubDebitNoteLine()
 * @method self addSubDebitNoteLine($value)
 * @method self setSubDebitNoteLine($value)
 */
class DebitNoteLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:DebitedQuantity" => DebitedQuantityType::class,
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cbc:TaxPointDate" => TaxPointDateType::class,
        "cbc:AccountingCostCode" => AccountingCostCodeType::class,
        "cbc:AccountingCost" => AccountingCostType::class,
        "cbc:PaymentPurposeCode" => PaymentPurposeCodeType::class,
        "cac:DiscrepancyResponse" => ResponseType::class . "[]",
        "cac:DespatchLineReference" => LineReferenceType::class . "[]",
        "cac:ReceiptLineReference" => LineReferenceType::class . "[]",
        "cac:BillingReference" => BillingReferenceType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:PricingReference" => PricingReferenceType::class,
        "cac:Delivery" => DeliveryType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:Item" => ItemType::class,
        "cac:Price" => PriceType::class,
        "cac:SubDebitNoteLine" => DebitNoteLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:LineExtensionAmount" => 1,
    ];
}