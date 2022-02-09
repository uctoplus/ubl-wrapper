<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstructionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstructionNoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentChannelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentDueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentMeansCodeType;

/**
 * Class PaymentMeansType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method PaymentMeansCodeType getPaymentMeansCode()
 * @method self setPaymentMeansCode(PaymentMeansCodeType|string $value)
 * @method PaymentDueDateType getPaymentDueDate()
 * @method self setPaymentDueDate(PaymentDueDateType|string $value)
 * @method PaymentChannelCodeType getPaymentChannelCode()
 * @method self setPaymentChannelCode(PaymentChannelCodeType|string $value)
 * @method InstructionIDType getInstructionID()
 * @method self setInstructionID(InstructionIDType|string $value)
 * @method InstructionNoteType getInstructionNote()
 * @method self addInstructionNote(InstructionNoteType|string $value)
 * @method self setInstructionNote(InstructionNoteType ...$values)
 * @method PaymentIDType getPaymentID()
 * @method self addPaymentID(PaymentIDType|string $value)
 * @method self setPaymentID(PaymentIDType ...$values)
 * @method CardAccountType getCardAccount()
 * @method self setCardAccount(CardAccountType $value)
 * @method FinancialAccountType getPayerFinancialAccount()
 * @method self setPayerFinancialAccount(FinancialAccountType $value)
 * @method FinancialAccountType getPayeeFinancialAccount()
 * @method self setPayeeFinancialAccount(FinancialAccountType $value)
 * @method CreditAccountType getCreditAccount()
 * @method self setCreditAccount(CreditAccountType $value)
 * @method PaymentMandateType getPaymentMandate()
 * @method self setPaymentMandate(PaymentMandateType $value)
 * @method TradeFinancingType getTradeFinancing()
 * @method self setTradeFinancing(TradeFinancingType $value)
 */
class PaymentMeansType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:PaymentMeansCode" => PaymentMeansCodeType::class,
        "cbc:PaymentDueDate" => PaymentDueDateType::class,
        "cbc:PaymentChannelCode" => PaymentChannelCodeType::class,
        "cbc:InstructionID" => InstructionIDType::class,
        "cbc:InstructionNote" => InstructionNoteType::class . "[]",
        "cbc:PaymentID" => PaymentIDType::class . "[]",
        "cac:CardAccount" => CardAccountType::class,
        "cac:PayerFinancialAccount" => FinancialAccountType::class,
        "cac:PayeeFinancialAccount" => FinancialAccountType::class,
        "cac:CreditAccount" => CreditAccountType::class,
        "cac:PaymentMandate" => PaymentMandateType::class,
        "cac:TradeFinancing" => TradeFinancingType::class,
    ];

    protected $minOccurs = [
        "cbc:PaymentMeansCode" => 1,
    ];
}