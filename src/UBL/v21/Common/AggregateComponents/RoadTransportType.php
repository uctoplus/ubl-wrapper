<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LicensePlateIDType;

/**
 * Class RoadTransportType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method LicensePlateIDType getLicensePlateID()
 * @method self setLicensePlateID(LicensePlateIDType|string $value)
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