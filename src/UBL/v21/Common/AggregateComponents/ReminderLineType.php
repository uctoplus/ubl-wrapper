<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UUIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BalanceBroughtForwardIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DebitLineAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CreditLineAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PenaltySurchargePercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\BillingReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ExchangeRateType;

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
 * @method mixed getAccountingCostCode()
 * @method self setAccountingCostCode($value)
 * @method mixed getAccountingCost()
 * @method self setAccountingCost($value)
 * @method mixed getPenaltySurchargePercent()
 * @method self setPenaltySurchargePercent($value)
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getPaymentPurposeCode()
 * @method self setPaymentPurposeCode($value)
 * @method mixed getReminderPeriod()
 * @method self setReminderPeriod($value)
 * @method mixed getBillingReference()
 * @method self setBillingReference($value)
 * @method mixed getExchangeRate()
 * @method self setExchangeRate($value)
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