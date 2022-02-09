<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BarcodeSymbologyIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExtendedIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;

/**
 * Class ItemIdentificationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ExtendedIDType getExtendedID()
 * @method self setExtendedID(ExtendedIDType|string $value)
 * @method BarcodeSymbologyIDType getBarcodeSymbologyID()
 * @method self setBarcodeSymbologyID(BarcodeSymbologyIDType|string $value)
 * @method PhysicalAttributeType getPhysicalAttribute()
 * @method self addPhysicalAttribute(PhysicalAttributeType $value)
 * @method self setPhysicalAttribute(PhysicalAttributeType ...$values)
 * @method DimensionType getMeasurementDimension()
 * @method self addMeasurementDimension(DimensionType $value)
 * @method self setMeasurementDimension(DimensionType ...$values)
 * @method PartyType getIssuerParty()
 * @method self setIssuerParty(PartyType $value)
 */
class ItemIdentificationType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ExtendedID" => ExtendedIDType::class,
        "cbc:BarcodeSymbologyID" => BarcodeSymbologyIDType::class,
        "cac:PhysicalAttribute" => PhysicalAttributeType::class . "[]",
        "cac:MeasurementDimension" => DimensionType::class . "[]",
        "cac:IssuerParty" => PartyType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}