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
 * @method mixed getLimitationDescription()
 * @method self addLimitationDescription($value)
 * @method self setLimitationDescription($value)
 * @method mixed getExpectedQuantity()
 * @method self setExpectedQuantity($value)
 * @method mixed getMaximumQuantity()
 * @method self setMaximumQuantity($value)
 * @method mixed getMinimumQuantity()
 * @method self setMinimumQuantity($value)
 * @method mixed getPreSelectedParty()
 * @method self addPreSelectedParty($value)
 * @method self setPreSelectedParty($value)
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