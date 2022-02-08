<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LossRiskResponsibilityCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LossRiskType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SpecialTermsType;

/**
 * Class DeliveryTermsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getSpecialTerms()
 * @method self addSpecialTerms($value)
 * @method self setSpecialTerms($value)
 * @method mixed getLossRiskResponsibilityCode()
 * @method self setLossRiskResponsibilityCode($value)
 * @method mixed getLossRisk()
 * @method self addLossRisk($value)
 * @method self setLossRisk($value)
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getDeliveryLocation()
 * @method self setDeliveryLocation($value)
 * @method mixed getAllowanceCharge()
 * @method self setAllowanceCharge($value)
 */
class DeliveryTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:SpecialTerms" => SpecialTermsType::class . "[]",
        "cbc:LossRiskResponsibilityCode" => LossRiskResponsibilityCodeType::class,
        "cbc:LossRisk" => LossRiskType::class . "[]",
        "cbc:Amount" => AmountType::class,
        "cac:DeliveryLocation" => LocationType::class,
        "cac:AllowanceCharge" => AllowanceChargeType::class,
    ];

    protected $minOccurs = [
    ];
}