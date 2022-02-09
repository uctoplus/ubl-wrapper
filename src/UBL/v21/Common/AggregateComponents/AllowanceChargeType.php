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
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method ChargeIndicatorType getChargeIndicator()
 * @method self setChargeIndicator(ChargeIndicatorType|string $value)
 * @method AllowanceChargeReasonCodeType getAllowanceChargeReasonCode()
 * @method self setAllowanceChargeReasonCode(AllowanceChargeReasonCodeType|string $value)
 * @method AllowanceChargeReasonType getAllowanceChargeReason()
 * @method self addAllowanceChargeReason(AllowanceChargeReasonType|string $value)
 * @method self setAllowanceChargeReason(AllowanceChargeReasonType ...$values)
 * @method MultiplierFactorNumericType getMultiplierFactorNumeric()
 * @method self setMultiplierFactorNumeric(MultiplierFactorNumericType|string $value)
 * @method PrepaidIndicatorType getPrepaidIndicator()
 * @method self setPrepaidIndicator(PrepaidIndicatorType|string $value)
 * @method SequenceNumericType getSequenceNumeric()
 * @method self setSequenceNumeric(SequenceNumericType|string $value)
 * @method AmountType getAmount()
 * @method self setAmount(AmountType|string $value)
 * @method BaseAmountType getBaseAmount()
 * @method self setBaseAmount(BaseAmountType|string $value)
 * @method AccountingCostCodeType getAccountingCostCode()
 * @method self setAccountingCostCode(AccountingCostCodeType|string $value)
 * @method AccountingCostType getAccountingCost()
 * @method self setAccountingCost(AccountingCostType|string $value)
 * @method PerUnitAmountType getPerUnitAmount()
 * @method self setPerUnitAmount(PerUnitAmountType|string $value)
 * @method TaxCategoryType getTaxCategory()
 * @method self addTaxCategory(TaxCategoryType $value)
 * @method self setTaxCategory(TaxCategoryType ...$values)
 * @method TaxTotalType getTaxTotal()
 * @method self setTaxTotal(TaxTotalType $value)
 * @method PaymentMeansType getPaymentMeans()
 * @method self addPaymentMeans(PaymentMeansType $value)
 * @method self setPaymentMeans(PaymentMeansType ...$values)
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