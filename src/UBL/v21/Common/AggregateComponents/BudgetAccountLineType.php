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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method TotalAmountType getTotalAmount()
 * @method self setTotalAmount(TotalAmountType|string $value)
 * @method BudgetAccountType getBudgetAccount()
 * @method self addBudgetAccount(BudgetAccountType $value)
 * @method self setBudgetAccount(BudgetAccountType ...$values)
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