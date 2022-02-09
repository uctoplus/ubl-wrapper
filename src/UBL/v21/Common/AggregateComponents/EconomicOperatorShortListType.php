<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpectedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LimitationDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MaximumQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MinimumQuantityType;

/**
 * Class EconomicOperatorShortListType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method LimitationDescriptionType getLimitationDescription()
 * @method self addLimitationDescription(LimitationDescriptionType|string $value)
 * @method self setLimitationDescription(LimitationDescriptionType ...$values)
 * @method ExpectedQuantityType getExpectedQuantity()
 * @method self setExpectedQuantity(ExpectedQuantityType|string $value)
 * @method MaximumQuantityType getMaximumQuantity()
 * @method self setMaximumQuantity(MaximumQuantityType|string $value)
 * @method MinimumQuantityType getMinimumQuantity()
 * @method self setMinimumQuantity(MinimumQuantityType|string $value)
 * @method PartyType getPreSelectedParty()
 * @method self addPreSelectedParty(PartyType $value)
 * @method self setPreSelectedParty(PartyType ...$values)
 */
class EconomicOperatorShortListType extends AggregateComponent
{
    protected $casts = [
        "cbc:LimitationDescription" => LimitationDescriptionType::class . "[]",
        "cbc:ExpectedQuantity" => ExpectedQuantityType::class,
        "cbc:MaximumQuantity" => MaximumQuantityType::class,
        "cbc:MinimumQuantity" => MinimumQuantityType::class,
        "cac:PreSelectedParty" => PartyType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}