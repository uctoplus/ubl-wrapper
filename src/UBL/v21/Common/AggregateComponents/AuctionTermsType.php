<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AuctionConstraintIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AuctionURIType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ConditionsDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ElectronicDeviceDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\JustificationDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcessDescriptionType;

/**
 * Class AuctionTermsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method AuctionConstraintIndicatorType getAuctionConstraintIndicator()
 * @method self setAuctionConstraintIndicator(AuctionConstraintIndicatorType|string $value)
 * @method JustificationDescriptionType getJustificationDescription()
 * @method self addJustificationDescription(JustificationDescriptionType|string $value)
 * @method self setJustificationDescription(JustificationDescriptionType ...$values)
 * @method DescriptionType getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method ProcessDescriptionType getProcessDescription()
 * @method self addProcessDescription(ProcessDescriptionType|string $value)
 * @method self setProcessDescription(ProcessDescriptionType ...$values)
 * @method ConditionsDescriptionType getConditionsDescription()
 * @method self addConditionsDescription(ConditionsDescriptionType|string $value)
 * @method self setConditionsDescription(ConditionsDescriptionType ...$values)
 * @method ElectronicDeviceDescriptionType getElectronicDeviceDescription()
 * @method self addElectronicDeviceDescription(ElectronicDeviceDescriptionType|string $value)
 * @method self setElectronicDeviceDescription(ElectronicDeviceDescriptionType ...$values)
 * @method AuctionURIType getAuctionURI()
 * @method self setAuctionURI(AuctionURIType|string $value)
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