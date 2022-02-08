<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BudgetYearNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class BudgetAccountType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getBudgetYearNumeric()
 * @method self setBudgetYearNumeric($value)
 * @method mixed getRequiredClassificationScheme()
 * @method self setRequiredClassificationScheme($value)
 */
class BudgetAccountType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:BudgetYearNumeric" => BudgetYearNumericType::class,
        "cac:RequiredClassificationScheme" => ClassificationSchemeType::class,
    ];

    protected $minOccurs = [
    ];
}