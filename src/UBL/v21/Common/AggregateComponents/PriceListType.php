<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StatusCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getStatusCode()
 * @method self setStatusCode($value)
 * @method mixed getValidityPeriod()
 * @method self setValidityPeriod($value)
 * @method mixed getPreviousPriceList()
 * @method self setPreviousPriceList($value)
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