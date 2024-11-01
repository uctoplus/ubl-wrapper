<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CallBaseAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CallDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CallExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CallTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MovieTitleType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PayPerViewType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\QuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\RoamingPartnerNameType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ServiceNumberCalledType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelecommunicationsServiceCallCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelecommunicationsServiceCallType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelecommunicationsServiceCategoryCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TelecommunicationsServiceCategoryType;

/**
 * Class TelecommunicationsServiceType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method CallDateType getCallDate()
 * @method self setCallDate(CallDateType|string $value)
 * @method CallTimeType getCallTime()
 * @method self setCallTime(CallTimeType|string $value)
 * @method ServiceNumberCalledType getServiceNumberCalled()
 * @method self setServiceNumberCalled(ServiceNumberCalledType|string $value)
 * @method TelecommunicationsServiceCategoryType getTelecommunicationsServiceCategory()
 * @method self setTelecommunicationsServiceCategory(TelecommunicationsServiceCategoryType|string $value)
 * @method TelecommunicationsServiceCategoryCodeType getTelecommunicationsServiceCategoryCode()
 * @method self setTelecommunicationsServiceCategoryCode(TelecommunicationsServiceCategoryCodeType|string $value)
 * @method MovieTitleType getMovieTitle()
 * @method self setMovieTitle(MovieTitleType|string $value)
 * @method RoamingPartnerNameType getRoamingPartnerName()
 * @method self setRoamingPartnerName(RoamingPartnerNameType|string $value)
 * @method PayPerViewType getPayPerView()
 * @method self setPayPerView(PayPerViewType|string $value)
 * @method QuantityType getQuantity()
 * @method self setQuantity(QuantityType|string $value)
 * @method TelecommunicationsServiceCallType getTelecommunicationsServiceCall()
 * @method self setTelecommunicationsServiceCall(TelecommunicationsServiceCallType|string $value)
 * @method TelecommunicationsServiceCallCodeType getTelecommunicationsServiceCallCode()
 * @method self setTelecommunicationsServiceCallCode(TelecommunicationsServiceCallCodeType|string $value)
 * @method CallBaseAmountType getCallBaseAmount()
 * @method self setCallBaseAmount(CallBaseAmountType|string $value)
 * @method CallExtensionAmountType getCallExtensionAmount()
 * @method self setCallExtensionAmount(CallExtensionAmountType|string $value)
 * @method PriceType getPrice()
 * @method self setPrice(PriceType $value)
 * @method CountryType getCountry()
 * @method self setCountry(CountryType $value)
 * @method ExchangeRateType[] getExchangeRate()
 * @method self addExchangeRate(ExchangeRateType $value)
 * @method self setExchangeRate(ExchangeRateType ...$values)
 * @method AllowanceChargeType[] getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method TaxTotalType[] getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method DutyType[] getCallDuty()
 * @method self addCallDuty(DutyType $value)
 * @method self setCallDuty(DutyType ...$values)
 * @method DutyType[] getTimeDuty()
 * @method self addTimeDuty(DutyType $value)
 * @method self setTimeDuty(DutyType ...$values)
 */
class TelecommunicationsServiceType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:CallDate" => CallDateType::class,
        "cbc:CallTime" => CallTimeType::class,
        "cbc:ServiceNumberCalled" => ServiceNumberCalledType::class,
        "cbc:TelecommunicationsServiceCategory" => TelecommunicationsServiceCategoryType::class,
        "cbc:TelecommunicationsServiceCategoryCode" => TelecommunicationsServiceCategoryCodeType::class,
        "cbc:MovieTitle" => MovieTitleType::class,
        "cbc:RoamingPartnerName" => RoamingPartnerNameType::class,
        "cbc:PayPerView" => PayPerViewType::class,
        "cbc:Quantity" => QuantityType::class,
        "cbc:TelecommunicationsServiceCall" => TelecommunicationsServiceCallType::class,
        "cbc:TelecommunicationsServiceCallCode" => TelecommunicationsServiceCallCodeType::class,
        "cbc:CallBaseAmount" => CallBaseAmountType::class,
        "cbc:CallExtensionAmount" => CallExtensionAmountType::class,
        "cac:Price" => PriceType::class,
        "cac:Country" => CountryType::class,
        "cac:ExchangeRate" => ExchangeRateType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:CallDuty" => DutyType::class . "[]",
        "cac:TimeDuty" => DutyType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:CallDate" => 1,
        "cbc:CallTime" => 1,
        "cbc:ServiceNumberCalled" => 1,
    ];
}