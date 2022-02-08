<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\GuaranteeTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LiabilityAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;

/**
 *
 * @method mixed getGuaranteeTypeCode()
 * @method self setGuaranteeTypeCode($value)
 * @method mixed getDescription()
 * @method self setDescription($value)
 * @method mixed getLiabilityAmount()
 * @method self setLiabilityAmount($value)
 * @method mixed getAmountRate()
 * @method self setAmountRate($value)
 * @method mixed getConstitutionPeriod()
 * @method self setConstitutionPeriod($value)
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