<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ImmobilizationCertificateIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SecurityIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IssueDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FaceValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MarketValueAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SharesNumberQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PartyType;

/**
 *
 * @method mixed getImmobilizationCertificateID()
 * @method self setImmobilizationCertificateID($value)
 * @method mixed getSecurityID()
 * @method self setSecurityID($value)
 * @method mixed getIssueDate()
 * @method self setIssueDate($value)
 * @method mixed getFaceValueAmount()
 * @method self setFaceValueAmount($value)
 * @method mixed getMarketValueAmount()
 * @method self setMarketValueAmount($value)
 * @method mixed getSharesNumberQuantity()
 * @method self setSharesNumberQuantity($value)
 * @method mixed getIssuerParty()
 * @method self setIssuerParty($value)
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