<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AuctionConstraintIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\JustificationDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcessDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConditionsDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ElectronicDeviceDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AuctionURIType;

/**
 *
 * @method mixed getAuctionConstraintIndicator()
 * @method self setAuctionConstraintIndicator($value)
 * @method mixed getJustificationDescription()
 * @method self setJustificationDescription($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getProcessDescription()
 * @method self setProcessDescription($value)
 * @method mixed getConditionsDescription()
 * @method self setConditionsDescription($value)
 * @method mixed getElectronicDeviceDescription()
 * @method self setElectronicDeviceDescription($value)
 * @method mixed getAuctionURI()
 * @method self setAuctionURI($value)
 */
class AuctionTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:AuctionConstraintIndicator" => AuctionConstraintIndicatorType::class,
        "cbc:JustificationDescription" => JustificationDescriptionType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:ProcessDescription" => ProcessDescriptionType::class . "[]",
        "cbc:ConditionsDescription" => ConditionsDescriptionType::class . "[]",
        "cbc:ElectronicDeviceDescription" => ElectronicDeviceDescriptionType::class . "[]",
        "cbc:AuctionURI" => AuctionURIType::class,
    ];

    protected $minOccurs = [
    ];
}