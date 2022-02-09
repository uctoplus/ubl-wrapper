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
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method ForecastPurposeCodeType getForecastPurposeCode()
 * @method self setForecastPurposeCode(ForecastPurposeCodeType|string $value)
 * @method ForecastTypeCodeType getForecastTypeCode()
 * @method self setForecastTypeCode(ForecastTypeCodeType|string $value)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
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