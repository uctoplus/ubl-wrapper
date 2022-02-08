<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BalanceBroughtForwardIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DebitLineAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CreditLineAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BalanceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentMeansType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CustomerPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\BillingReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ExchangeRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getBalanceBroughtForwardIndicator()
 * @method self setBalanceBroughtForwardIndicator($value)
 * @method mixed getDebitLineAmount()
 * @method self setDebitLineAmount($value)
 * @method mixed getCreditLineAmount()
 * @method self setCreditLineAmount($value)
 * @method mixed getBalanceAmount()
 * @method self setBalanceAmount($value)
 * @method mixed getPaymentPurposeCode()
 * @method self setPaymentPurposeCode($value)
 * @method mixed getPaymentMeans()
 * @method self setPaymentMeans($value)
 * @method mixed getPaymentTerms()
 * @method self setPaymentTerms($value)
 * @method mixed getBuyerCustomerParty()
 * @method self setBuyerCustomerParty($value)
 * @method mixed getSellerSupplierParty()
 * @method self setSellerSupplierParty($value)
 * @method mixed getOriginatorCustomerParty()
 * @method self setOriginatorCustomerParty($value)
 * @method mixed getAccountingCustomerParty()
 * @method self setAccountingCustomerParty($value)
 * @method mixed getAccountingSupplierParty()
 * @method self setAccountingSupplierParty($value)
 * @method mixed getPayeeParty()
 * @method self setPayeeParty($value)
 * @method mixed getInvoicePeriod()
 * @method self setInvoicePeriod($value)
 * @method mixed getBillingReference()
 * @method self setBillingReference($value)
 * @method mixed getDocumentReference()
 * @method self setDocumentReference($value)
 * @method mixed getExchangeRate()
 * @method self setExchangeRate($value)
 * @method mixed getAllowanceCharge()
 * @method self setAllowanceCharge($value)
 * @method mixed getCollectedPayment()
 * @method self setCollectedPayment($value)
 */
class StatementLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:UUID" => UUIDType::class,
        "cbc:BalanceBroughtForwardIndicator" => BalanceBroughtForwardIndicatorType::class,
        "cbc:DebitLineAmount" => DebitLineAmountType::class,
        "cbc:CreditLineAmount" => CreditLineAmountType::class,
        "cbc:BalanceAmount" => BalanceAmountType::class,
        "cbc:PaymentPurposeCode" => PaymentPurposeCodeType::class,
        "cac:PaymentMeans" => PaymentMeansType::class,
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
        "cac:BuyerCustomerParty" => CustomerPartyType::class,
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:OriginatorCustomerParty" => CustomerPartyType::class,
        "cac:AccountingCustomerParty" => CustomerPartyType::class,
        "cac:AccountingSupplierParty" => SupplierPartyType::class,
        "cac:PayeeParty" => PartyType::class,
        "cac:InvoicePeriod" => PeriodType::class . "[]",
        "cac:BillingReference" => BillingReferenceType::class . "[]",
        "cac:DocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ExchangeRate" => ExchangeRateType::class,
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:CollectedPayment" => PaymentType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}