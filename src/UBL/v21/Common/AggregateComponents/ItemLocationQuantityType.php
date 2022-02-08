<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRiskIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LeadTimeMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TradingRestrictionsType;

/**
 * Class ItemLocationQuantityType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
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
 * @method self addTradingRestrictions($value)
 * @method self setTradingRestrictions($value)
 * @method mixed getApplicableTerritoryAddress()
 * @method self addApplicableTerritoryAddress($value)
 * @method self setApplicableTerritoryAddress($value)
 * @method mixed getPrice()
 * @method self setPrice($value)
 * @method mixed getDeliveryUnit()
 * @method self addDeliveryUnit($value)
 * @method self setDeliveryUnit($value)
 * @method mixed getApplicableTaxCategory()
 * @method self addApplicableTaxCategory($value)
 * @method self setApplicableTaxCategory($value)
 * @method mixed getPackage()
 * @method self setPackage($value)
 * @method mixed getAllowanceCharge()
 * @method self addAllowanceCharge($value)
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