<?php

namespace Uctoplus\UblWrapper\UBL\v21\MainDoc;

use Uctoplus\UblWrapper\UBL\Schema\MainDoc;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CatalogueReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContractType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CountryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CustomerPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ExchangeRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\MonetaryTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\OrderLineType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentMeansType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ProjectReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransactionConditionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CopyIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomerReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomizationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineCountNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PricingCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileExecutionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RequestedInvoiceCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SalesOrderIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Version;

/**
 * Class Order
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\MainDoc
 *
 * @method CustomizationIDType getCustomizationID()
 * @method self setCustomizationID(CustomizationIDType|string $value)
 * @method ProfileIDType getProfileID()
 * @method self setProfileID(ProfileIDType|string $value)
 * @method ProfileExecutionIDType getProfileExecutionID()
 * @method self setProfileExecutionID(ProfileExecutionIDType|string $value)
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method SalesOrderIDType getSalesOrderID()
 * @method self setSalesOrderID(SalesOrderIDType|string $value)
 * @method CopyIndicatorType getCopyIndicator()
 * @method self setCopyIndicator(CopyIndicatorType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method OrderTypeCodeType getOrderTypeCode()
 * @method self setOrderTypeCode(OrderTypeCodeType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method RequestedInvoiceCurrencyCodeType getRequestedInvoiceCurrencyCode()
 * @method self setRequestedInvoiceCurrencyCode(RequestedInvoiceCurrencyCodeType|string $value)
 * @method DocumentCurrencyCodeType getDocumentCurrencyCode()
 * @method self setDocumentCurrencyCode(DocumentCurrencyCodeType|string $value)
 * @method PricingCurrencyCodeType getPricingCurrencyCode()
 * @method self setPricingCurrencyCode(PricingCurrencyCodeType|string $value)
 * @method TaxCurrencyCodeType getTaxCurrencyCode()
 * @method self setTaxCurrencyCode(TaxCurrencyCodeType|string $value)
 * @method CustomerReferenceType getCustomerReference()
 * @method self setCustomerReference(CustomerReferenceType|string $value)
 * @method AccountingCostCodeType getAccountingCostCode()
 * @method self setAccountingCostCode(AccountingCostCodeType|string $value)
 * @method AccountingCostType getAccountingCost()
 * @method self setAccountingCost(AccountingCostType|string $value)
 * @method LineCountNumericType getLineCountNumeric()
 * @method self setLineCountNumeric(LineCountNumericType|string $value)
 * @method PeriodType getValidityPeriod()
 * @method self addValidityPeriod(PeriodType $value)
 * @method self setValidityPeriod(PeriodType ...$values)
 * @method DocumentReferenceType getQuotationDocumentReference()
 * @method self setQuotationDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getOrderDocumentReference()
 * @method self addOrderDocumentReference(DocumentReferenceType $value)
 * @method self setOrderDocumentReference(DocumentReferenceType ...$values)
 * @method DocumentReferenceType getOriginatorDocumentReference()
 * @method self setOriginatorDocumentReference(DocumentReferenceType $value)
 * @method CatalogueReferenceType getCatalogueReference()
 * @method self setCatalogueReference(CatalogueReferenceType $value)
 * @method DocumentReferenceType getAdditionalDocumentReference()
 * @method self addAdditionalDocumentReference(DocumentReferenceType $value)
 * @method self setAdditionalDocumentReference(DocumentReferenceType ...$values)
 * @method ContractType getContract()
 * @method self addContract(ContractType $value)
 * @method self setContract(ContractType ...$values)
 * @method ProjectReferenceType getProjectReference()
 * @method self addProjectReference(ProjectReferenceType $value)
 * @method self setProjectReference(ProjectReferenceType ...$values)
 * @method SignatureType getSignature()
 * @method self addSignature(SignatureType $value)
 * @method self setSignature(SignatureType ...$values)
 * @method CustomerPartyType getBuyerCustomerParty()
 * @method self setBuyerCustomerParty(CustomerPartyType $value)
 * @method SupplierPartyType getSellerSupplierParty()
 * @method self setSellerSupplierParty(SupplierPartyType $value)
 * @method CustomerPartyType getOriginatorCustomerParty()
 * @method self setOriginatorCustomerParty(CustomerPartyType $value)
 * @method PartyType getFreightForwarderParty()
 * @method self setFreightForwarderParty(PartyType $value)
 * @method CustomerPartyType getAccountingCustomerParty()
 * @method self setAccountingCustomerParty(CustomerPartyType $value)
 * @method DeliveryType getDelivery()
 * @method self addDelivery(DeliveryType $value)
 * @method self setDelivery(DeliveryType ...$values)
 * @method DeliveryTermsType getDeliveryTerms()
 * @method self addDeliveryTerms(DeliveryTermsType $value)
 * @method self setDeliveryTerms(DeliveryTermsType ...$values)
 * @method PaymentMeansType getPaymentMeans()
 * @method self addPaymentMeans(PaymentMeansType $value)
 * @method self setPaymentMeans(PaymentMeansType ...$values)
 * @method PaymentTermsType getPaymentTerms()
 * @method self addPaymentTerms(PaymentTermsType $value)
 * @method self setPaymentTerms(PaymentTermsType ...$values)
 * @method TransactionConditionsType getTransactionConditions()
 * @method self setTransactionConditions(TransactionConditionsType $value)
 * @method AllowanceChargeType getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method ExchangeRateType getTaxExchangeRate()
 * @method self setTaxExchangeRate(ExchangeRateType $value)
 * @method ExchangeRateType getPricingExchangeRate()
 * @method self setPricingExchangeRate(ExchangeRateType $value)
 * @method ExchangeRateType getPaymentExchangeRate()
 * @method self setPaymentExchangeRate(ExchangeRateType $value)
 * @method CountryType getDestinationCountry()
 * @method self setDestinationCountry(CountryType $value)
 * @method TaxTotalType getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method MonetaryTotalType getAnticipatedMonetaryTotal()
 * @method self setAnticipatedMonetaryTotal(MonetaryTotalType $value)
 * @method OrderLineType getOrderLine()
 * @method self addOrderLine(OrderLineType $value)
 * @method self setOrderLine(OrderLineType ...$values)
 */
