<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConditionsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CountrySubentityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CountrySubentityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InformationURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LocationTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class LocationType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method ConditionsType[] getConditions()
 * @method self addConditions(ConditionsType|string $value)
 * @method self setConditions(ConditionsType ...$values)
 * @method CountrySubentityType getCountrySubentity()
 * @method self setCountrySubentity(CountrySubentityType|string $value)
 * @method CountrySubentityCodeType getCountrySubentityCode()
 * @method self setCountrySubentityCode(CountrySubentityCodeType|string $value)
 * @method LocationTypeCodeType getLocationTypeCode()
 * @method self setLocationTypeCode(LocationTypeCodeType|string $value)
 * @method InformationURIType getInformationURI()
 * @method self setInformationURI(InformationURIType|string $value)
 * @method NameType getName()
 * @method self setName(NameType|string $value)
 * @method PeriodType[] getValidityPeriod()
 * @method self addValidityPeriod(PeriodType $value)
 * @method self setValidityPeriod(PeriodType ...$values)
 * @method AddressType getAddress()
 * @method self setAddress(AddressType $value)
 * @method LocationType[] getSubsidiaryLocation()
 * @method self addSubsidiaryLocation(LocationType $value)
 * @method self setSubsidiaryLocation(LocationType ...$values)
 * @method LocationCoordinateType[] getLocationCoordinate()
 * @method self addLocationCoordinate(LocationCoordinateType $value)
 * @method self setLocationCoordinate(LocationCoordinateType ...$values)
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