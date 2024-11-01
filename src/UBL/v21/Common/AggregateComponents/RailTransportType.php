<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RailCarIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TrainIDType;

/**
 * Class RailTransportType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TrainIDType getTrainID()
 * @method self setTrainID(TrainIDType|string $value)
 * @method RailCarIDType getRailCarID()
 * @method self setRailCarID(RailCarIDType|string $value)
 */
class RailTransportType extends AggregateComponent
{
    protected $casts = [
        "cbc:TrainID" => TrainIDType::class,
        "cbc:RailCarID" => RailCarIDType::class,
    ];

    protected $minOccurs = [
        "cbc:TrainID" => 1,
    ];
}