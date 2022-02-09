<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BaseQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderableUnitFactorRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceChangeReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceTypeType;

/**
 * Class PriceType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method PriceAmountType getPriceAmount()
 * @method self setPriceAmount(PriceAmountType|string $value)
 * @method BaseQuantityType getBaseQuantity()
 * @method self setBaseQuantity(BaseQuantityType|string $value)
 * @method PriceChangeReasonType getPriceChangeReason()
 * @method self addPriceChangeReason(PriceChangeReasonType|string $value)
 * @method self setPriceChangeReason(PriceChangeReasonType ...$values)
 * @method PriceTypeCodeType getPriceTypeCode()
 * @method self setPriceTypeCode(PriceTypeCodeType|string $value)
 * @method PriceTypeType getPriceType()
 * @method self setPriceType(PriceTypeType|string $value)
 * @method OrderableUnitFactorRateType getOrderableUnitFactorRate()
 * @method self setOrderableUnitFactorRate(OrderableUnitFactorRateType|string $value)
 * @method PeriodType getValidityPeriod()
 * @method self addValidityPeriod(PeriodType $value)
 * @method self setValidityPeriod(PeriodType ...$values)
 * @method PriceListType getPriceList()
 * @method self setPriceList(PriceListType $value)
 * @method AllowanceChargeType getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method ExchangeRateType getPricingExchangeRate()
 * @method self setPricingExchangeRate(ExchangeRateType $value)
 */
class PriceType extends AggregateComponent
{
    protected $casts = [
        "cbc:PriceAmount" => PriceAmountType::class,
        "cbc:BaseQuantity" => BaseQuantityType::class,
        "cbc:PriceChangeReason" => PriceChangeReasonType::class . "[]",
        "cbc:PriceTypeCode" => PriceTypeCodeType::class,
        "cbc:PriceType" => PriceTypeType::class,
        "cbc:OrderableUnitFactorRate" => OrderableUnitFactorRateType::class,
        "cac:ValidityPeriod" => PeriodType::class . "[]",
        "cac:PriceList" => PriceListType::class,
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:PricingExchangeRate" => ExchangeRateType::class,
    ];

    protected $minOccurs = [
        "cbc:PriceAmount" => 1,
    ];
}