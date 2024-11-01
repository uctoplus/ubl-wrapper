<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdjustmentReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RevisedForecastLineIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceForecastIssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SourceForecastIssueTimeType;

/**
 * Class ForecastRevisionLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType[] getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method RevisedForecastLineIDType getRevisedForecastLineID()
 * @method self setRevisedForecastLineID(RevisedForecastLineIDType|string $value)
 * @method SourceForecastIssueDateType getSourceForecastIssueDate()
 * @method self setSourceForecastIssueDate(SourceForecastIssueDateType|string $value)
 * @method SourceForecastIssueTimeType getSourceForecastIssueTime()
 * @method self setSourceForecastIssueTime(SourceForecastIssueTimeType|string $value)
 * @method AdjustmentReasonCodeType getAdjustmentReasonCode()
 * @method self setAdjustmentReasonCode(AdjustmentReasonCodeType|string $value)
 * @method PeriodType getForecastPeriod()
 * @method self setForecastPeriod(PeriodType $value)
 * @method SalesItemType getSalesItem()
 * @method self setSalesItem(SalesItemType $value)
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