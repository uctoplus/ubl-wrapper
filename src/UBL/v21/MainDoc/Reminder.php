<?php

namespace Uctoplus\UblWrapper\UBL\v21\MainDoc;

use Uctoplus\UblWrapper\UBL\Schema\MainDoc;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\CustomerPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ExchangeRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\MonetaryTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentMeansType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentTermsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PaymentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ReminderLineType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SignatureType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SupplierPartyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CopyIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CustomizationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DocumentCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineCountNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentAlternativeCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PricingCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileExecutionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProfileIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReminderSequenceNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReminderTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxCurrencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxPointDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Version;

/**
 * Class Reminder
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
 * @method ReminderTypeCodeType getReminderTypeCode()
 * @method self setReminderTypeCode(ReminderTypeCodeType|string $value)
 * @method ReminderSequenceNumericType getReminderSequenceNumeric()
 * @method self setReminderSequenceNumeric(ReminderSequenceNumericType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method TaxPointDateType getTaxPointDate()
 * @method self setTaxPointDate(TaxPointDateType|string $value)
 * @method DocumentCurrencyCodeType getDocumentCurrencyCode()
 * @method self setDocumentCurrencyCode(DocumentCurrencyCodeType|string $value)
 * @method TaxCurrencyCodeType getTaxCurrencyCode()
 * @method self setTaxCurrencyCode(TaxCurrencyCodeType|string $value)
 * @method PricingCurrencyCodeType getPricingCurrencyCode()
 * @method self setPricingCurrencyCode(PricingCurrencyCodeType|string $value)
 * @method PaymentCurrencyCodeType getPaymentCurrencyCode()
 * @method self setPaymentCurrencyCode(PaymentCurrencyCodeType|string $value)
 * @method PaymentAlternativeCurrencyCodeType getPaymentAlternativeCurrencyCode()
 * @method self setPaymentAlternativeCurrencyCode(PaymentAlternativeCurrencyCodeType|string $value)
 * @method AccountingCostCodeType getAccountingCostCode()
 * @method self setAccountingCostCode(AccountingCostCodeType|string $value)
 * @method AccountingCostType getAccountingCost()
 * @method self setAccountingCost(AccountingCostType|string $value)
 * @method LineCountNumericType getLineCountNumeric()
 * @method self setLineCountNumeric(LineCountNumericType|string $value)
 * @method PeriodType getReminderPeriod()
 * @method self addReminderPeriod(PeriodType $value)
 * @method self setReminderPeriod(PeriodType ...$values)
 * @method DocumentReferenceType getAdditionalDocumentReference()
 * @method self addAdditionalDocumentReference(DocumentReferenceType $value)
 * @method self setAdditionalDocumentReference(DocumentReferenceType ...$values)
 * @method SignatureType getSignature()
 * @method self addSignature(SignatureType $value)
 * @method self setSignature(SignatureType ...$values)
 * @method SupplierPartyType getAccountingSupplierParty()
 * @method self setAccountingSupplierParty(SupplierPartyType $value)
 * @method CustomerPartyType getAccountingCustomerParty()
 * @method self setAccountingCustomerParty(CustomerPartyType $value)
 * @method PartyType getPayeeParty()
 * @method self setPayeeParty(PartyType $value)
 * @method PartyType getTaxRepresentativeParty()
 * @method self setTaxRepresentativeParty(PartyType $value)
 * @method PaymentMeansType getPaymentMeans()
 * @method self addPaymentMeans(PaymentMeansType $value)
 * @method self setPaymentMeans(PaymentMeansType ...$values)
 * @method PaymentTermsType getPaymentTerms()
 * @method self addPaymentTerms(PaymentTermsType $value)
 * @method self setPaymentTerms(PaymentTermsType ...$values)
 * @method PaymentType getPrepaidPayment()
 * @method self addPrepaidPayment(PaymentType $value)
 * @method self setPrepaidPayment(PaymentType ...$values)
 * @method AllowanceChargeType getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method ExchangeRateType getTaxExchangeRate()
 * @method self setTaxExchangeRate(ExchangeRateType $value)
 * @method ExchangeRateType getPricingExchangeRate()
 * @method self setPricingExchangeRate(ExchangeRateType $value)
 * @method ExchangeRateType getPaymentExchangeRate()
 * @method self setPaymentExchangeRate(ExchangeRateType $value)
 * @method ExchangeRateType getPaymentAlternativeExchangeRate()
 * @method self setPaymentAlternativeExchangeRate(ExchangeRateType $value)
 * @method TaxTotalType getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method MonetaryTotalType getLegalMonetaryTotal()
 * @method self setLegalMonetaryTotal(MonetaryTotalType $value)
 * @method ReminderLineType getReminderLine()
 * @method self addReminderLine(ReminderLineType $value)
 * @method self setReminderLine(ReminderLineType ...$values)
 */
class Reminder extends MainDoc
{
    protected $UBLVersionID = Version::VERSION_CODE;
    protected $xmlns = "urn:oasis:names:specification:ubl:schema:xsd:Reminder-2";

    protected $casts = [
        "cbc:CustomizationID" => CustomizationIDType::class,
        "cbc:ProfileID" => ProfileIDType::class,
        "cbc:ProfileExecutionID" => ProfileExecutionIDType::class,
        "cbc:ID" => IDType::class,
        "cbc:CopyIndicator" => CopyIndicatorType::class,
        "cbc:UUID" => UUIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:ReminderTypeCode" => ReminderTypeCodeType::class,
        "cbc:ReminderSequenceNumeric" => ReminderSequenceNumericType::class,
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
        "cac:ReminderPeriod" => PeriodType::class . "[]",
        "cac:AdditionalDocumentReference" => DocumentReferenceType::class . "[]",
        "cac:Signature" => SignatureType::class . "[]",
        "cac:AccountingSupplierParty" => SupplierPartyType::class,
        "cac:AccountingCustomerParty" => CustomerPartyType::class,
        "cac:PayeeParty" => PartyType::class,
        "cac:TaxRepresentativeParty" => PartyType::class,
        "cac:PaymentMeans" => PaymentMeansType::class . "[]",
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
        "cac:PrepaidPayment" => PaymentType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxExchangeRate" => ExchangeRateType::class,
        "cac:PricingExchangeRate" => ExchangeRateType::class,
        "cac:PaymentExchangeRate" => ExchangeRateType::class,
        "cac:PaymentAlternativeExchangeRate" => ExchangeRateType::class,
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:LegalMonetaryTotal" => MonetaryTotalType::class,
        "cac:ReminderLine" => ReminderLineType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:IssueDate" => 1,
        "cac:AccountingSupplierParty" => 1,
        "cac:AccountingCustomerParty" => 1,
        "cac:LegalMonetaryTotal" => 1,
        "cac:ReminderLine" => 1,
    ];
}