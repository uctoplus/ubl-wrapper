<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossTonnageMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetTonnageMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RadioCallSignIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShipsRequirementsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VesselIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VesselNameType;

/**
 * Class MaritimeTransportType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method VesselIDType getVesselID()
 * @method self setVesselID(VesselIDType|string $value)
 * @method VesselNameType getVesselName()
 * @method self setVesselName(VesselNameType|string $value)
 * @method RadioCallSignIDType getRadioCallSignID()
 * @method self setRadioCallSignID(RadioCallSignIDType|string $value)
 * @method ShipsRequirementsType[] getShipsRequirements()
 * @method self addShipsRequirements(ShipsRequirementsType|string $value)
 * @method self setShipsRequirements(ShipsRequirementsType ...$values)
 * @method GrossTonnageMeasureType getGrossTonnageMeasure()
 * @method self setGrossTonnageMeasure(GrossTonnageMeasureType|string $value)
 * @method NetTonnageMeasureType getNetTonnageMeasure()
 * @method self setNetTonnageMeasure(NetTonnageMeasureType|string $value)
 * @method DocumentReferenceType getRegistryCertificateDocumentReference()
 * @method self setRegistryCertificateDocumentReference(DocumentReferenceType $value)
 * @method LocationType getRegistryPortLocation()
 * @method self setRegistryPortLocation(LocationType $value)
 */
class MaritimeTransportType extends AggregateComponent
{
    protected $casts = [
        "cbc:VesselID" => VesselIDType::class,
        "cbc:VesselName" => VesselNameType::class,
        "cbc:RadioCallSignID" => RadioCallSignIDType::class,
        "cbc:ShipsRequirements" => ShipsRequirementsType::class . "[]",
        "cbc:GrossTonnageMeasure" => GrossTonnageMeasureType::class,
        "cbc:NetTonnageMeasure" => NetTonnageMeasureType::class,
        "cac:RegistryCertificateDocumentReference" => DocumentReferenceType::class,
        "cac:RegistryPortLocation" => LocationType::class,
    ];

    protected $minOccurs = [
    ];
}