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
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method TenderResultCodeType getTenderResultCode()
 * @method self setTenderResultCode(TenderResultCodeType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method AdvertisementAmountType getAdvertisementAmount()
 * @method self setAdvertisementAmount(AdvertisementAmountType|string $value)
 * @method AwardDateType getAwardDate()
 * @method self setAwardDate(AwardDateType|string $value)
 * @method AwardTimeType getAwardTime()
 * @method self setAwardTime(AwardTimeType|string $value)
 * @method ReceivedTenderQuantityType getReceivedTenderQuantity()
 * @method self setReceivedTenderQuantity(ReceivedTenderQuantityType|string $value)
 * @method LowerTenderAmountType getLowerTenderAmount()
 * @method self setLowerTenderAmount(LowerTenderAmountType|string $value)
 * @method HigherTenderAmountType getHigherTenderAmount()
 * @method self setHigherTenderAmount(HigherTenderAmountType|string $value)
 * @method StartDateType getStartDate()
 * @method self setStartDate(StartDateType|string $value)
 * @method ReceivedElectronicTenderQuantityType getReceivedElectronicTenderQuantity()
 * @method self setReceivedElectronicTenderQuantity(ReceivedElectronicTenderQuantityType|string $value)
 * @method ReceivedForeignTenderQuantityType getReceivedForeignTenderQuantity()
 * @method self setReceivedForeignTenderQuantity(ReceivedForeignTenderQuantityType|string $value)
 * @method ContractType getContract()
 * @method self setContract(ContractType $value)
 * @method TenderedProjectType getAwardedTenderedProject()
 * @method self setAwardedTenderedProject(TenderedProjectType $value)
 * @method PeriodType getContractFormalizationPeriod()
 * @method self setContractFormalizationPeriod(PeriodType $value)
 * @method SubcontractTermsType[] getSubcontractTerms()
 * @method self addSubcontractTerms(SubcontractTermsType $value)
 * @method self setSubcontractTerms(SubcontractTermsType ...$values)
 * @method WinningPartyType[] getWinningParty()
 * @method self addWinningParty(WinningPartyType $value)
 * @method self setWinningParty(WinningPartyType ...$values)
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