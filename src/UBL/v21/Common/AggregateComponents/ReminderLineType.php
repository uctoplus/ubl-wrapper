<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BalanceBroughtForwardIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CreditLineAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DebitLineAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PenaltySurchargePercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;

/**
 * Class ReminderLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method UUIDType getUUID()
 * @method self setUUID(UUIDType|string $value)
 * @method BalanceBroughtForwardIndicatorType getBalanceBroughtForwardIndicator()
 * @method self setBalanceBroughtForwardIndicator(BalanceBroughtForwardIndicatorType|string $value)
 * @method DebitLineAmountType getDebitLineAmount()
 * @method self setDebitLineAmount(DebitLineAmountType|string $value)
 * @method CreditLineAmountType getCreditLineAmount()
 * @method self setCreditLineAmount(CreditLineAmountType|string $value)
 * @method AccountingCostCodeType getAccountingCostCode()
 * @method self setAccountingCostCode(AccountingCostCodeType|string $value)
 * @method AccountingCostType getAccountingCost()
 * @method self setAccountingCost(AccountingCostType|string $value)
 * @method PenaltySurchargePercentType getPenaltySurchargePercent()
 * @method self setPenaltySurchargePercent(PenaltySurchargePercentType|string $value)
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method PaymentPurposeCodeType getPaymentPurposeCode()
 * @method self setPaymentPurposeCode(PaymentPurposeCodeType|string $value)
 * @method PeriodType[] getReminderPeriod()
 * @method self addReminderPeriod(PeriodType $value)
 * @method self setReminderPeriod(PeriodType ...$values)
 * @method BillingReferenceType[] getBillingReference()
 * @method self addBillingReference(BillingReferenceType $value)
 * @method self setBillingReference(BillingReferenceType ...$values)
 * @method ExchangeRateType getExchangeRate()
 * @method self setExchangeRate(ExchangeRateType $value)
 */
class ReminderLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:UUID" => UUIDType::class,
        "cbc:BalanceBroughtForwardIndicator" => BalanceBroughtForwardIndicatorType::class,
        "cbc:DebitLineAmount" => DebitLineAmountType::class,
        "cbc:CreditLineAmount" => CreditLineAmountType::class,
        "cbc:AccountingCostCode" => AccountingCostCodeType::class,
        "cbc:AccountingCost" => AccountingCostType::class,
        "cbc:PenaltySurchargePercent" => PenaltySurchargePercentType::class,
        "cbc:Amount" => AmountType::class,
        "cbc:PaymentPurposeCode" => PaymentPurposeCodeType::class,
        "cac:ReminderPeriod" => PeriodType::class . "[]",
        "cac:BillingReference" => BillingReferenceType::class . "[]",
        "cac:ExchangeRate" => ExchangeRateType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}