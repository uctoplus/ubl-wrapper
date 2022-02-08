<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentMeansIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrepaidPaymentReferenceIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceEventCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SettlementDiscountPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PenaltySurchargePercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SettlementDiscountAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PenaltyAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentTermsDetailsURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentDueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstallmentDueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InvoicingPartyReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ExchangeRateType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getPaymentMeansID()
 * @method self setPaymentMeansID($value)
 * @method mixed getPrepaidPaymentReferenceID()
 * @method self setPrepaidPaymentReferenceID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getReferenceEventCode()
 * @method self setReferenceEventCode($value)
 * @method mixed getSettlementDiscountPercent()
 * @method self setSettlementDiscountPercent($value)
 * @method mixed getPenaltySurchargePercent()
 * @method self setPenaltySurchargePercent($value)
 * @method mixed getPaymentPercent()
 * @method self setPaymentPercent($value)
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getSettlementDiscountAmount()
 * @method self setSettlementDiscountAmount($value)
 * @method mixed getPenaltyAmount()
 * @method self setPenaltyAmount($value)
 * @method mixed getPaymentTermsDetailsURI()
 * @method self setPaymentTermsDetailsURI($value)
 * @method mixed getPaymentDueDate()
 * @method self setPaymentDueDate($value)
 * @method mixed getInstallmentDueDate()
 * @method self setInstallmentDueDate($value)
 * @method mixed getInvoicingPartyReference()
 * @method self setInvoicingPartyReference($value)
 * @method mixed getSettlementPeriod()
 * @method self setSettlementPeriod($value)
 * @method mixed getPenaltyPeriod()
 * @method self setPenaltyPeriod($value)
 * @method mixed getExchangeRate()
 * @method self setExchangeRate($value)
 * @method mixed getValidityPeriod()
 * @method self setValidityPeriod($value)
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