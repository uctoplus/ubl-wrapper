<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;

/**
 * Class EnergyWaterSupplyType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getConsumptionReport()
 * @method self addConsumptionReport($value)
 * @method self setConsumptionReport($value)
 * @method mixed getEnergyTaxReport()
 * @method self addEnergyTaxReport($value)
 * @method self setEnergyTaxReport($value)
 * @method mixed getConsumptionAverage()
 * @method self addConsumptionAverage($value)
 * @method self setConsumptionAverage($value)
 * @method mixed getEnergyWaterConsumptionCorrection()
 * @method self addEnergyWaterConsumptionCorrection($value)
 * @method self setEnergyWaterConsumptionCorrection($value)
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