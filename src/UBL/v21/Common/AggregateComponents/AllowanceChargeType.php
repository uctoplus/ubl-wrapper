<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AccountingCostType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AllowanceChargeReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AllowanceChargeReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\AmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BaseAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ChargeIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MultiplierFactorNumericType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PerUnitAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrepaidIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\SequenceNumericType;

/**
 * Class AllowanceChargeType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getChargeIndicator()
 * @method self setChargeIndicator($value)
 * @method mixed getAllowanceChargeReasonCode()
 * @method self setAllowanceChargeReasonCode($value)
 * @method mixed getAllowanceChargeReason()
 * @method self addAllowanceChargeReason($value)
 * @method self setAllowanceChargeReason($value)
 * @method mixed getMultiplierFactorNumeric()
 * @method self setMultiplierFactorNumeric($value)
 * @method mixed getPrepaidIndicator()
 * @method self setPrepaidIndicator($value)
 * @method mixed getSequenceNumeric()
 * @method self setSequenceNumeric($value)
 * @method mixed getAmount()
 * @method self setAmount($value)
 * @method mixed getBaseAmount()
 * @method self setBaseAmount($value)
 * @method mixed getAccountingCostCode()
 * @method self setAccountingCostCode($value)
 * @method mixed getAccountingCost()
 * @method self setAccountingCost($value)
 * @method mixed getPerUnitAmount()
 * @method self setPerUnitAmount($value)
 * @method mixed getTaxCategory()
 * @method self addTaxCategory($value)
 * @method self setTaxCategory($value)
 * @method mixed getTaxTotal()
 * @method self setTaxTotal($value)
 * @method mixed getPaymentMeans()
 * @method self addPaymentMeans($value)
 * @method self setPaymentMeans($value)
 */
class AllowanceChargeType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ChargeIndicator" => ChargeIndicatorType::class,
        "cbc:AllowanceChargeReasonCode" => AllowanceChargeReasonCodeType::class,
        "cbc:AllowanceChargeReason" => AllowanceChargeReasonType::class . "[]",
        "cbc:MultiplierFactorNumeric" => MultiplierFactorNumericType::class,
        "cbc:PrepaidIndicator" => PrepaidIndicatorType::class,
        "cbc:SequenceNumeric" => SequenceNumericType::class,
        "cbc:Amount" => AmountType::class,
        "cbc:BaseAmount" => BaseAmountType::class,
        "cbc:AccountingCostCode" => AccountingCostCodeType::class,
        "cbc:AccountingCost" => AccountingCostType::class,
        "cbc:PerUnitAmount" => PerUnitAmountType::class,
        "cac:TaxCategory" => TaxCategoryType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class,
        "cac:PaymentMeans" => PaymentMeansType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ChargeIndicator" => 1,
        "cbc:Amount" => 1,
    ];
}