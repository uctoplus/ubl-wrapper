<?php

namespace Uctoplus\UblWrapper\UBL\v21\MainDoc;

use Uctoplus\UblWrapper\UBL\Schema\MainDoc;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ContractType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CountryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CustomerPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\MonetaryTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentMeansType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\QuotationLineType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TransactionConditionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CopyIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomizationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineCountNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PricingCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileExecutionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Version;

/**
 * Class Quotation
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
 * @method CopyIndicatorType getCopyIndicator()
 * @method self setCopyIndicator(CopyIndicatorType|string $value)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method PricingCurrencyCodeType getPricingCurrencyCode()
 * @method self setPricingCurrencyCode(PricingCurrencyCodeType|string $value)
 * @method LineCountNumericType getLineCountNumeric()
 * @method self setLineCountNumeric(LineCountNumericType|string $value)
 * @method PeriodType getValidityPeriod()
 * @method self setValidityPeriod(PeriodType $value)
 * @method DocumentReferenceType getRequestForQuotationDocumentReference()
 * @method self setRequestForQuotationDocumentReference(DocumentReferenceType $value)
 * @method DocumentReferenceType getAdditionalDocumentReference()
 * @method self addAdditionalDocumentReference(DocumentReferenceType $value)
 * @method self setAdditionalDocumentReference(DocumentReferenceType ...$values)
 * @method ContractType getContract()
 * @method self addContract(ContractType $value)
 * @method self setContract(ContractType ...$values)
 * @method SignatureType getSignature()
 * @method self addSignature(SignatureType $value)
 * @method self setSignature(SignatureType ...$values)
 * @method SupplierPartyType getSellerSupplierParty()
 * @method self setSellerSupplierParty(SupplierPartyType $value)
 * @method CustomerPartyType getBuyerCustomerParty()
 * @method self setBuyerCustomerParty(CustomerPartyType $value)
 * @method CustomerPartyType getOriginatorCustomerParty()
 * @method self setOriginatorCustomerParty(CustomerPartyType $value)
 * @method DeliveryType getDelivery()
 * @method self addDelivery(DeliveryType $value)
 * @method self setDelivery(DeliveryType ...$values)
 * @method DeliveryTermsType getDeliveryTerms()
 * @method self setDeliveryTerms(DeliveryTermsType $value)
 * @method PaymentMeansType getPaymentMeans()
 * @method self setPaymentMeans(PaymentMeansType $value)
 * @method TransactionConditionsType getTransactionConditions()
 * @method self setTransactionConditions(TransactionConditionsType $value)
 * @method AllowanceChargeType getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method CountryType getDestinationCountry()
 * @method self setDestinationCountry(CountryType $value)
 * @method TaxTotalType getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method MonetaryTotalType getQuotedMonetaryTotal()
 * @method self setQuotedMonetaryTotal(MonetaryTotalType $value)
 * @method QuotationLineType getQuotationLine()
 * @method self addQuotationLine(QuotationLineType $value)
 * @method self setQuotationLine(QuotationLineType ...$values)
 */
class Quotation extends MainDoc
{
    protected $UBLVersionID = Version::VERSION_CODE;
    protected $xmlns = "urn:oasis:names:specification:ubl:schema:xsd:Quotation-2";

    protected $casts = [
        "cbc:CustomizationID" => CustomizationIDType::class,
        "cbc:ProfileID" => ProfileIDType::class,
        "cbc:ProfileExecutionID" => ProfileExecutionIDType::class,
        "cbc:ID" => IDType::class,
        "cbc:CopyIndicator" => CopyIndicatorType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:PricingCurrencyCode" => PricingCurrencyCodeType::class,
        "cbc:LineCountNumeric" => LineCountNumericType::class,
        "cac:ValidityPeriod" => PeriodType::class,
        "cac:RequestForQuotationDocumentReference" => DocumentReferenceType::class,
        "cac:AdditionalDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Contract" => ContractType::class . "[]",
        "cac:Signature" => SignatureType::class . "[]",
        "cac:SellerSupplierParty" => SupplierPartyType::class,
        "cac:BuyerCustomerParty" => CustomerPartyType::class,
        "cac:OriginatorCustomerParty" => CustomerPartyType::class,
        "cac:Delivery" => DeliveryType::class . "[]",
        "cac:DeliveryTerms" => DeliveryTermsType::class,
        "cac:PaymentMeans" => PaymentMeansType::class,
        "cac:TransactionConditions" => TransactionConditionsType::class,
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:DestinationCountry" => CountryType::class,
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:QuotedMonetaryTotal" => MonetaryTotalType::class,
        "cac:QuotationLine" => QuotationLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:IssueDate" => 1,
        "cac:SellerSupplierParty" => 1,
        "cac:QuotedMonetaryTotal" => 1,
        "cac:QuotationLine" => 1,
    ];
}