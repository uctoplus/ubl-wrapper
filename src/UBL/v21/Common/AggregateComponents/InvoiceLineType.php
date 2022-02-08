<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FreeOfChargeIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InvoicedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxPointDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class InvoiceLineType
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
 * @method mixed getInvoicedQuantity()
 * @method self setInvoicedQuantity($value)
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
 * @method mixed getFreeOfChargeIndicator()
 * @method self setFreeOfChargeIndicator($value)
 * @method mixed getInvoicePeriod()
 * @method self addInvoicePeriod($value)
 * @method self setInvoicePeriod($value)
 * @method mixed getOrderLineReference()
 * @method self addOrderLineReference($value)
 * @method self setOrderLineReference($value)
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
 * @method mixed getOriginatorParty()
 * @method self setOriginatorParty($value)
 * @method mixed getDelivery()
 * @method self addDelivery($value)
 * @method self setDelivery($value)
 * @method mixed getPaymentTerms()
 * @method self addPaymentTerms($value)
 * @method self setPaymentTerms($value)
 * @method mixed getAllowanceCharge()
 * @method self addAllowanceCharge($value)
 * @method self setAllowanceCharge($value)
 * @method mixed getTaxTotal()
 * @method self addTaxTotal($value)
 * @method self setTaxTotal($value)
 * @method mixed getWithholdingTaxTotal()
 * @method self addWithholdingTaxTotal($value)
 * @method self setWithholdingTaxTotal($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getPrice()
 * @method self setPrice($value)
 * @method mixed getDeliveryTerms()
 * @method self setDeliveryTerms($value)
 * @method mixed getSubInvoiceLine()
 * @method self addSubInvoiceLine($value)
 * @method self setSubInvoiceLine($value)
 * @method mixed getItemPriceExtension()
 * @method self setItemPriceExtension($value)
 */
class InvoiceLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:InvoicedQuantity" => InvoicedQuantityType::class,
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cbc:TaxPointDate" => TaxPointDateType::class,
        "cbc:AccountingCostCode" => AccountingCostCodeType::class,
        "cbc:AccountingCost" => AccountingCostType::class,
        "cbc:PaymentPurposeCode" => PaymentPurposeCodeType::class,
        "cbc:FreeOfChargeIndicator" => FreeOfChargeIndicatorType::class,
        "cac:InvoicePeriod" => PeriodType::class . "[]",
        "cac:OrderLineReference" => OrderLineReferenceType::class . "[]",
        "cac:DespatchLineReference" => LineReferenceType::class . "[]",
        "cac:ReceiptLineReference" => LineReferenceType::class . "[]",
        "cac:BillingReference" => BillingReferenceType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:PricingReference" => PricingReferenceType::class,
        "cac:OriginatorParty" => PartyType::class,
        "cac:Delivery" => DeliveryType::class . "[]",
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:WithholdingTaxTotal" => TaxTotalType::class . "[]",
        "cac:Item" => ItemType::class,
        "cac:Price" => PriceType::class,
        "cac:DeliveryTerms" => DeliveryTermsType::class,
        "cac:SubInvoiceLine" => InvoiceLineType::class . "[]",
        "cac:ItemPriceExtension" => PriceExtensionType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:LineExtensionAmount" => 1,
        "cac:Item" => 1,
    ];
}