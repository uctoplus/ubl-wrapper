<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpiryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LotNumberIDType;

/**
 * Class LotIdentificationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method LotNumberIDType getLotNumberID()
 * @method self setLotNumberID(LotNumberIDType|string $value)
 * @method ExpiryDateType getExpiryDate()
 * @method self setExpiryDate(ExpiryDateType|string $value)
 * @method ItemPropertyType[] getAdditionalItemProperty()
 * @method self addAdditionalItemProperty(ItemPropertyType $value)
 * @method self setAdditionalItemProperty(ItemPropertyType ...$values)
 */
class LotIdentificationType extends AggregateComponent
{
    protected $casts = [
        "cbc:LotNumberID" => LotNumberIDType::class,
        "cbc:ExpiryDate" => ExpiryDateType::class,
        "cac:AdditionalItemProperty" => ItemPropertyType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}