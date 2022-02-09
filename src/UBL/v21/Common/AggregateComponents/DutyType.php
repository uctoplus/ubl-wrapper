<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DutyCodeType;

/**
 * Class DutyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method DutyType getDuty()
 * @method self setDuty(DutyType|string $value)
 * @method DutyCodeType getDutyCode()
 * @method self setDutyCode(DutyCodeType|string $value)
 * @method TaxCategoryType getTaxCategory()
 * @method self setTaxCategory(TaxCategoryType $value)
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