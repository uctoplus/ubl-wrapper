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
 * @method mixed getBatchQuantity()
 * @method self setBatchQuantity($value)
 * @method mixed getConsumerUnitQuantity()
 * @method self setConsumerUnitQuantity($value)
 * @method mixed getHazardousRiskIndicator()
 * @method self setHazardousRiskIndicator($value)
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