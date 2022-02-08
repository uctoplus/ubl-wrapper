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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getPaymentMeansCode()
 * @method self setPaymentMeansCode($value)
 * @method mixed getPaymentDueDate()
 * @method self setPaymentDueDate($value)
 * @method mixed getPaymentChannelCode()
 * @method self setPaymentChannelCode($value)
 * @method mixed getInstructionID()
 * @method self setInstructionID($value)
 * @method mixed getInstructionNote()
 * @method self addInstructionNote($value)
 * @method self setInstructionNote($value)
 * @method mixed getPaymentID()
 * @method self addPaymentID($value)
 * @method self setPaymentID($value)
 * @method mixed getCardAccount()
 * @method self setCardAccount($value)
 * @method mixed getPayerFinancialAccount()
 * @method self setPayerFinancialAccount($value)
 * @method mixed getPayeeFinancialAccount()
 * @method self setPayeeFinancialAccount($value)
 * @method mixed getCreditAccount()
 * @method self setCreditAccount($value)
 * @method mixed getPaymentMandate()
 * @method self setPaymentMandate($value)
 * @method mixed getTradeFinancing()
 * @method self setTradeFinancing($value)
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