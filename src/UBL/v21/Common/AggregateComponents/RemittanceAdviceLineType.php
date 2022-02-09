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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method DebitLineAmountType getDebitLineAmount()
 * @method self setDebitLineAmount(DebitLineAmountType|string $value)
 * @method CreditLineAmountType getCreditLineAmount()
 * @method self setCreditLineAmount(CreditLineAmountType|string $value)
 * @method BalanceAmountType getBalanceAmount()
 * @method self setBalanceAmount(BalanceAmountType|string $value)
 * @method PaymentPurposeCodeType getPaymentPurposeCode()
 * @method self setPaymentPurposeCode(PaymentPurposeCodeType|string $value)
 * @method InvoicingPartyReferenceType getInvoicingPartyReference()
 * @method self setInvoicingPartyReference(InvoicingPartyReferenceType|string $value)
 * @method SupplierPartyType getAccountingSupplierParty()
 * @method self setAccountingSupplierParty(SupplierPartyType $value)
 * @method CustomerPartyType getAccountingCustomerParty()
 * @method self setAccountingCustomerParty(CustomerPartyType $value)
 * @method CustomerPartyType getBuyerCustomerParty()
 * @method self setBuyerCustomerParty(CustomerPartyType $value)
 * @method SupplierPartyType getSellerSupplierParty()
 * @method self setSellerSupplierParty(SupplierPartyType $value)
 * @method CustomerPartyType getOriginatorCustomerParty()
 * @method self setOriginatorCustomerParty(CustomerPartyType $value)
 * @method PartyType getPayeeParty()
 * @method self setPayeeParty(PartyType $value)
 * @method PeriodType getInvoicePeriod()
 * @method self addInvoicePeriod(PeriodType $value)
 * @method self setInvoicePeriod(PeriodType ...$values)
 * @method BillingReferenceType getBillingReference()
 * @method self addBillingReference(BillingReferenceType $value)
 * @method self setBillingReference(BillingReferenceType ...$values)
 * @method DocumentReferenceType getDocumentReference()
 * @method self addDocumentReference(DocumentReferenceType $value)
 * @method self setDocumentReference(DocumentReferenceType ...$values)
 * @method ExchangeRateType getExchangeRate()
 * @method self setExchangeRate(ExchangeRateType $value)
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