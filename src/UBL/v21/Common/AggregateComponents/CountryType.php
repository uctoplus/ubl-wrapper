<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IdentificationCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class CountryType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IdentificationCodeType getIdentificationCode()
 * @method self setIdentificationCode(IdentificationCodeType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
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