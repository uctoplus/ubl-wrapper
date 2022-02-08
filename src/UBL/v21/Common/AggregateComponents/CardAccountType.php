<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CardChipCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CardTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChipApplicationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CV2IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ExpiryDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\HolderNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueNumberIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssuerIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NetworkIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrimaryAccountNumberIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ValidityStartDateType;

/**
 * Class CardAccountType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getPrimaryAccountNumberID()
 * @method self setPrimaryAccountNumberID($value)
 * @method mixed getNetworkID()
 * @method self setNetworkID($value)
 * @method mixed getCardTypeCode()
 * @method self setCardTypeCode($value)
 * @method mixed getValidityStartDate()
 * @method self setValidityStartDate($value)
 * @method mixed getExpiryDate()
 * @method self setExpiryDate($value)
 * @method mixed getIssuerID()
 * @method self setIssuerID($value)
 * @method mixed getIssueNumberID()
 * @method self setIssueNumberID($value)
 * @method mixed getCV2ID()
 * @method self setCV2ID($value)
 * @method mixed getCardChipCode()
 * @method self setCardChipCode($value)
 * @method mixed getChipApplicationID()
 * @method self setChipApplicationID($value)
 * @method mixed getHolderName()
 * @method self setHolderName($value)
 */
class CardAccountType extends AggregateComponent
{
    protected $casts = [
        "cbc:PrimaryAccountNumberID" => PrimaryAccountNumberIDType::class,
        "cbc:NetworkID" => NetworkIDType::class,
        "cbc:CardTypeCode" => CardTypeCodeType::class,
        "cbc:ValidityStartDate" => ValidityStartDateType::class,
        "cbc:ExpiryDate" => ExpiryDateType::class,
        "cbc:IssuerID" => IssuerIDType::class,
        "cbc:IssueNumberID" => IssueNumberIDType::class,
        "cbc:CV2ID" => CV2IDType::class,
        "cbc:CardChipCode" => CardChipCodeType::class,
        "cbc:ChipApplicationID" => ChipApplicationIDType::class,
        "cbc:HolderName" => HolderNameType::class,
    ];

    protected $minOccurs = [
        "cbc:PrimaryAccountNumberID" => 1,
        "cbc:NetworkID" => 1,
    ];
}