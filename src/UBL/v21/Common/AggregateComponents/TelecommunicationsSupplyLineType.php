<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PhoneNumberType;

/**
 * Class TelecommunicationsSupplyLineType
 *
 * @copyright uctoplus.sk, a.s.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method IDType getID()
 * @method self setID(IDType|string $value)
 * @method PhoneNumberType getPhoneNumber()
 * @method self setPhoneNumber(PhoneNumberType|string $value)
 * @method DescriptionType[] getDescription()
 * @method self addDescription(DescriptionType|string $value)
 * @method self setDescription(DescriptionType ...$values)
 * @method LineExtensionAmountType getLineExtensionAmount()
 * @method self setLineExtensionAmount(LineExtensionAmountType|string $value)
 * @method ExchangeRateType[] getExchangeRate()
 * @method self addExchangeRate(ExchangeRateType $value)
 * @method self setExchangeRate(ExchangeRateType ...$values)
 * @method AllowanceChargeType[] getAllowanceCharge()
 * @method self addAllowanceCharge(AllowanceChargeType $value)
 * @method self setAllowanceCharge(AllowanceChargeType ...$values)
 * @method TaxTotalType[] getTaxTotal()
 * @method self addTaxTotal(TaxTotalType $value)
 * @method self setTaxTotal(TaxTotalType ...$values)
 * @method TelecommunicationsServiceType[] getTelecommunicationsService()
 * @method self addTelecommunicationsService(TelecommunicationsServiceType $value)
 * @method self setTelecommunicationsService(TelecommunicationsServiceType ...$values)
 */
class TelecommunicationsSupplyLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:PhoneNumber" => PhoneNumberType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cac:ExchangeRate" => ExchangeRateType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:TelecommunicationsService" => TelecommunicationsServiceType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:PhoneNumber" => 1,
        "cac:TelecommunicationsService" => 1,
    ];
}