<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FrozenDocumentIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ForecastTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\SalesItemType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getNote()
 * @method self setNote($value)
 * @method mixed getFrozenDocumentIndicator()
 * @method self setFrozenDocumentIndicator($value)
 * @method mixed getForecastTypeCode()
 * @method self setForecastTypeCode($value)
 * @method mixed getForecastPeriod()
 * @method self setForecastPeriod($value)
 * @method mixed getSalesItem()
 * @method self setSalesItem($value)
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