class Order extends MainDoc
{
    protected $UBLVersionID = Version::VERSION_CODE;
    protected $xmlns = "urn:oasis:names:specification:ubl:schema:xsd:Order-2";

    protected $casts = [
        "cbc:CustomizationID" => CustomizationIDType::class,
        "cbc:ProfileID" => ProfileIDType::class,
        "cbc:ProfileExecutionID" => ProfileExecutionIDType::class,
        "cbc:ID" => IDType::class,
        "cbc:SalesOrderID" => SalesOrderIDType::class,
        "cbc:CopyIndicator" => CopyIndicatorType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:OrderTypeCode" => OrderTypeCodeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:RequestedInvoiceCurrencyCode" => RequestedInvoiceCurrencyCodeType::class,
        "cbc:DocumentCurrencyCode" => DocumentCurrencyCodeType::class,
        "cbc:PricingCurrencyCode" => PricingCurrencyCodeType::class,
        "cbc:TaxCurrencyCode" => TaxCurrencyCodeType::class,
        "cbc:CustomerReference" => CustomerReferenceType::class,
        "cbc:AccountingCostCode" => AccountingCostCodeType::class,
        "cbc:AccountingCost" => AccountingCostType::class,
        "cbc:LineCountNumeric" => LineCountNumericType::class,
        "cac:ValidityPeriod" => PeriodType::class . "[]",
        "cac:QuotationDocumentReference" => DocumentReferenceType::class,
        "cac:OrderDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:OriginatorDocumentReference" => DocumentReferenceType::class,
        "cac:CatalogueReference" => CatalogueReferenceType::class,
        "cac:AdditionalDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Contract" => ContractType::class . "[]",
        "cac:ProjectReference" => ProjectReferenceType::class . "[]",
        "cac:Signature" => SignatureType::class . "[]",
        "cac:BuyerCustomerParty" => CustomerPartyType::class,
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:OriginatorCustomerParty" => CustomerPartyType::class,
        "cac:FreightForwarderParty" => PartyType::class,
        "cac:AccountingCustomerParty" => CustomerPartyType::class,
        "cac:Delivery" => DeliveryType::class . "[]",
        "cac:DeliveryTerms" => DeliveryTermsType::class . "[]",
        "cac:PaymentMeans" => PaymentMeansType::class . "[]",
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
        "cac:TransactionConditions" => TransactionConditionsType::class,
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxExchangeRate" => ExchangeRateType::class,
        "cac:PricingExchangeRate" => ExchangeRateType::class,
        "cac:PaymentExchangeRate" => ExchangeRateType::class,
        "cac:DestinationCountry" => CountryType::class,
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:AnticipatedMonetaryTotal" => MonetaryTotalType::class,
        "cac:OrderLine" => OrderLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:IssueDate" => 1,
        "cac:BuyerCustomerParty" => 1,
        "cac:SellerSupplierParty" => 1,
        "cac:OrderLine" => 1,
    ];
}