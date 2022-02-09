<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FrozenDocumentIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;

/**
 * Class ForecastLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NoteType getNote()
 * @method self addNote(NoteType|string $value)
 * @method self setNote(NoteType ...$values)
 * @method FrozenDocumentIndicatorType getFrozenDocumentIndicator()
 * @method self setFrozenDocumentIndicator(FrozenDocumentIndicatorType|string $value)
 * @method ForecastTypeCodeType getForecastTypeCode()
 * @method self setForecastTypeCode(ForecastTypeCodeType|string $value)
 * @method PeriodType getForecastPeriod()
 * @method self setForecastPeriod(PeriodType $value)
 * @method SalesItemType getSalesItem()
 * @method self setSalesItem(SalesItemType $value)
 */
class ForecastLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cbc:FrozenDocumentIndicator" => FrozenDocumentIndicatorType::class,
        "cbc:ForecastTypeCode" => ForecastTypeCodeType::class,
        "cac:ForecastPeriod" => PeriodType::class,
        "cac:SalesItem" => SalesItemType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:ForecastTypeCode" => 1,
    ];
}