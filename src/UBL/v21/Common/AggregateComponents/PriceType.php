<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BaseQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceChangeReasonType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceTypeCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PriceTypeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OrderableUnitFactorRateType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PeriodType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\PriceListType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\AllowanceChargeType;
use Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents\ExchangeRateType;

/**
 *
 * @method mixed getPriceAmount()
 * @method self setPriceAmount($value)
 * @method mixed getBaseQuantity()
 * @method self setBaseQuantity($value)
 * @method mixed getPriceChangeReason()
 * @method self setPriceChangeReason($value)
 * @method mixed getPriceTypeCode()
 * @method self setPriceTypeCode($value)
 * @method mixed getPriceType()
 * @method self setPriceType($value)
 * @method mixed getOrderableUnitFactorRate()
 * @method self setOrderableUnitFactorRate($value)
 * @method mixed getValidityPeriod()
 * @method self setValidityPeriod($value)
 * @method mixed getPriceList()
 * @method self setPriceList($value)
 * @method mixed getAllowanceCharge()
 * @method self setAllowanceCharge($value)
 * @method mixed getPricingExchangeRate()
 * @method self setPricingExchangeRate($value)
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