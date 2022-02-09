<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PercentType;

/**
 * Class DependentPriceReferenceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method PercentType getPercent()
 * @method self setPercent(PercentType|string $value)
 * @method AddressType getLocationAddress()
 * @method self setLocationAddress(AddressType $value)
 * @method LineReferenceType getDependentLineReference()
 * @method self setDependentLineReference(LineReferenceType $value)
 */
class DependentPriceReferenceType extends AggregateComponent
{
    protected $casts = [
        "cbc:Percent" => PercentType::class,
        "cac:LocationAddress" => AddressType::class,
        "cac:DependentLineReference" => LineReferenceType::class,
    ];

    protected $minOccurs = [
    ];
}