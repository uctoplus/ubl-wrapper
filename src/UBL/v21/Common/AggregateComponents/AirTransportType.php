<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AircraftIDType;

/**
 * Class AirTransportType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getAircraftID()
 * @method self setAircraftID($value)
 */
class AirTransportType extends AggregateComponent
{
    protected $casts = [
        "cbc:AircraftID" => AircraftIDType::class,
    ];

    protected $minOccurs = [
        "cbc:AircraftID" => 1,
    ];
}