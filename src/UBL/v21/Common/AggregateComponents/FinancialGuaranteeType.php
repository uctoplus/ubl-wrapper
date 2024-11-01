<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GuaranteeTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LiabilityAmountType;

/**
 * Class FinancialGuaranteeType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method GuaranteeTypeCodeType getGuaranteeTypeCode()
 * @method self setGuaranteeTypeCode(GuaranteeTypeCodeType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method LiabilityAmountType getLiabilityAmount()
 * @method self setLiabilityAmount(LiabilityAmountType|string $value)
 * @method AmountRateType getAmountRate()
 * @method self setAmountRate(AmountRateType|string $value)
 * @method PeriodType getConstitutionPeriod()
 * @method self setConstitutionPeriod(PeriodType $value)
 */
class FinancialGuaranteeType extends AggregateComponent
{
    protected $casts = [
        "cbc:GuaranteeTypeCode" => GuaranteeTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:LiabilityAmount" => LiabilityAmountType::class,
        "cbc:AmountRate" => AmountRateType::class,
        "cac:ConstitutionPeriod" => PeriodType::class,
    ];

    protected $minOccurs = [
        "cbc:GuaranteeTypeCode" => 1,
    ];
}