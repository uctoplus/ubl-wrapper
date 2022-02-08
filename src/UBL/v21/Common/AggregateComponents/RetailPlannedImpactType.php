<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastTypeCodeType;

/**
 * Class RetailPlannedImpactType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getForecastPurposeCode()
 * @method self setForecastPurposeCode($value)
 * @method mixed getForecastTypeCode()
 * @method self setForecastTypeCode($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
 */
class RetailPlannedImpactType extends AggregateComponent
{
    protected $casts = [
        "cbc:Amount" => AmountType::class,
        "cbc:ForecastPurposeCode" => ForecastPurposeCodeType::class,
        "cbc:ForecastTypeCode" => ForecastTypeCodeType::class,
        "cac:Period" => PeriodType::class,
    ];

    protected $minOccurs = [
        "cbc:Amount" => 1,
        "cbc:ForecastPurposeCode" => 1,
        "cbc:ForecastTypeCode" => 1,
    ];
}