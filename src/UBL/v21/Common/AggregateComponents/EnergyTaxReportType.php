<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxEnergyAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxEnergyBalanceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TaxEnergyOnAccountAmountType;

/**
 * Class EnergyTaxReportType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getTaxEnergyAmount()
 * @method self setTaxEnergyAmount($value)
 * @method mixed getTaxEnergyOnAccountAmount()
 * @method self setTaxEnergyOnAccountAmount($value)
 * @method mixed getTaxEnergyBalanceAmount()
 * @method self setTaxEnergyBalanceAmount($value)
 * @method mixed getTaxScheme()
 * @method self setTaxScheme($value)
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