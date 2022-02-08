<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IdentificationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class CountryType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getIdentificationCode()
 * @method self setIdentificationCode($value)
 * @method mixed getName()
 * @method self setName($value)
 */
class CountryType extends AggregateComponent
{
    protected $casts = [
        "cbc:IdentificationCode" => IdentificationCodeType::class,
        "cbc:Name" => NameType::class,
    ];

    protected $minOccurs = [
    ];
}