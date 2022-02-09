<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BatchQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConsumerUnitQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HazardousRiskIndicatorType;

/**
 * Class DeliveryUnitType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method BatchQuantityType getBatchQuantity()
 * @method self setBatchQuantity(BatchQuantityType|string $value)
 * @method ConsumerUnitQuantityType getConsumerUnitQuantity()
 * @method self setConsumerUnitQuantity(ConsumerUnitQuantityType|string $value)
 * @method HazardousRiskIndicatorType getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator(HazardousRiskIndicatorType|string $value)
 */
class DeliveryUnitType extends AggregateComponent
{
    protected $casts = [
        "cbc:BatchQuantity" => BatchQuantityType::class,
        "cbc:ConsumerUnitQuantity" => ConsumerUnitQuantityType::class,
        "cbc:HazardousRiskIndicator" => HazardousRiskIndicatorType::class,
    ];

    protected $minOccurs = [
        "cbc:BatchQuantity" => 1,
    ];
}