<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TrainIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RailCarIDType;

/**
 *
 * @method mixed getTrainID()
 * @method self setTrainID($value)
 * @method mixed getRailCarID()
 * @method self setRailCarID($value)
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