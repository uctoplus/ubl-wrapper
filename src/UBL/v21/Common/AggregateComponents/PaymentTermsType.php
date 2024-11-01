<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstallmentDueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InvoicingPartyReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentDueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentMeansIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentTermsDetailsURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PenaltyAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PenaltySurchargePercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrepaidPaymentReferenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceEventCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SettlementDiscountAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SettlementDiscountPercentType;

/**
 * Class PaymentTermsType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method PaymentMeansIDType[] getPaymentMeansID()
 * @method self addPaymentMeansID(PaymentMeansIDType|string $value)
 * @method self setPaymentMeansID(PaymentMeansIDType ...$values)
 * @method PrepaidPaymentReferenceIDType getPrepaidPaymentReferenceID()
 * @method self setPrepaidPaymentReferenceID(PrepaidPaymentReferenceIDType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method ReferenceEventCodeType getReferenceEventCode()
 * @method self setReferenceEventCode(ReferenceEventCodeType|string $value)
 * @method SettlementDiscountPercentType getSettlementDiscountPercent()
 * @method self setSettlementDiscountPercent(SettlementDiscountPercentType|string $value)
 * @method PenaltySurchargePercentType getPenaltySurchargePercent()
 * @method self setPenaltySurchargePercent(PenaltySurchargePercentType|string $value)
 * @method PaymentPercentType getPaymentPercent()
 * @method self setPaymentPercent(PaymentPercentType|string $value)
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method SettlementDiscountAmountType getSettlementDiscountAmount()
 * @method self setSettlementDiscountAmount(SettlementDiscountAmountType|string $value)
 * @method PenaltyAmountType getPenaltyAmount()
 * @method self setPenaltyAmount(PenaltyAmountType|string $value)
 * @method PaymentTermsDetailsURIType getPaymentTermsDetailsURI()
 * @method self setPaymentTermsDetailsURI(PaymentTermsDetailsURIType|string $value)
 * @method PaymentDueDateType getPaymentDueDate()
 * @method self setPaymentDueDate(PaymentDueDateType|string $value)
 * @method InstallmentDueDateType getInstallmentDueDate()
 * @method self setInstallmentDueDate(InstallmentDueDateType|string $value)
 * @method InvoicingPartyReferenceType getInvoicingPartyReference()
 * @method self setInvoicingPartyReference(InvoicingPartyReferenceType|string $value)
 * @method PeriodType getSettlementPeriod()
 * @method self setSettlementPeriod(PeriodType $value)
 * @method PeriodType getPenaltyPeriod()
 * @method self setPenaltyPeriod(PeriodType $value)
 * @method ExchangeRateType getExchangeRate()
 * @method self setExchangeRate(ExchangeRateType $value)
 * @method PeriodType getValidityPeriod()
 * @method self setValidityPeriod(PeriodType $value)
 */
class PaymentTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:PaymentMeansID" => PaymentMeansIDType::class . "[]",
        "cbc:PrepaidPaymentReferenceID" => PrepaidPaymentReferenceIDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:ReferenceEventCode" => ReferenceEventCodeType::class,
        "cbc:SettlementDiscountPercent" => SettlementDiscountPercentType::class,
        "cbc:PenaltySurchargePercent" => PenaltySurchargePercentType::class,
        "cbc:PaymentPercent" => PaymentPercentType::class,
        "cbc:Amount" => AmountType::class,
        "cbc:SettlementDiscountAmount" => SettlementDiscountAmountType::class,
        "cbc:PenaltyAmount" => PenaltyAmountType::class,
        "cbc:PaymentTermsDetailsURI" => PaymentTermsDetailsURIType::class,
        "cbc:PaymentDueDate" => PaymentDueDateType::class,
        "cbc:InstallmentDueDate" => InstallmentDueDateType::class,
        "cbc:InvoicingPartyReference" => InvoicingPartyReferenceType::class,
        "cac:SettlementPeriod" => PeriodType::class,
        "cac:PenaltyPeriod" => PeriodType::class,
        "cac:ExchangeRate" => ExchangeRateType::class,
        "cac:ValidityPeriod" => PeriodType::class,
    ];

    protected $minOccurs = [
    ];
}