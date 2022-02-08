<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AdvertisementAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AwardTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HigherTenderAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LowerTenderAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedElectronicTenderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedForeignTenderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ReceivedTenderQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\StartDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TenderResultCodeType;

/**
 * Class TenderResultType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getTenderResultCode()
 * @method self setTenderResultCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getAdvertisementAmount()
 * @method self setAdvertisementAmount($value)
 * @method mixed getAwardDate()
 * @method self setAwardDate($value)
 * @method mixed getAwardTime()
 * @method self setAwardTime($value)
 * @method mixed getReceivedTenderQuantity()
 * @method self setReceivedTenderQuantity($value)
 * @method mixed getLowerTenderAmount()
 * @method self setLowerTenderAmount($value)
 * @method mixed getHigherTenderAmount()
 * @method self setHigherTenderAmount($value)
 * @method mixed getStartDate()
 * @method self setStartDate($value)
 * @method mixed getReceivedElectronicTenderQuantity()
 * @method self setReceivedElectronicTenderQuantity($value)
 * @method mixed getReceivedForeignTenderQuantity()
 * @method self setReceivedForeignTenderQuantity($value)
 * @method mixed getContract()
 * @method self setContract($value)
 * @method mixed getAwardedTenderedProject()
 * @method self setAwardedTenderedProject($value)
 * @method mixed getContractFormalizationPeriod()
 * @method self setContractFormalizationPeriod($value)
 * @method mixed getSubcontractTerms()
 * @method self addSubcontractTerms($value)
 * @method self setSubcontractTerms($value)
 * @method mixed getWinningParty()
 * @method self addWinningParty($value)
 * @method self setWinningParty($value)
 */
class TenderResultType extends AggregateComponent
{
    protected $casts = [
        "cbc:TenderResultCode" => TenderResultCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:AdvertisementAmount" => AdvertisementAmountType::class,
        "cbc:AwardDate" => AwardDateType::class,
        "cbc:AwardTime" => AwardTimeType::class,
        "cbc:ReceivedTenderQuantity" => ReceivedTenderQuantityType::class,
        "cbc:LowerTenderAmount" => LowerTenderAmountType::class,
        "cbc:HigherTenderAmount" => HigherTenderAmountType::class,
        "cbc:StartDate" => StartDateType::class,
        "cbc:ReceivedElectronicTenderQuantity" => ReceivedElectronicTenderQuantityType::class,
        "cbc:ReceivedForeignTenderQuantity" => ReceivedForeignTenderQuantityType::class,
        "cac:Contract" => ContractType::class,
        "cac:AwardedTenderedProject" => TenderedProjectType::class,
        "cac:ContractFormalizationPeriod" => PeriodType::class,
        "cac:SubcontractTerms" => SubcontractTermsType::class . "[]",
        "cac:WinningParty" => WinningPartyType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:AwardDate" => 1,
    ];
}