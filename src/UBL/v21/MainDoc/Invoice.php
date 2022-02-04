<?php

namespace Uctoplus\UblWrapper\UBL\v21\MainDoc;

use Uctoplus\UblWrapper\UBL\Schema\MainDoc;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\BillingReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CustomerPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ExchangeRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\InvoiceLineType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\MonetaryTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\OrderReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentMeansType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ProjectReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BuyerReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CopyIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomizationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InvoiceTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineCountNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentAlternativeCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PricingCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileExecutionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxPointDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Version;

/**
 * Class Invoice
 *
 * @author Mário <mario@uctoplus.sk>
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\MainDoc
 *
 * @method mixed getCustomizationID()
 * @method self setCustomizationID($value)
 * @method mixed getProfileID()
 * @method self setProfileID($value)
 * @method mixed getProfileExecutionID()
 * @method self setProfileExecutionID($value)
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getCopyIndicator()
 * @method self setCopyIndicator($value)
 * @method mixed getUUID()
 * @method self setUUID($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getIssueTime()
 * @method self setIssueTime($value)
 * @method mixed getDueDate()
 * @method self setDueDate($value)
 * @method mixed getInvoiceTypeCode()
 * @method self setInvoiceTypeCode($value)
 * @method mixed getNote()
 * @method void addNote($value)
 * @method self setNote($value)
 * @method mixed getTaxPointDate()
 * @method self setTaxPointDate($value)
 * @method mixed getDocumentCurrencyCode()
 * @method self setDocumentCurrencyCode($value)
 * @method mixed getTaxCurrencyCode()
 * @method self setTaxCurrencyCode($value)
 * @method mixed getPricingCurrencyCode()
 * @method self setPricingCurrencyCode($value)
 * @method mixed getPaymentCurrencyCode()
 * @method self setPaymentCurrencyCode($value)
 * @method mixed getPaymentAlternativeCurrencyCode()
 * @method self setPaymentAlternativeCurrencyCode($value)
 * @method mixed getAccountingCostCode()
 * @method self setAccountingCostCode($value)
 * @method mixed getAccountingCost()
 * @method self setAccountingCost($value)
 * @method mixed getLineCountNumeric()
 * @method self setLineCountNumeric($value)
 * @method mixed getBuyerReference()
 * @method self setBuyerReference($value)
 * @method mixed getInvoicePeriod()
 * @method void addInvoicePeriod($value)
 * @method self setInvoicePeriod($value)
 * @method mixed getOrderReference()
 * @method self setOrderReference($value)
 * @method mixed getBillingReference()
 * @method void addBillingReference($value)
 * @method self setBillingReference($value)
 * @method mixed getDespatchDocumentReference()
 * @method void addDespatchDocumentReference($value)
 * @method self setDespatchDocumentReference($value)
 * @method mixed getReceiptDocumentReference()
 * @method void addReceiptDocumentReference($value)
 * @method self setReceiptDocumentReference($value)
 * @method mixed getStatementDocumentReference()
 * @method void addStatementDocumentReference($value)
 * @method self setStatementDocumentReference($value)
 * @method mixed getOriginatorDocumentReference()
 * @method void addOriginatorDocumentReference($value)
 * @method self setOriginatorDocumentReference($value)
 * @method mixed getContractDocumentReference()
 * @method void addContractDocumentReference()
 * @method self setContractDocumentReference($value)
 * @method mixed getAdditionalDocumentReference()
 * @method void addAdditionalDocumentReference($value)
 * @method self setAdditionalDocumentReference($value)
 * @method mixed getProjectReference()
 * @method void addProjectReference($value)
 * @method self setProjectReference($value)
 * @method mixed getSignature()
 * @method void addSignature($value)
 * @method self setSignature($value)
 * @method mixed getAccountingSupplierParty()
 * @method self setAccountingSupplierParty($value)
 * @method mixed getAccountingCustomerParty()
 * @method self setAccountingCustomerParty($value)
 * @method mixed getPayeeParty()
 * @method self setPayeeParty($value)
 * @method mixed getBuyerCustomerParty()
 * @method self setBuyerCustomerParty($value)
 * @method mixed getSellerSupplierParty()
 * @method self setSellerSupplierParty($value)
 * @method mixed getTaxRepresentativeParty()
 * @method self setTaxRepresentativeParty($value)
 * @method mixed getDelivery()
 * @method void addDelivery($value)
 * @method self setDelivery($value)
 * @method mixed getDeliveryTerms()
 * @method self setDeliveryTerms($value)
 * @method mixed getPaymentMeans()
 * @method void addPaymentMeans($value)
 * @method self setPaymentMeans($value)
 * @method mixed getPaymentTerms()
 * @method void addPaymentTerms($value)
 * @method self setPaymentTerms($value)
 * @method mixed getPrepaidPayment()
 * @method void addPrepaidPayment($value)
 * @method self setPrepaidPayment($value)
 * @method mixed getAllowanceCharge()
 * @method void addAllowanceCharge($value)
 * @method self setAllowanceCharge($value)
 * @method mixed getTaxExchangeRate()
 * @method self setTaxExchangeRate($value)
 * @method mixed getPricingExchangeRate()
 * @method self setPricingExchangeRate($value)
 * @method mixed getPaymentExchangeRate()
 * @method self setPaymentExchangeRate($value)
 * @method mixed getPaymentAlternativeExchangeRate()
 * @method self setPaymentAlternativeExchangeRate($value)
 * @method mixed getTaxTotal()
 * @method void addTaxTotal($value)
 * @method self setTaxTotal($value)
 * @method mixed getWithholdingTaxTotal()
 * @method void addWithholdingTaxTotal($value)
 * @method self setWithholdingTaxTotal($value)
 * @method mixed getLegalMonetaryTotal()
 * @method self setLegalMonetaryTotal($value)
 * @method mixed getInvoiceLine()
 * @method void addInvoiceLine($value)
 * @method self setInvoiceLine($value)
 */
