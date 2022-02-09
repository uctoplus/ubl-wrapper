<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparisonDataSourceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DataSourceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimeDeltaDaysQuantityType;

/**
 * Class ForecastExceptionCriterionLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ForecastPurposeCodeType getForecastPurposeCode()
 * @method self setForecastPurposeCode(ForecastPurposeCodeType|string $value)
 * @method ForecastTypeCodeType getForecastTypeCode()
 * @method self setForecastTypeCode(ForecastTypeCodeType|string $value)
 * @method ComparisonDataSourceCodeType getComparisonDataSourceCode()
 * @method self setComparisonDataSourceCode(ComparisonDataSourceCodeType|string $value)
 * @method DataSourceCodeType getDataSourceCode()
 * @method self setDataSourceCode(DataSourceCodeType|string $value)
 * @method TimeDeltaDaysQuantityType getTimeDeltaDaysQuantity()
 * @method self setTimeDeltaDaysQuantity(TimeDeltaDaysQuantityType|string $value)
 */
class ForecastExceptionCriterionLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ForecastPurposeCode" => ForecastPurposeCodeType::class,
        "cbc:ForecastTypeCode" => ForecastTypeCodeType::class,
        "cbc:ComparisonDataSourceCode" => ComparisonDataSourceCodeType::class,
        "cbc:DataSourceCode" => DataSourceCodeType::class,
        "cbc:TimeDeltaDaysQuantity" => TimeDeltaDaysQuantityType::class,
    ];

    protected $minOccurs = [
        "cbc:ForecastPurposeCode" => 1,
        "cbc:ForecastTypeCode" => 1,
        "cbc:DataSourceCode" => 1,
    ];
}