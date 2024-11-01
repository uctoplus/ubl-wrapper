<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StatusCodeType;

/**
 * Class PriceListType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method StatusCodeType getStatusCode()
 * @method self setStatusCode(StatusCodeType|string $value)
 * @method PeriodType[] getValidityPeriod()
 * @method self addValidityPeriod(PeriodType $value)
 * @method self setValidityPeriod(PeriodType ...$values)
 * @method PriceListType getPreviousPriceList()
 * @method self setPreviousPriceList(PriceListType $value)
 */
class PriceListType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:StatusCode" => StatusCodeType::class,
        "cac:ValidityPeriod" => PeriodType::class . "[]",
        "cac:PreviousPriceList" => PriceListType::class,
    ];

    protected $minOccurs = [
    ];
}