<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InformationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReferenceType;

/**
 * Class TradingTermsType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method InformationType[] getInformation()
 * @method self addInformation(InformationType|string $value)
 * @method self setInformation(InformationType ...$values)
 * @method ReferenceType getReference()
 * @method self setReference(ReferenceType|string $value)
 * @method AddressType getApplicableAddress()
 * @method self setApplicableAddress(AddressType $value)
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