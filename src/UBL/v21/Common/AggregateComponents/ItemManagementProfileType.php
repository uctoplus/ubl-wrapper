<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FrozenPeriodDaysNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumInventoryQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MultipleOrderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderIntervalDaysNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReplenishmentOwnerDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TargetServicePercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TargetInventoryQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ItemLocationQuantityType;

/**
 *
 * @method mixed getFrozenPeriodDaysNumeric()
 * @method self setFrozenPeriodDaysNumeric($value)
 * @method mixed getMinimumInventoryQuantity()
 * @method self setMinimumInventoryQuantity($value)
 * @method mixed getMultipleOrderQuantity()
 * @method self setMultipleOrderQuantity($value)
 * @method mixed getOrderIntervalDaysNumeric()
 * @method self setOrderIntervalDaysNumeric($value)
 * @method mixed getReplenishmentOwnerDescription()
 * @method self setReplenishmentOwnerDescription($value)
 * @method mixed getTargetServicePercent()
 * @method self setTargetServicePercent($value)
 * @method mixed getTargetInventoryQuantity()
 * @method self setTargetInventoryQuantity($value)
 * @method mixed getEffectivePeriod()
 * @method self setEffectivePeriod($value)
 * @method mixed getItem()
 * @method self setItem($value)
 * @method mixed getItemLocationQuantity()
 * @method self setItemLocationQuantity($value)
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