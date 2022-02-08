<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionReportType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EnergyTaxReportType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionAverageType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ConsumptionCorrectionType;

/**
 *
 * @method mixed getConsumptionReport()
 * @method self setConsumptionReport($value)
 * @method mixed getEnergyTaxReport()
 * @method self setEnergyTaxReport($value)
 * @method mixed getConsumptionAverage()
 * @method self setConsumptionAverage($value)
 * @method mixed getEnergyWaterConsumptionCorrection()
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