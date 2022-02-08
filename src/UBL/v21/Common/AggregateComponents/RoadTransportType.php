<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LicensePlateIDType;

/**
 *
 * @method mixed getLicensePlateID()
 * @method self setLicensePlateID($value)
 */
class RoadTransportType extends AggregateComponent
{
    protected $casts = [
        "cbc:LicensePlateID" => LicensePlateIDType::class,
    ];

    protected $minOccurs = [
        "cbc:LicensePlateID" => 1,
    ];
}