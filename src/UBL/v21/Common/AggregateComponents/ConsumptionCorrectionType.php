<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ActualTemperatureReductionQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionEnergyQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumptionWaterQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CorrectionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CorrectionTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CorrectionTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CorrectionUnitAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DifferenceTemperatureReductionQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GasPressureQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MeterNumberType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NormalTemperatureReductionQuantityType;

/**
 * Class ConsumptionCorrectionType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getCorrectionType()
 * @method self setCorrectionType($value)
 * @method mixed getCorrectionTypeCode()
 * @method self setCorrectionTypeCode($value)
 * @method mixed getMeterNumber()
 * @method self setMeterNumber($value)
 * @method mixed getGasPressureQuantity()
 * @method self setGasPressureQuantity($value)
 * @method mixed getActualTemperatureReductionQuantity()
 * @method self setActualTemperatureReductionQuantity($value)
 * @method mixed getNormalTemperatureReductionQuantity()
 * @method self setNormalTemperatureReductionQuantity($value)
 * @method mixed getDifferenceTemperatureReductionQuantity()
 * @method self setDifferenceTemperatureReductionQuantity($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getCorrectionUnitAmount()
 * @method self setCorrectionUnitAmount($value)
 * @method mixed getConsumptionEnergyQuantity()
 * @method self setConsumptionEnergyQuantity($value)
 * @method mixed getConsumptionWaterQuantity()
 * @method self setConsumptionWaterQuantity($value)
 * @method mixed getCorrectionAmount()
 * @method self setCorrectionAmount($value)
 */
class ConsumptionCorrectionType extends AggregateComponent
{
    protected $casts = [
        "cbc:CorrectionType" => CorrectionTypeType::class,
        "cbc:CorrectionTypeCode" => CorrectionTypeCodeType::class,
        "cbc:MeterNumber" => MeterNumberType::class,
        "cbc:GasPressureQuantity" => GasPressureQuantityType::class,
        "cbc:ActualTemperatureReductionQuantity" => ActualTemperatureReductionQuantityType::class,
        "cbc:NormalTemperatureReductionQuantity" => NormalTemperatureReductionQuantityType::class,
        "cbc:DifferenceTemperatureReductionQuantity" => DifferenceTemperatureReductionQuantityType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:CorrectionUnitAmount" => CorrectionUnitAmountType::class,
        "cbc:ConsumptionEnergyQuantity" => ConsumptionEnergyQuantityType::class,
        "cbc:ConsumptionWaterQuantity" => ConsumptionWaterQuantityType::class,
        "cbc:CorrectionAmount" => CorrectionAmountType::class,
    ];

    protected $minOccurs = [
    ];
}