<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DataSourceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparisonDataCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparisonForecastIssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparisonForecastIssueDateType;

/**
 *
 * @method mixed getForecastPurposeCode()
 * @method self setForecastPurposeCode($value)
 * @method mixed getForecastTypeCode()
 * @method self setForecastTypeCode($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getIssueTime()
 * @method self setIssueTime($value)
 * @method mixed getDataSourceCode()
 * @method self setDataSourceCode($value)
 * @method mixed getComparisonDataCode()
 * @method self setComparisonDataCode($value)
 * @method mixed getComparisonForecastIssueTime()
 * @method self setComparisonForecastIssueTime($value)
 * @method mixed getComparisonForecastIssueDate()
 * @method self setComparisonForecastIssueDate($value)
 */
class ForecastExceptionType extends AggregateComponent
{
    protected $casts = [
        "cbc:ForecastPurposeCode" => ForecastPurposeCodeType::class,
        "cbc:ForecastTypeCode" => ForecastTypeCodeType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:IssueTime" => IssueTimeType::class,
        "cbc:DataSourceCode" => DataSourceCodeType::class,
        "cbc:ComparisonDataCode" => ComparisonDataCodeType::class,
        "cbc:ComparisonForecastIssueTime" => ComparisonForecastIssueTimeType::class,
        "cbc:ComparisonForecastIssueDate" => ComparisonForecastIssueDateType::class,
    ];

    protected $minOccurs = [
        "cbc:ForecastPurposeCode" => 1,
        "cbc:ForecastTypeCode" => 1,
        "cbc:IssueDate" => 1,
        "cbc:DataSourceCode" => 1,
    ];
}