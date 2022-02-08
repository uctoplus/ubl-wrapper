<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LeadTimeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRiskIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TradingRestrictionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PriceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DeliveryUnitType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\TaxCategoryType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PackageType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DependentPriceReferenceType;

/**
 *
 * @method mixed getLeadTimeMeasure()
 * @method self setLeadTimeMeasure($value)
 * @method mixed getMinimumQuantity()
 * @method self setMinimumQuantity($value)
 * @method mixed getMaximumQuantity()
 * @method self setMaximumQuantity($value)
 * @method mixed getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator($value)
 * @method mixed getTradingRestrictions()
 * @method self setTradingRestrictions($value)
 * @method mixed getApplicableTerritoryAddress()
 * @method self setApplicableTerritoryAddress($value)
 * @method mixed getPrice()
 * @method self setPrice($value)
 * @method mixed getDeliveryUnit()
 * @method self setDeliveryUnit($value)
 * @method mixed getApplicableTaxCategory()
 * @method self setApplicableTaxCategory($value)
 * @method mixed getPackage()
 * @method self setPackage($value)
 * @method mixed getAllowanceCharge()
 * @method self setAllowanceCharge($value)
 * @method mixed getDependentPriceReference()
 * @method self setDependentPriceReference($value)
 */
class ItemLocationQuantityType extends AggregateComponent
{
    protected $casts = [
        "cbc:LeadTimeMeasure" => LeadTimeMeasureType::class,
        "cbc:MinimumQuantity" => MinimumQuantityType::class,
        "cbc:MaximumQuantity" => MaximumQuantityType::class,
        "cbc:HazardousRiskIndicator" => HazardousRiskIndicatorType::class,
        "cbc:TradingRestrictions" => TradingRestrictionsType::class . "[]",
        "cac:ApplicableTerritoryAddress" => AddressType::class . "[]",
        "cac:Price" => PriceType::class,
        "cac:DeliveryUnit" => DeliveryUnitType::class . "[]",
        "cac:ApplicableTaxCategory" => TaxCategoryType::class . "[]",
        "cac:Package" => PackageType::class,
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:DependentPriceReference" => DependentPriceReferenceType::class,
    ];

    protected $minOccurs = [
    ];
}