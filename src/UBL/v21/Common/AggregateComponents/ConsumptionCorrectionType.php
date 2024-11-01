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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method CorrectionTypeType getCorrectionType()
 * @method self setCorrectionType(CorrectionTypeType|string $value)
 * @method CorrectionTypeCodeType getCorrectionTypeCode()
 * @method self setCorrectionTypeCode(CorrectionTypeCodeType|string $value)
 * @method MeterNumberType getMeterNumber()
 * @method self setMeterNumber(MeterNumberType|string $value)
 * @method GasPressureQuantityType getGasPressureQuantity()
 * @method self setGasPressureQuantity(GasPressureQuantityType|string $value)
 * @method ActualTemperatureReductionQuantityType getActualTemperatureReductionQuantity()
 * @method self setActualTemperatureReductionQuantity(ActualTemperatureReductionQuantityType|string $value)
 * @method NormalTemperatureReductionQuantityType getNormalTemperatureReductionQuantity()
 * @method self setNormalTemperatureReductionQuantity(NormalTemperatureReductionQuantityType|string $value)
 * @method DifferenceTemperatureReductionQuantityType getDifferenceTemperatureReductionQuantity()
 * @method self setDifferenceTemperatureReductionQuantity(DifferenceTemperatureReductionQuantityType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method CorrectionUnitAmountType getCorrectionUnitAmount()
 * @method self setCorrectionUnitAmount(CorrectionUnitAmountType|string $value)
 * @method ConsumptionEnergyQuantityType getConsumptionEnergyQuantity()
 * @method self setConsumptionEnergyQuantity(ConsumptionEnergyQuantityType|string $value)
 * @method ConsumptionWaterQuantityType getConsumptionWaterQuantity()
 * @method self setConsumptionWaterQuantity(ConsumptionWaterQuantityType|string $value)
 * @method CorrectionAmountType getCorrectionAmount()
 * @method self setCorrectionAmount(CorrectionAmountType|string $value)
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