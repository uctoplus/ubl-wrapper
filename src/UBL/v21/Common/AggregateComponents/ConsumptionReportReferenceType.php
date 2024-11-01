<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionReportIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalConsumedQuantityType;

/**
 * Class ConsumptionReportReferenceType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ConsumptionReportIDType getConsumptionReportID()
 * @method self setConsumptionReportID(ConsumptionReportIDType|string $value)
 * @method ConsumptionTypeType getConsumptionType()
 * @method self setConsumptionType(ConsumptionTypeType|string $value)
 * @method ConsumptionTypeCodeType getConsumptionTypeCode()
 * @method self setConsumptionTypeCode(ConsumptionTypeCodeType|string $value)
 * @method TotalConsumedQuantityType getTotalConsumedQuantity()
 * @method self setTotalConsumedQuantity(TotalConsumedQuantityType|string $value)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
 */
class ConsumptionReportReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ConsumptionReportID" => ConsumptionReportIDType::class,
        "cbc:ConsumptionType" => ConsumptionTypeType::class,
        "cbc:ConsumptionTypeCode" => ConsumptionTypeCodeType::class,
        "cbc:TotalConsumedQuantity" => TotalConsumedQuantityType::class,
        "cac:Period" => PeriodType::class,
    ];

    protected $minOccurs = [
        "cbc:ConsumptionReportID" => 1,
        "cbc:TotalConsumedQuantity" => 1,
        "cac:Period" => 1,
    ];
}