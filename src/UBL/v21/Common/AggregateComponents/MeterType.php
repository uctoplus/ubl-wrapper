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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getMeterNumber()
 * @method self setMeterNumber($value)
 * @method mixed getMeterName()
 * @method self setMeterName($value)
 * @method mixed getMeterConstant()
 * @method self setMeterConstant($value)
 * @method mixed getMeterConstantCode()
 * @method self setMeterConstantCode($value)
 * @method mixed getTotalDeliveredQuantity()
 * @method self setTotalDeliveredQuantity($value)
 * @method mixed getMeterReading()
 * @method self addMeterReading($value)
 * @method self setMeterReading($value)
 * @method mixed getMeterProperty()
 * @method self addMeterProperty($value)
 * @method self setMeterProperty($value)
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