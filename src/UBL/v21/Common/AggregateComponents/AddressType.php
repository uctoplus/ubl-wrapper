<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdditionalStreetNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AddressFormatCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AddressTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BlockNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BuildingNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BuildingNumberType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CityNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CitySubdivisionNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CountrySubentityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CountrySubentityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DepartmentType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DistrictType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FloorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InhouseMailType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarkAttentionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarkCareType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PlotIdentificationType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PostalZoneType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PostboxType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RegionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RoomType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StreetNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TimezoneOffsetType;

/**
 * Class AddressType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getAddressTypeCode()
 * @method self setAddressTypeCode($value)
 * @method mixed getAddressFormatCode()
 * @method self setAddressFormatCode($value)
 * @method mixed getPostbox()
 * @method self setPostbox($value)
 * @method mixed getFloor()
 * @method self setFloor($value)
 * @method mixed getRoom()
 * @method self setRoom($value)
 * @method mixed getStreetName()
 * @method self setStreetName($value)
 * @method mixed getAdditionalStreetName()
 * @method self setAdditionalStreetName($value)
 * @method mixed getBlockName()
 * @method self setBlockName($value)
 * @method mixed getBuildingName()
 * @method self setBuildingName($value)
 * @method mixed getBuildingNumber()
 * @method self setBuildingNumber($value)
 * @method mixed getInhouseMail()
 * @method self setInhouseMail($value)
 * @method mixed getDepartment()
 * @method self setDepartment($value)
 * @method mixed getMarkAttention()
 * @method self setMarkAttention($value)
 * @method mixed getMarkCare()
 * @method self setMarkCare($value)
 * @method mixed getPlotIdentification()
 * @method self setPlotIdentification($value)
 * @method mixed getCitySubdivisionName()
 * @method self setCitySubdivisionName($value)
 * @method mixed getCityName()
 * @method self setCityName($value)
 * @method mixed getPostalZone()
 * @method self setPostalZone($value)
 * @method mixed getCountrySubentity()
 * @method self setCountrySubentity($value)
 * @method mixed getCountrySubentityCode()
 * @method self setCountrySubentityCode($value)
 * @method mixed getRegion()
 * @method self setRegion($value)
 * @method mixed getDistrict()
 * @method self setDistrict($value)
 * @method mixed getTimezoneOffset()
 * @method self setTimezoneOffset($value)
 * @method mixed getAddressLine()
 * @method self addAddressLine($value)
 * @method self setAddressLine($value)
 * @method mixed getCountry()
 * @method self setCountry($value)
 * @method mixed getLocationCoordinate()
 * @method self addLocationCoordinate($value)
 * @method self setLocationCoordinate($value)
 */
class AddressType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:AddressTypeCode" => AddressTypeCodeType::class,
        "cbc:AddressFormatCode" => AddressFormatCodeType::class,
        "cbc:Postbox" => PostboxType::class,
        "cbc:Floor" => FloorType::class,
        "cbc:Room" => RoomType::class,
        "cbc:StreetName" => StreetNameType::class,
        "cbc:AdditionalStreetName" => AdditionalStreetNameType::class,
        "cbc:BlockName" => BlockNameType::class,
        "cbc:BuildingName" => BuildingNameType::class,
        "cbc:BuildingNumber" => BuildingNumberType::class,
        "cbc:InhouseMail" => InhouseMailType::class,
        "cbc:Department" => DepartmentType::class,
        "cbc:MarkAttention" => MarkAttentionType::class,
        "cbc:MarkCare" => MarkCareType::class,
        "cbc:PlotIdentification" => PlotIdentificationType::class,
        "cbc:CitySubdivisionName" => CitySubdivisionNameType::class,
        "cbc:CityName" => CityNameType::class,
        "cbc:PostalZone" => PostalZoneType::class,
        "cbc:CountrySubentity" => CountrySubentityType::class,
        "cbc:CountrySubentityCode" => CountrySubentityCodeType::class,
        "cbc:Region" => RegionType::class,
        "cbc:District" => DistrictType::class,
        "cbc:TimezoneOffset" => TimezoneOffsetType::class,
        "cac:AddressLine" => AddressLineType::class . "[]",
        "cac:Country" => CountryType::class,
        "cac:LocationCoordinate" => LocationCoordinateType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}