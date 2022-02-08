<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalAmountType;

/**
 * Class BudgetAccountLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getTotalAmount()
 * @method self setTotalAmount($value)
 * @method mixed getBudgetAccount()
 * @method self addBudgetAccount($value)
 * @method self setBudgetAccount($value)
 */
class BudgetAccountLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:TotalAmount" => TotalAmountType::class,
        "cac:BudgetAccount" => BudgetAccountType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}