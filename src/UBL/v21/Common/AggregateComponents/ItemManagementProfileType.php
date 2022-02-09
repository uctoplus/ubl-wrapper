<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FrozenPeriodDaysNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumInventoryQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MultipleOrderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderIntervalDaysNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReplenishmentOwnerDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TargetInventoryQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TargetServicePercentType;

/**
 * Class ItemManagementProfileType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method FrozenPeriodDaysNumericType getFrozenPeriodDaysNumeric()
 * @method self setFrozenPeriodDaysNumeric(FrozenPeriodDaysNumericType|string $value)
 * @method MinimumInventoryQuantityType getMinimumInventoryQuantity()
 * @method self setMinimumInventoryQuantity(MinimumInventoryQuantityType|string $value)
 * @method MultipleOrderQuantityType getMultipleOrderQuantity()
 * @method self setMultipleOrderQuantity(MultipleOrderQuantityType|string $value)
 * @method OrderIntervalDaysNumericType getOrderIntervalDaysNumeric()
 * @method self setOrderIntervalDaysNumeric(OrderIntervalDaysNumericType|string $value)
 * @method ReplenishmentOwnerDescriptionType getReplenishmentOwnerDescription()
 * @method self addReplenishmentOwnerDescription(ReplenishmentOwnerDescriptionType|string $value)
 * @method self setReplenishmentOwnerDescription(ReplenishmentOwnerDescriptionType ...$values)
 * @method TargetServicePercentType getTargetServicePercent()
 * @method self setTargetServicePercent(TargetServicePercentType|string $value)
 * @method TargetInventoryQuantityType getTargetInventoryQuantity()
 * @method self setTargetInventoryQuantity(TargetInventoryQuantityType|string $value)
 * @method PeriodType getEffectivePeriod()
 * @method self setEffectivePeriod(PeriodType $value)
 * @method ItemType getItem()
 * @method self setItem(ItemType $value)
 * @method ItemLocationQuantityType getItemLocationQuantity()
 * @method self setItemLocationQuantity(ItemLocationQuantityType $value)
 */
class ItemManagementProfileType extends AggregateComponent
{
    protected $casts = [
        "cbc:FrozenPeriodDaysNumeric" => FrozenPeriodDaysNumericType::class,
        "cbc:MinimumInventoryQuantity" => MinimumInventoryQuantityType::class,
        "cbc:MultipleOrderQuantity" => MultipleOrderQuantityType::class,
        "cbc:OrderIntervalDaysNumeric" => OrderIntervalDaysNumericType::class,
        "cbc:ReplenishmentOwnerDescription" => ReplenishmentOwnerDescriptionType::class . "[]",
        "cbc:TargetServicePercent" => TargetServicePercentType::class,
        "cbc:TargetInventoryQuantity" => TargetInventoryQuantityType::class,
        "cac:EffectivePeriod" => PeriodType::class,
        "cac:Item" => ItemType::class,
        "cac:ItemLocationQuantity" => ItemLocationQuantityType::class,
    ];

    protected $minOccurs = [
        "cac:EffectivePeriod" => 1,
        "cac:Item" => 1,
    ];
}