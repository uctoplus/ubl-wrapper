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
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getCallDate()
 * @method self setCallDate($value)
 * @method mixed getCallTime()
 * @method self setCallTime($value)
 * @method mixed getServiceNumberCalled()
 * @method self setServiceNumberCalled($value)
 * @method mixed getTelecommunicationsServiceCategory()
 * @method self setTelecommunicationsServiceCategory($value)
 * @method mixed getTelecommunicationsServiceCategoryCode()
 * @method self setTelecommunicationsServiceCategoryCode($value)
 * @method mixed getMovieTitle()
 * @method self setMovieTitle($value)
 * @method mixed getRoamingPartnerName()
 * @method self setRoamingPartnerName($value)
 * @method mixed getPayPerView()
 * @method self setPayPerView($value)
 * @method mixed getQuantity()
 * @method self setQuantity($value)
 * @method mixed getTelecommunicationsServiceCall()
 * @method self setTelecommunicationsServiceCall($value)
 * @method mixed getTelecommunicationsServiceCallCode()
 * @method self setTelecommunicationsServiceCallCode($value)
 * @method mixed getCallBaseAmount()
 * @method self setCallBaseAmount($value)
 * @method mixed getCallExtensionAmount()
 * @method self setCallExtensionAmount($value)
 * @method mixed getPrice()
 * @method self setPrice($value)
 * @method mixed getCountry()
 * @method self setCountry($value)
 * @method mixed getExchangeRate()
 * @method self addExchangeRate($value)
 * @method self setExchangeRate($value)
 * @method mixed getAllowanceCharge()
 * @method self addAllowanceCharge($value)
 * @method self setAllowanceCharge($value)
 * @method mixed getTaxTotal()
 * @method self addTaxTotal($value)
 * @method self setTaxTotal($value)
 * @method mixed getCallDuty()
 * @method self addCallDuty($value)
 * @method self setCallDuty($value)
 * @method mixed getTimeDuty()
 * @method self addTimeDuty($value)
 * @method self setTimeDuty($value)
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