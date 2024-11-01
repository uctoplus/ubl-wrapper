<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerformanceMetricTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SupplyChainActivityTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimeFrequencyCodeType;

/**
 * Class ItemInformationRequestLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TimeFrequencyCodeType getTimeFrequencyCode()
 * @method self setTimeFrequencyCode(TimeFrequencyCodeType|string $value)
 * @method SupplyChainActivityTypeCodeType getSupplyChainActivityTypeCode()
 * @method self setSupplyChainActivityTypeCode(SupplyChainActivityTypeCodeType|string $value)
 * @method ForecastTypeCodeType getForecastTypeCode()
 * @method self setForecastTypeCode(ForecastTypeCodeType|string $value)
 * @method PerformanceMetricTypeCodeType getPerformanceMetricTypeCode()
 * @method self setPerformanceMetricTypeCode(PerformanceMetricTypeCodeType|string $value)
 * @method PeriodType[] getPeriod()
 * @method self addPeriod(PeriodType $value)
 * @method self setPeriod(PeriodType ...$values)
 * @method SalesItemType[] getSalesItem()
 * @method self addSalesItem(SalesItemType $value)
 * @method self setSalesItem(SalesItemType ...$values)
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