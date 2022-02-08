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
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getExtendedID()
 * @method self setExtendedID($value)
 * @method mixed getBarcodeSymbologyID()
 * @method self setBarcodeSymbologyID($value)
 * @method mixed getPhysicalAttribute()
 * @method self addPhysicalAttribute($value)
 * @method self setPhysicalAttribute($value)
 * @method mixed getMeasurementDimension()
 * @method self addMeasurementDimension($value)
 * @method self setMeasurementDimension($value)
 * @method mixed getIssuerParty()
 * @method self setIssuerParty($value)
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