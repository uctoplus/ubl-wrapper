<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class EnergyWaterSupplyType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ConsumptionReportType[] getConsumptionReport()
 * @method self addConsumptionReport(ConsumptionReportType $value)
 * @method self setConsumptionReport(ConsumptionReportType ...$values)
 * @method EnergyTaxReportType[] getEnergyTaxReport()
 * @method self addEnergyTaxReport(EnergyTaxReportType $value)
 * @method self setEnergyTaxReport(EnergyTaxReportType ...$values)
 * @method ConsumptionAverageType[] getConsumptionAverage()
 * @method self addConsumptionAverage(ConsumptionAverageType $value)
 * @method self setConsumptionAverage(ConsumptionAverageType ...$values)
 * @method ConsumptionCorrectionType[] getEnergyWaterConsumptionCorrection()
 * @method self addEnergyWaterConsumptionCorrection(ConsumptionCorrectionType $value)
 * @method self setEnergyWaterConsumptionCorrection(ConsumptionCorrectionType ...$values)
 */
class EnergyWaterSupplyType extends AggregateComponent
{
    protected $casts = [
        "cac:ConsumptionReport" => ConsumptionReportType::class . "[]",
        "cac:EnergyTaxReport" => EnergyTaxReportType::class . "[]",
        "cac:ConsumptionAverage" => ConsumptionAverageType::class . "[]",
        "cac:EnergyWaterConsumptionCorrection" => ConsumptionCorrectionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}