<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceType;

/**
 * Class TradingTermsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getInformation()
 * @method self addInformation($value)
 * @method self setInformation($value)
 * @method mixed getReference()
 * @method self setReference($value)
 * @method mixed getApplicableAddress()
 * @method self setApplicableAddress($value)
 */
class TradingTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:Information" => InformationType::class . "[]",
        "cbc:Reference" => ReferenceType::class,
        "cac:ApplicableAddress" => AddressType::class,
    ];

    protected $minOccurs = [
    ];
}