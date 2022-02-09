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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method SpecialTermsType getSpecialTerms()
 * @method self addSpecialTerms(SpecialTermsType|string $value)
 * @method self setSpecialTerms(SpecialTermsType ...$values)
 * @method LossRiskResponsibilityCodeType getLossRiskResponsibilityCode()
 * @method self setLossRiskResponsibilityCode(LossRiskResponsibilityCodeType|string $value)
 * @method LossRiskType getLossRisk()
 * @method self addLossRisk(LossRiskType|string $value)
 * @method self setLossRisk(LossRiskType ...$values)
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method LocationType getDeliveryLocation()
 * @method self setDeliveryLocation(LocationType $value)
 * @method AllowanceChargeType getAllowanceCharge()
 * @method self setAllowanceCharge(AllowanceChargeType $value)
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