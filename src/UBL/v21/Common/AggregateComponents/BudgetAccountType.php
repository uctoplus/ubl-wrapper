<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BudgetYearNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class BudgetAccountType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method BudgetYearNumericType getBudgetYearNumeric()
 * @method self setBudgetYearNumeric(BudgetYearNumericType|string $value)
 * @method ClassificationSchemeType getRequiredClassificationScheme()
 * @method self setRequiredClassificationScheme(ClassificationSchemeType $value)
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