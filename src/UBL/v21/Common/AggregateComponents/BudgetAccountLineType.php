<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\BudgetAccountType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getTotalAmount()
 * @method self setTotalAmount($value)
 * @method mixed getBudgetAccount()
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