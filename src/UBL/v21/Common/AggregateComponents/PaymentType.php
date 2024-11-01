<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstructionIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaidAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaidDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaidTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedDateType;

/**
 * Class PaymentType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method PaidAmountType getPaidAmount()
 * @method self setPaidAmount(PaidAmountType|string $value)
 * @method ReceivedDateType getReceivedDate()
 * @method self setReceivedDate(ReceivedDateType|string $value)
 * @method PaidDateType getPaidDate()
 * @method self setPaidDate(PaidDateType|string $value)
 * @method PaidTimeType getPaidTime()
 * @method self setPaidTime(PaidTimeType|string $value)
 * @method InstructionIDType getInstructionID()
 * @method self setInstructionID(InstructionIDType|string $value)
 */
class PaymentType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:PaidAmount" => PaidAmountType::class,
        "cbc:ReceivedDate" => ReceivedDateType::class,
        "cbc:PaidDate" => PaidDateType::class,
        "cbc:PaidTime" => PaidTimeType::class,
        "cbc:InstructionID" => InstructionIDType::class,
    ];

    protected $minOccurs = [
    ];
}