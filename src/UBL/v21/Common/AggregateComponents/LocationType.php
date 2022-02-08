<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConditionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CountrySubentityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CountrySubentityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LocationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InformationURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AddressType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationCoordinateType;

/**
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getConditions()
 * @method self setConditions($value)
 * @method mixed getCountrySubentity()
 * @method self setCountrySubentity($value)
 * @method mixed getCountrySubentityCode()
 * @method self setCountrySubentityCode($value)
 * @method mixed getLocationTypeCode()
 * @method self setLocationTypeCode($value)
 * @method mixed getInformationURI()
 * @method self setInformationURI($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getValidityPeriod()
 * @method self setValidityPeriod($value)
 * @method mixed getAddress()
 * @method self setAddress($value)
 * @method mixed getSubsidiaryLocation()
 * @method self setSubsidiaryLocation($value)
 * @method mixed getLocationCoordinate()
 * @method self setLocationCoordinate($value)
 */
class LocationType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:Conditions" => ConditionsType::class . "[]",
        "cbc:CountrySubentity" => CountrySubentityType::class,
        "cbc:CountrySubentityCode" => CountrySubentityCodeType::class,
        "cbc:LocationTypeCode" => LocationTypeCodeType::class,
        "cbc:InformationURI" => InformationURIType::class,
        "cbc:Name" => NameType::class,
        "cac:ValidityPeriod" => PeriodType::class . "[]",
        "cac:Address" => AddressType::class,
        "cac:SubsidiaryLocation" => LocationType::class . "[]",
        "cac:LocationCoordinate" => LocationCoordinateType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}