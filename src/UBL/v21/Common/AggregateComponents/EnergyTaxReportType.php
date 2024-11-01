<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxEnergyAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxEnergyBalanceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxEnergyOnAccountAmountType;

/**
 * Class EnergyTaxReportType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TaxEnergyAmountType getTaxEnergyAmount()
 * @method self setTaxEnergyAmount(TaxEnergyAmountType|string $value)
 * @method TaxEnergyOnAccountAmountType getTaxEnergyOnAccountAmount()
 * @method self setTaxEnergyOnAccountAmount(TaxEnergyOnAccountAmountType|string $value)
 * @method TaxEnergyBalanceAmountType getTaxEnergyBalanceAmount()
 * @method self setTaxEnergyBalanceAmount(TaxEnergyBalanceAmountType|string $value)
 * @method TaxSchemeType getTaxScheme()
 * @method self setTaxScheme(TaxSchemeType $value)
 */
class EnergyTaxReportType extends AggregateComponent
{
    protected $casts = [
        "cbc:TaxEnergyAmount" => TaxEnergyAmountType::class,
        "cbc:TaxEnergyOnAccountAmount" => TaxEnergyOnAccountAmountType::class,
        "cbc:TaxEnergyBalanceAmount" => TaxEnergyBalanceAmountType::class,
        "cac:TaxScheme" => TaxSchemeType::class,
    ];

    protected $minOccurs = [
        "cac:TaxScheme" => 1,
    ];
}