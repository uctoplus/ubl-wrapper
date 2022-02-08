<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimeFrequencyCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplyChainActivityTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceMetricTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SalesItemType;

/**
 *
 * @method mixed getTimeFrequencyCode()
 * @method self setTimeFrequencyCode($value)
 * @method mixed getSupplyChainActivityTypeCode()
 * @method self setSupplyChainActivityTypeCode($value)
 * @method mixed getForecastTypeCode()
 * @method self setForecastTypeCode($value)
 * @method mixed getPerformanceMetricTypeCode()
 * @method self setPerformanceMetricTypeCode($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
 * @method mixed getSalesItem()
 * @method self setSalesItem($value)
 */
class ItemInformationRequestLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:TimeFrequencyCode" => TimeFrequencyCodeType::class,
        "cbc:SupplyChainActivityTypeCode" => SupplyChainActivityTypeCodeType::class,
        "cbc:ForecastTypeCode" => ForecastTypeCodeType::class,
        "cbc:PerformanceMetricTypeCode" => PerformanceMetricTypeCodeType::class,
        "cac:Period" => PeriodType::class . "[]",
        "cac:SalesItem" => SalesItemType::class . "[]",
    ];

    protected $minOccurs = [
        "cac:Period" => 1,
        "cac:SalesItem" => 1,
    ];
}