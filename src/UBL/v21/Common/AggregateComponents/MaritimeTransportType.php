<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VesselIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\VesselNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RadioCallSignIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ShipsRequirementsType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GrossTonnageMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetTonnageMeasureType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\DocumentReferenceType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\LocationType;

/**
 *
 * @method mixed getVesselID()
 * @method self setVesselID($value)
 * @method mixed getVesselName()
 * @method self setVesselName($value)
 * @method mixed getRadioCallSignID()
 * @method self setRadioCallSignID($value)
 * @method mixed getShipsRequirements()
 * @method self setShipsRequirements($value)
 * @method mixed getGrossTonnageMeasure()
 * @method self setGrossTonnageMeasure($value)
 * @method mixed getNetTonnageMeasure()
 * @method self setNetTonnageMeasure($value)
 * @method mixed getRegistryCertificateDocumentReference()
 * @method self setRegistryCertificateDocumentReference($value)
 * @method mixed getRegistryPortLocation()
 * @method self setRegistryPortLocation($value)
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