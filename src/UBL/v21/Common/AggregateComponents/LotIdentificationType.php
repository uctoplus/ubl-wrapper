<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpiryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LotNumberIDType;

/**
 * Class LotIdentificationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getLotNumberID()
 * @method self setLotNumberID($value)
 * @method mixed getExpiryDate()
 * @method self setExpiryDate($value)
 * @method mixed getAdditionalItemProperty()
 * @method self addAdditionalItemProperty($value)
 * @method self setAdditionalItemProperty($value)
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