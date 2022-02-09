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
 * @method PrimaryAccountNumberIDType getPrimaryAccountNumberID()
 * @method self setPrimaryAccountNumberID(PrimaryAccountNumberIDType|string $value)
 * @method NetworkIDType getNetworkID()
 * @method self setNetworkID(NetworkIDType|string $value)
 * @method CardTypeCodeType getCardTypeCode()
 * @method self setCardTypeCode(CardTypeCodeType|string $value)
 * @method ValidityStartDateType getValidityStartDate()
 * @method self setValidityStartDate(ValidityStartDateType|string $value)
 * @method ExpiryDateType getExpiryDate()
 * @method self setExpiryDate(ExpiryDateType|string $value)
 * @method IssuerIDType getIssuerID()
 * @method self setIssuerID(IssuerIDType|string $value)
 * @method IssueNumberIDType getIssueNumberID()
 * @method self setIssueNumberID(IssueNumberIDType|string $value)
 * @method CV2IDType getCV2ID()
 * @method self setCV2ID(CV2IDType|string $value)
 * @method CardChipCodeType getCardChipCode()
 * @method self setCardChipCode(CardChipCodeType|string $value)
 * @method ChipApplicationIDType getChipApplicationID()
 * @method self setChipApplicationID(ChipApplicationIDType|string $value)
 * @method HolderNameType getHolderName()
 * @method self setHolderName(HolderNameType|string $value)
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