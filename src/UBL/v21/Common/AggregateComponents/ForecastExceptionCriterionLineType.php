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
 * @method mixed getForecastPurposeCode()
 * @method self setForecastPurposeCode($value)
 * @method mixed getForecastTypeCode()
 * @method self setForecastTypeCode($value)
 * @method mixed getComparisonDataSourceCode()
 * @method self setComparisonDataSourceCode($value)
 * @method mixed getDataSourceCode()
 * @method self setDataSourceCode($value)
 * @method mixed getTimeDeltaDaysQuantity()
 * @method self setTimeDeltaDaysQuantity($value)
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