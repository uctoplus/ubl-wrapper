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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getConsumptionReportID()
 * @method self setConsumptionReportID($value)
 * @method mixed getConsumptionType()
 * @method self setConsumptionType($value)
 * @method mixed getConsumptionTypeCode()
 * @method self setConsumptionTypeCode($value)
 * @method mixed getTotalConsumedQuantity()
 * @method self setTotalConsumedQuantity($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
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