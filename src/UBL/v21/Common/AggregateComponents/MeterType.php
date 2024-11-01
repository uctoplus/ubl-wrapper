<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterConstantCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterConstantType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterNumberType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TotalDeliveredQuantityType;

/**
 * Class MeterType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method MeterNumberType getMeterNumber()
 * @method self setMeterNumber(MeterNumberType|string $value)
 * @method MeterNameType getMeterName()
 * @method self setMeterName(MeterNameType|string $value)
 * @method MeterConstantType getMeterConstant()
 * @method self setMeterConstant(MeterConstantType|string $value)
 * @method MeterConstantCodeType getMeterConstantCode()
 * @method self setMeterConstantCode(MeterConstantCodeType|string $value)
 * @method TotalDeliveredQuantityType getTotalDeliveredQuantity()
 * @method self setTotalDeliveredQuantity(TotalDeliveredQuantityType|string $value)
 * @method MeterReadingType[] getMeterReading()
 * @method self addMeterReading(MeterReadingType $value)
 * @method self setMeterReading(MeterReadingType ...$values)
 * @method MeterPropertyType[] getMeterProperty()
 * @method self addMeterProperty(MeterPropertyType $value)
 * @method self setMeterProperty(MeterPropertyType ...$values)
 */
class MeterType extends AggregateComponent
{
    protected $casts = [
        "cbc:MeterNumber" => MeterNumberType::class,
        "cbc:MeterName" => MeterNameType::class,
        "cbc:MeterConstant" => MeterConstantType::class,
        "cbc:MeterConstantCode" => MeterConstantCodeType::class,
        "cbc:TotalDeliveredQuantity" => TotalDeliveredQuantityType::class,
        "cac:MeterReading" => MeterReadingType::class . "[]",
        "cac:MeterProperty" => MeterPropertyType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}