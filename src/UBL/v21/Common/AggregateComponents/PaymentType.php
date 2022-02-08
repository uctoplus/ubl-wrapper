<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaidAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaidDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaidTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InstructionIDType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getPaidAmount()
 * @method self setPaidAmount($value)
 * @method mixed getReceivedDate()
 * @method self setReceivedDate($value)
 * @method mixed getPaidDate()
 * @method self setPaidDate($value)
 * @method mixed getPaidTime()
 * @method self setPaidTime($value)
 * @method mixed getInstructionID()
 * @method self setInstructionID($value)
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