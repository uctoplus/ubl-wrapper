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
 * @method LeadTimeMeasureType getLeadTimeMeasure()
 * @method self setLeadTimeMeasure(LeadTimeMeasureType|string $value)
 * @method MinimumQuantityType getMinimumQuantity()
 * @method self setMinimumQuantity(MinimumQuantityType|string $value)
 * @method MaximumQuantityType getMaximumQuantity()
 * @method self setMaximumQuantity(MaximumQuantityType|string $value)
 * @method HazardousRiskIndicatorType getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator(HazardousRiskIndicatorType|string $value)
 * @method TradingRestrictionsType getTradingRestrictions()
 * @method self addTradingRestrictions(TradingRestrictionsType|string $value)
 * @method self setTradingRestrictions(TradingRestrictionsType ...$values)
 * @method AddressType getApplicableTerritoryAddress()
 * @method self addApplicableTerritoryAddress(AddressType $value)
 * @method self setApplicableTerritoryAddress(AddressType ...$values)
 * @method PriceType getPrice()
 * @method self setPrice(PriceType $value)
 * @method DeliveryUnitType getDeliveryUnit()
 * @method self addDeliveryUnit(DeliveryUnitType $value)
 * @method self setDeliveryUnit(DeliveryUnitType ...$values)
 * @method TaxCategoryType getApplicableTaxCategory()
 * @method self addApplicableTaxCategory(TaxCategoryType $value)
 * @method self setApplicableTaxCategory(TaxCategoryType ...$values)
 * @method PackageType getPackage()
 * @method self setPackage(PackageType $value)
 * @method AllowanceChargeType getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method DependentPriceReferenceType getDependentPriceReference()
 * @method self setDependentPriceReference(DependentPriceReferenceType $value)
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