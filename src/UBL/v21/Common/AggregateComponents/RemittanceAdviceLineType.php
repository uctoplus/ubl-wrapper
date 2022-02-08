<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BalanceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CreditLineAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DebitLineAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InvoicingPartyReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class RemittanceAdviceLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getDebitLineAmount()
 * @method self setDebitLineAmount($value)
 * @method mixed getCreditLineAmount()
 * @method self setCreditLineAmount($value)
 * @method mixed getBalanceAmount()
 * @method self setBalanceAmount($value)
 * @method mixed getPaymentPurposeCode()
 * @method self setPaymentPurposeCode($value)
 * @method mixed getInvoicingPartyReference()
 * @method self setInvoicingPartyReference($value)
 * @method mixed getAccountingSupplierParty()
 * @method self setAccountingSupplierParty($value)
 * @method mixed getAccountingCustomerParty()
 * @method self setAccountingCustomerParty($value)
 * @method mixed getBuyerCustomerParty()
 * @method self setBuyerCustomerParty($value)
 * @method mixed getSellerSupplierParty()
 * @method self setSellerSupplierParty($value)
 * @method mixed getOriginatorCustomerParty()
 * @method self setOriginatorCustomerParty($value)
 * @method mixed getPayeeParty()
 * @method self setPayeeParty($value)
 * @method mixed getInvoicePeriod()
 * @method self addInvoicePeriod($value)
 * @method self setInvoicePeriod($value)
 * @method mixed getBillingReference()
 * @method self addBillingReference($value)
 * @method self setBillingReference($value)
 * @method mixed getDocumentReference()
 * @method self addDocumentReference($value)
 * @method self setDocumentReference($value)
 * @method mixed getExchangeRate()
 * @method self setExchangeRate($value)
 */
class RemittanceAdviceLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:UUID" => UUIDType::class,
        "cbc:DebitLineAmount" => DebitLineAmountType::class,
        "cbc:CreditLineAmount" => CreditLineAmountType::class,
        "cbc:BalanceAmount" => BalanceAmountType::class,
        "cbc:PaymentPurposeCode" => PaymentPurposeCodeType::class,
        "cbc:InvoicingPartyReference" => InvoicingPartyReferenceType::class,
        "cac:AccountingSupplierParty" => SupplierPartyType::class,
        "cac:AccountingCustomerParty" => CustomerPartyType::class,
        "cac:BuyerCustomerParty" => CustomerPartyType::class,
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:OriginatorCustomerParty" => CustomerPartyType::class,
        "cac:PayeeParty" => PartyType::class,
        "cac:InvoicePeriod" => PeriodType::class . "[]",
        "cac:BillingReference" => BillingReferenceType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ExchangeRate" => ExchangeRateType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}