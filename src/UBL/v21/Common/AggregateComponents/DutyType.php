<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DutyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxCategoryType;

/**
 *
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getDuty()
 * @method self setDuty($value)
 * @method mixed getDutyCode()
 * @method self setDutyCode($value)
 * @method mixed getTaxCategory()
 * @method self setTaxCategory($value)
 */
class DutyType extends AggregateComponent
{
    protected $casts = [
        "cbc:Amount" => AmountType::class,
        "cbc:Duty" => DutyType::class,
        "cbc:DutyCode" => DutyCodeType::class,
        "cac:TaxCategory" => TaxCategoryType::class,
    ];

    protected $minOccurs = [
        "cbc:Amount" => 1,
    ];
}