class Invoice extends MainDoc
{
    protected $UBLVersionID = Version::VERSION_CODE;

    protected $xmlns = "urn:oasis:names:specification:ubl:schema:xsd:Invoice-2";

    protected $casts = [
        "cbc:CustomizationID" => CustomizationIDType::class,
        "cbc:ProfileID" => ProfileIDType::class,
        "cbc:ProfileExecutionID" => ProfileExecutionIDType::class,
        "cbc:ID" => IDType::class,
        "cbc:CopyIndicator" => CopyIndicatorType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:DueDate" => DueDateType::class,
        "cbc:InvoiceTypeCode" => InvoiceTypeCodeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:TaxPointDate" => TaxPointDateType::class,
        "cbc:DocumentCurrencyCode" => DocumentCurrencyCodeType::class,
        "cbc:TaxCurrencyCode" => TaxCurrencyCodeType::class,
        "cbc:PricingCurrencyCode" => PricingCurrencyCodeType::class,
        "cbc:PaymentCurrencyCode" => PaymentCurrencyCodeType::class,
        "cbc:PaymentAlternativeCurrencyCode" => PaymentAlternativeCurrencyCodeType::class,
        "cbc:AccountingCostCode" => AccountingCostCodeType::class,
        "cbc:AccountingCost" => AccountingCostType::class,
        "cbc:LineCountNumeric" => LineCountNumericType::class,
        "cbc:BuyerReference" => BuyerReferenceType::class,
        "cac:InvoicePeriod" => PeriodType::class . "[]",
        "cac:OrderReference" => OrderReferenceType::class,
        "cac:BillingReference" => BillingReferenceType::class . "[]",
        "cac:DespatchDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ReceiptDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:StatementDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:OriginatorDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ContractDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:AdditionalDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:ProjectReference" => ProjectReferenceType::class . "[]",
        "cac:Signature" => SignatureType::class . "[]",
        "cac:AccountingSupplierParty" => SupplierPartyType::class,
        "cac:AccountingCustomerParty" => CustomerPartyType::class,
        "cac:PayeeParty" => PartyType::class,
        "cac:BuyerCustomerParty" => CustomerPartyType::class,
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:TaxRepresentativeParty" => PartyType::class,
        "cac:Delivery" => DeliveryType::class . "[]",
        "cac:DeliveryTerms" => DeliveryTermsType::class,
        "cac:PaymentMeans" => PaymentMeansType::class . "[]",
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
        "cac:PrepaidPayment" => PaymentType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxExchangeRate" => ExchangeRateType::class,
        "cac:PricingExchangeRate" => ExchangeRateType::class,
        "cac:PaymentExchangeRate" => ExchangeRateType::class,
        "cac:PaymentAlternativeExchangeRate" => ExchangeRateType::class,
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:WithholdingTaxTotal" => TaxTotalType::class . "[]",
        "cac:LegalMonetaryTotal" => MonetaryTotalType::class,
        "cac:InvoiceLine" => InvoiceLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:IssueDate" => 1,
//        "cac:AccountingSupplierParty" => 1,
//        "cac:AccountingCustomerParty" => 1,
//        "cac:LegalMonetaryTotal" => 1,
//        "cac:InvoiceLine" => 1,
    ];


}