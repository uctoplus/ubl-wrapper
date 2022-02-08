<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RevisedForecastLineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceForecastIssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceForecastIssueTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdjustmentReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SalesItemType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getRevisedForecastLineID()
 * @method self setRevisedForecastLineID($value)
 * @method mixed getSourceForecastIssueDate()
 * @method self setSourceForecastIssueDate($value)
 * @method mixed getSourceForecastIssueTime()
 * @method self setSourceForecastIssueTime($value)
 * @method mixed getAdjustmentReasonCode()
 * @method self setAdjustmentReasonCode($value)
 * @method mixed getForecastPeriod()
 * @method self setForecastPeriod($value)
 * @method mixed getSalesItem()
 * @method self setSalesItem($value)
 */
class ForecastRevisionLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:RevisedForecastLineID" => RevisedForecastLineIDType::class,
        "cbc:SourceForecastIssueDate" => SourceForecastIssueDateType::class,
        "cbc:SourceForecastIssueTime" => SourceForecastIssueTimeType::class,
        "cbc:AdjustmentReasonCode" => AdjustmentReasonCodeType::class,
        "cac:ForecastPeriod" => PeriodType::class,
        "cac:SalesItem" => SalesItemType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:RevisedForecastLineID" => 1,
        "cbc:SourceForecastIssueDate" => 1,
        "cbc:SourceForecastIssueTime" => 1,
    ];
}