<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CorporateRegistrationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getCorporateRegistrationTypeCode()
 * @method self setCorporateRegistrationTypeCode($value)
 * @method mixed getJurisdictionRegionAddress()
 * @method self setJurisdictionRegionAddress($value)
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