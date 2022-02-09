<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\UtilityStatementTypeCodeType;

/**
 * Class ConsumptionType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method UtilityStatementTypeCodeType getUtilityStatementTypeCode()
 * @method self setUtilityStatementTypeCode(UtilityStatementTypeCodeType|string $value)
 * @method PeriodType getMainPeriod()
 * @method self setMainPeriod(PeriodType $value)
 * @method AllowanceChargeType getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method TaxTotalType getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method EnergyWaterSupplyType getEnergyWaterSupply()
 * @method self setEnergyWaterSupply(EnergyWaterSupplyType $value)
 * @method TelecommunicationsSupplyType getTelecommunicationsSupply()
 * @method self setTelecommunicationsSupply(TelecommunicationsSupplyType $value)
 * @method MonetaryTotalType getLegalMonetaryTotal()
 * @method self setLegalMonetaryTotal(MonetaryTotalType $value)
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