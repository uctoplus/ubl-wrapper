<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CorporateRegistrationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class CorporateRegistrationSchemeType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method CorporateRegistrationTypeCodeType getCorporateRegistrationTypeCode()
 * @method self setCorporateRegistrationTypeCode(CorporateRegistrationTypeCodeType|string $value)
 * @method AddressType getJurisdictionRegionAddress()
 * @method self addJurisdictionRegionAddress(AddressType $value)
 * @method self setJurisdictionRegionAddress(AddressType ...$values)
 */
class CorporateRegistrationSchemeType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cbc:CorporateRegistrationTypeCode" => CorporateRegistrationTypeCodeType::class,
        "cac:JurisdictionRegionAddress" => AddressType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}