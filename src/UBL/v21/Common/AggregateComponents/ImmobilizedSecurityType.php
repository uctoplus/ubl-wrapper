<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FaceValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ImmobilizationCertificateIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarketValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SecurityIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SharesNumberQuantityType;

/**
 * Class ImmobilizedSecurityType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method ImmobilizationCertificateIDType getImmobilizationCertificateID()
 * @method self setImmobilizationCertificateID(ImmobilizationCertificateIDType|string $value)
 * @method SecurityIDType getSecurityID()
 * @method self setSecurityID(SecurityIDType|string $value)
 * @method IssueDateType getIssueDate()
 * @method self setIssueDate(IssueDateType|string $value)
 * @method FaceValueAmountType getFaceValueAmount()
 * @method self setFaceValueAmount(FaceValueAmountType|string $value)
 * @method MarketValueAmountType getMarketValueAmount()
 * @method self setMarketValueAmount(MarketValueAmountType|string $value)
 * @method SharesNumberQuantityType getSharesNumberQuantity()
 * @method self setSharesNumberQuantity(SharesNumberQuantityType|string $value)
 * @method PartyType getIssuerParty()
 * @method self setIssuerParty(PartyType $value)
 */
class ImmobilizedSecurityType extends AggregateComponent
{
    protected $casts = [
        "cbc:ImmobilizationCertificateID" => ImmobilizationCertificateIDType::class,
        "cbc:SecurityID" => SecurityIDType::class,
        "cbc:IssueDate" => IssueDateType::class,
        "cbc:FaceValueAmount" => FaceValueAmountType::class,
        "cbc:MarketValueAmount" => MarketValueAmountType::class,
        "cbc:SharesNumberQuantity" => SharesNumberQuantityType::class,
        "cac:IssuerParty" => PartyType::class,
    ];

    protected $minOccurs = [
    ];
}