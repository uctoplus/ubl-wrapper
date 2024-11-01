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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method MeterNumberType getMeterNumber()
 * @method self setMeterNumber(MeterNumberType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method ConsumptionLevelCodeType getConsumptionLevelCode()
 * @method self setConsumptionLevelCode(ConsumptionLevelCodeType|string $value)
 * @method ConsumptionLevelType getConsumptionLevel()
 * @method self setConsumptionLevel(ConsumptionLevelType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method PeriodType getPeriod()
 * @method self setPeriod(PeriodType $value)
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