<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionLevelCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionLevelType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterNumberType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;

/**
 * Class ConsumptionHistoryType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getMeterNumber()
 * @method self setMeterNumber($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getConsumptionLevelCode()
 * @method self setConsumptionLevelCode($value)
 * @method mixed getConsumptionLevel()
 * @method self setConsumptionLevel($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
 */
class ConsumptionHistoryType extends AggregateComponent
{
    protected $casts = [
        "cbc:MeterNumber" => MeterNumberType::class,
        "cbc:Quantity" => QuantityType::class,
        "cbc:Amount" => AmountType::class,
        "cbc:ConsumptionLevelCode" => ConsumptionLevelCodeType::class,
        "cbc:ConsumptionLevel" => ConsumptionLevelType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:Period" => PeriodType::class,
    ];

    protected $minOccurs = [
        "cbc:Quantity" => 1,
        "cac:Period" => 1,
    ];
}