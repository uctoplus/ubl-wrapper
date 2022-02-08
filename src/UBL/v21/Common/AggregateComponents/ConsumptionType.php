<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UtilityStatementTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxTotalType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\EnergyWaterSupplyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TelecommunicationsSupplyType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\MonetaryTotalType;

/**
 *
 * @method mixed getUtilityStatementTypeCode()
 * @method self setUtilityStatementTypeCode($value)
 * @method mixed getMainPeriod()
 * @method self setMainPeriod($value)
 * @method mixed getAllowanceCharge()
 * @method self setAllowanceCharge($value)
 * @method mixed getTaxTotal()
 * @method self setTaxTotal($value)
 * @method mixed getEnergyWaterSupply()
 * @method self setEnergyWaterSupply($value)
 * @method mixed getTelecommunicationsSupply()
 * @method self setTelecommunicationsSupply($value)
 * @method mixed getLegalMonetaryTotal()
 * @method self setLegalMonetaryTotal($value)
 */
class ConsumptionType extends AggregateComponent
{
    protected $casts = [
        "cbc:UtilityStatementTypeCode" => UtilityStatementTypeCodeType::class,
        "cac:MainPeriod" => PeriodType::class,
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:EnergyWaterSupply" => EnergyWaterSupplyType::class,
        "cac:TelecommunicationsSupply" => TelecommunicationsSupplyType::class,
        "cac:LegalMonetaryTotal" => MonetaryTotalType::class,
    ];

    protected $minOccurs = [
        "cac:LegalMonetaryTotal" => 1,
    ];
}