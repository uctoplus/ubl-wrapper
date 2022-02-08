<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DebitedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxPointDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ResponseType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\BillingReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PricingReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PriceType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getNote()
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
 * @method self setDiscrepancyResponse($value)
 * @method mixed getDespatchLineReference()
 * @method self setDespatchLineReference($value)
 * @method mixed getReceiptLineReference()
 * @method self setReceiptLineReference($value)
 * @method mixed getBillingReference()
 * @method self setBillingReference($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getPricingReference()
 * @method self setPricingReference($value)
 * @method mixed getDelivery()
 * @method self setDelivery($value)
 * @method mixed getTaxTotal()
 * @method self setTaxTotal($value)
 * @method mixed getAllowanceCharge()
 * @method self setAllowanceCharge($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getPrice()
 * @method self setPrice($value)
 * @method mixed getSubDebitNoteLine()
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