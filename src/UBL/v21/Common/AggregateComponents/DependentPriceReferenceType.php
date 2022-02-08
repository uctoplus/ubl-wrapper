<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PercentType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LineReferenceType;

/**
 *
 * @method mixed getPercent()
 * @method self setPercent($value)
 * @method mixed getLocationAddress()
 * @method self setLocationAddress($value)
 * @method mixed getDependentLineReference()
 * @method self setDependentLineReference($value)
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