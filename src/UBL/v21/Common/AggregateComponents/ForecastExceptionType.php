<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparisonDataCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparisonForecastIssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ComparisonForecastIssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DataSourceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastPurposeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueTimeType;

/**
 * Class ForecastExceptionType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ForecastPurposeCodeType getForecastPurposeCode()
 * @method self setForecastPurposeCode(ForecastPurposeCodeType|string $value)
 * @method ForecastTypeCodeType getForecastTypeCode()
 * @method self setForecastTypeCode(ForecastTypeCodeType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method IssueTimeType getIssueTime()
 * @method self setIssueTime(IssueTimeType|string $value)
 * @method DataSourceCodeType getDataSourceCode()
 * @method self setDataSourceCode(DataSourceCodeType|string $value)
 * @method ComparisonDataCodeType getComparisonDataCode()
 * @method self setComparisonDataCode(ComparisonDataCodeType|string $value)
 * @method ComparisonForecastIssueTimeType getComparisonForecastIssueTime()
 * @method self setComparisonForecastIssueTime(ComparisonForecastIssueTimeType|string $value)
 * @method ComparisonForecastIssueDateType getComparisonForecastIssueDate()
 * @method self setComparisonForecastIssueDate(ComparisonForecastIssueDateType|string $value)
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