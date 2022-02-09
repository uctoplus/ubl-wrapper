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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method AddressTypeCodeType getAddressTypeCode()
 * @method self setAddressTypeCode(AddressTypeCodeType|string $value)
 * @method AddressFormatCodeType getAddressFormatCode()
 * @method self setAddressFormatCode(AddressFormatCodeType|string $value)
 * @method PostboxType getPostbox()
 * @method self setPostbox(PostboxType|string $value)
 * @method FloorType getFloor()
 * @method self setFloor(FloorType|string $value)
 * @method RoomType getRoom()
 * @method self setRoom(RoomType|string $value)
 * @method StreetNameType getStreetName()
 * @method self setStreetName(StreetNameType|string $value)
 * @method AdditionalStreetNameType getAdditionalStreetName()
 * @method self setAdditionalStreetName(AdditionalStreetNameType|string $value)
 * @method BlockNameType getBlockName()
 * @method self setBlockName(BlockNameType|string $value)
 * @method BuildingNameType getBuildingName()
 * @method self setBuildingName(BuildingNameType|string $value)
 * @method BuildingNumberType getBuildingNumber()
 * @method self setBuildingNumber(BuildingNumberType|string $value)
 * @method InhouseMailType getInhouseMail()
 * @method self setInhouseMail(InhouseMailType|string $value)
 * @method DepartmentType getDepartment()
 * @method self setDepartment(DepartmentType|string $value)
 * @method MarkAttentionType getMarkAttention()
 * @method self setMarkAttention(MarkAttentionType|string $value)
 * @method MarkCareType getMarkCare()
 * @method self setMarkCare(MarkCareType|string $value)
 * @method PlotIdentificationType getPlotIdentification()
 * @method self setPlotIdentification(PlotIdentificationType|string $value)
 * @method CitySubdivisionNameType getCitySubdivisionName()
 * @method self setCitySubdivisionName(CitySubdivisionNameType|string $value)
 * @method CityNameType getCityName()
 * @method self setCityName(CityNameType|string $value)
 * @method PostalZoneType getPostalZone()
 * @method self setPostalZone(PostalZoneType|string $value)
 * @method CountrySubentityType getCountrySubentity()
 * @method self setCountrySubentity(CountrySubentityType|string $value)
 * @method CountrySubentityCodeType getCountrySubentityCode()
 * @method self setCountrySubentityCode(CountrySubentityCodeType|string $value)
 * @method RegionType getRegion()
 * @method self setRegion(RegionType|string $value)
 * @method DistrictType getDistrict()
 * @method self setDistrict(DistrictType|string $value)
 * @method TimezoneOffsetType getTimezoneOffset()
 * @method self setTimezoneOffset(TimezoneOffsetType|string $value)
 * @method AddressLineType getAddressLine()
 * @method self addAddressLine(AddressLineType $value)
 * @method self setAddressLine(AddressLineType ...$values)
 * @method CountryType getCountry()
 * @method self setCountry(CountryType $value)
 * @method LocationCoordinateType getLocationCoordinate()
 * @method self addLocationCoordinate(LocationCoordinateType $value)
 * @method self setLocationCoordinate(LocationCoordinateType ...$values)
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